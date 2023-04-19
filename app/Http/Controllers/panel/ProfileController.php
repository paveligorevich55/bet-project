<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Models\UserProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, string $id): RedirectResponse
    {
        $userProfile = UserProfile::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('image')){
            Storage::disk('public')->delete($userProfile->image);

            $filePath = Storage::disk('public')->put('images/user-profiles/images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $userProfile->update($validated);

        if($update) {
            return redirect(back())->with('status', 'User Profile updated successfully!');
        }

        return abort(500);
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
