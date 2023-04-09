<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

// Use the Post Model

// We will use Form Request to validate incoming requests from our store and update method

class CategoryController extends Controller
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
        return response()->view('categories.index', [
            'categories' => Category::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $create = Category::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Category created successfully!');
            return redirect()->route('categories.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('categories.show', [
            'bookmaker' => Category::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('categories.form', [
            'category' => Category::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $category = Category::findOrFail($id);
        $validated = $request->validated();

        $update = $category->update($validated);

        if($update) {
            session()->flash('notif.success', 'Category updated successfully!');
            return redirect()->route('categories.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $category = Category::findOrFail($id);

        $delete = $category->delete($id);

        if($delete) {
            session()->flash('notif.success', 'Category deleted successfully!');
            return redirect()->route('categories.index');
        }

        return abort(500);
    }
}
