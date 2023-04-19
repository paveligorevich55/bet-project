<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Bookmaker;
use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Requests\Link\StoreRequest;
use App\Http\Requests\Link\UpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use AshAllenDesign\ShortURL\Classes\Builder;
use AshAllenDesign\ShortURL\Models\ShortURL;

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
        return response()->view('layouts.panel.pages.links.form', [
            'link' => Link::findOrFail($id),
            'bookmakers' => Bookmaker::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $link = Link::findOrFail($id);
        $validated = $request->validated();
        dd($request);
//        $shortURL = ShortURL::where('url_key', $request->name)->first();

        $update = $link->update($validated);

//        $updateURL = $shortURL->update([
//            'destination_url' => $request->link,
//            'url_key' => $request->name,
//        ]);

        if($update) {
            // add flash for the success notification
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
