<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Bookmaker;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Http\Requests\Promo\UpdateRequest;
use App\Http\Requests\Promo\StoreRequest;

class PromoController extends Controller
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
        return response()->view('layouts.panel.pages.promos.index', [
            'promos' => Promo::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $bookmakers = Bookmaker::all();

        return response()->view('layouts.panel.pages.promos.form', compact('bookmakers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $create = Promo::create($validated);

        if($create) {
            // add flash for the success notification
            return redirect(route('promo.index'))->with('status', 'Promo created successfully!');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('layouts.panel.pages.promos.show', [
            'promo' => Promo::findOrFail($id),
            'bookmakers' => Bookmaker::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('layouts.panel.pages.promos.form', [
            'promo' => Promo::findOrFail($id),
            'bookmakers' => Bookmaker::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $promo = Promo::findOrFail($id);
        $validated = $request->validated();

        $update = $promo->update($validated);

        if($update) {
            return redirect(route('promo.index'))->with('status', 'Promo updated successfully!');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $promo = Promo::findOrFail($id);

        $delete = $promo->delete($id);

        if($delete) {
            return redirect(route('promo.index'))->with('status', 'Promo deleted successfully!');
        }

        return abort(500);
    }
}
