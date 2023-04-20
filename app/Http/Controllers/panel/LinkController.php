<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Bookmaker;
use App\Models\Link;
use AshAllenDesign\ShortURL\Classes\Builder;
use AshAllenDesign\ShortURL\Models\ShortURL;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Http\Requests\Link\StoreRequest;
use App\Http\Requests\Link\UpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class LinkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('layouts.panel.pages.links.index', [
            'links' => Link::orderBy('updated_at', 'desc')->get(),
            'bookmaker' => Bookmaker::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $bookmakers = Bookmaker::all();

        return response()->view('layouts.panel.pages.links.form', compact('bookmakers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $builder = new Builder();

        $create = Link::create($validated);

        $shortURLObject = $builder->destinationUrl($request->link)
            ->urlKey($request->name)
            ->trackVisits()
            ->trackIPAddress()
            ->trackRefererURL()
            ->trackDeviceType()
            ->trackBrowser()
            ->trackOperatingSystem()
            ->make();

        $shortURL = $shortURLObject->default_short_url;

        if($create) {
            // add flash for the success notification
            return redirect()->route('link.index')->with('status', 'Link created successfully!');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('layouts.panel.pages.links.show', [
            'link' => Link::findOrFail($id),
            'bookmakers' => Bookmaker::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {

        $link = Link::findOrFail($id);
        $bookmakers = Bookmaker::all();

        return response()->view('layouts.panel.pages.links.form', compact(['link', 'bookmakers']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $link = Link::findOrFail($id);
        $validated = $request->validated();

        $old_name = $link->name;

        $update = $link->update($validated);

        if($update) {
            $shortURL = ShortURL::where('url_key', $old_name)->first();
            $old_default_short_url = $shortURL->default_short_url;

            $new_default_short_url = Helper::changeUrlVariable($old_default_short_url, $old_name, $validated['name']);
//
            $shortURL->update([
                'destination_url' => $validated['link'],
                'url_key' => $validated['name'],
                'default_short_url' => $new_default_short_url,

            ]);

            return redirect()->route('link.index')->with('status', 'Link updated successfully!');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $link = Link::findOrFail($id);

        $delete = $link->delete($id);

        if($delete) {
            return redirect()->route('link.index')->with('status', 'Link deleted successfully!');
        }

        return abort(500);
    }
}
