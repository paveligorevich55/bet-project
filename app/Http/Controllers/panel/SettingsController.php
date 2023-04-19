<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\StoreRequest;
use App\Http\Requests\Settings\UpdateRequest;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $setting = Settings::first();

        return response()->view('layouts.panel.pages.settings.index', compact('setting'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $create = Settings::create($validated);

        if ($create) {
            return redirect(back())->with('status', 'Settings Create successfully');
        }

        abort(500);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Settings $settings): RedirectResponse
    {
        $validated = $request->validate();

        $update = Settings::update($validated);

        if ($update) {
            return redirect(back())->with('status', 'Settings Updated successfully');
        }

        abort(500);
    }

}
