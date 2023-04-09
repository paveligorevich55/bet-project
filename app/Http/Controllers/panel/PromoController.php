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
        return response()->view('promos.index', [
            'promos' => Promo::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $bookmakers = Bookmaker::all();

        return response()->view('promos.form', compact('bookmakers'));
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
            session()->flash('notif.success', 'Promo created successfully!');
            return redirect()->route('promos.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('promos.show', [
            'promo' => Promo::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('promos.form', [
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
            session()->flash('notif.success', 'Promo updated successfully!');
            return redirect()->route('promos.index');
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
            session()->flash('notif.success', 'Promo deleted successfully!');
            return redirect()->route('promos.index');
        }

        return abort(500);
    }
}
