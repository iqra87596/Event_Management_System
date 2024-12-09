<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        // Fetch all categories and pass to view
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'nullable|string',
        ]);

        // Create new category
        Category::create($request->all());

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified category.
     */
    public function show(Category $category)
    {
        // Eager load associated event bookings
        $category->load('eventBookings');
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Validate incoming request data
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'nullable|string',
        ]);

        // Update category details
        $category->update($request->all());

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Category $category)
    {
        // Delete the category
        $category->delete();

        // Reset the auto-increment value to 1 after deletion
        \DB::statement('ALTER TABLE categories AUTO_INCREMENT = 1');

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
