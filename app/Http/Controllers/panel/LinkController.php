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
        return response()->view('links.index', [
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

        return response()->view('links.form', compact('bookmakers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $create = Link::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Link created successfully!');
            return redirect()->route('links.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('links.show', [
            'link' => Link::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('links.form', [
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

        $update = $link->update($validated);

        if($update) {
            // add flash for the success notification
            session()->flash('notif.success', 'Link updated successfully!');
            return redirect()->route('links.index');
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
            session()->flash('notif.success', 'Link deleted successfully!');
            return redirect()->route('links.index');
        }

        return abort(500);
    }
}
