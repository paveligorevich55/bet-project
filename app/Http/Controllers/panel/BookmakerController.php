<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bookmaker\StoreRequest;
use App\Http\Requests\Bookmaker\UpdateRequest;
use App\Models\Bookmaker;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class BookmakerController extends Controller
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
        return response()->view('layouts.panel.bookmakers.index', [
            'bookmakers' => Bookmaker::orderBy('updated_at', 'desc')->get(),
            'links' => Link::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('layouts.panel.bookmakers.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/bookmakers/images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        $create = Bookmaker::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Bookmaker created successfully!');
            return redirect()->route('bookmaker.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('layouts.panel.bookmakers.show', [
            'bookmaker' => Bookmaker::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('layouts.panel.bookmakers.form', [
            'bookmaker' => Bookmaker::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $bookmaker = Bookmaker::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            if ($bookmaker->image != null){
                Storage::disk('public')->delete($bookmaker->image);
            }
            $filePath = Storage::disk('public')->put('images/bookmakers/images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $bookmaker->update($validated);

        if($update) {
            session()->flash('notif.success', 'Bookmaker updated successfully!');
            return redirect()->route('bookmaker.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $bookmaker = Bookmaker::findOrFail($id);

        Storage::disk('public')->delete($bookmaker->image);

        $delete = $bookmaker->delete($id);

        if($delete) {
            session()->flash('notif.success', 'Bookmaker deleted successfully!');
            return redirect()->route('bookmaker.index');
        }

        return abort(500);
    }
}
