<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webmaster;
use App\Http\Requests\Webmaster\UpdateRequest;
use App\Http\Requests\Webmaster\StoreRequest;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class WebmasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $webmaster = Webmaster::find(1);

        return response()->view('layouts.panel.pages.webmasters.index', compact(['webmaster']));
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $create = Webmaster::create($validated);

        if ($create) {
            session()->flash('notif.success', 'Webmaster Code Create successfully');
            return redirect()->back();
        }

        return abort(500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $validated = $request->validated();
        $webmaster = Webmaster::find(1);

        $update = $webmaster->update($validated);

        if($update) {
            session()->flash('notif.success', 'Webmaster Code updated successfully!');
            return redirect()->back();
        }

        return abort(500);
    }

}
