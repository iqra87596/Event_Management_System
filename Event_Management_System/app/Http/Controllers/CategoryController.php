<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'nullable|string',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('event_image')) {
            $data['event_image'] = $request->file('event_image')->store('event-images', 'public');
        }

        Category::create($data);
        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    public function show(Category $category)
    {
        $category->load('eventBookings');
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'nullable|string',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('event_image')) {
            if ($category->event_image) {
                Storage::disk('public')->delete($category->event_image);
            }
            $data['event_image'] = $request->file('event_image')->store('event-images', 'public');
        }

        $category->update($data);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        if ($category->event_image) {
            Storage::disk('public')->delete($category->event_image);
        }

        $category->delete();
        \DB::statement('ALTER TABLE categories AUTO_INCREMENT = 1');
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('term', '');

        if (!empty($searchTerm)) {
            $categories = Category::where('event_name', 'like', '%' . $searchTerm . '%')
                ->orWhere('event_description', 'like', '%' . $searchTerm . '%')
                ->get();
        } else {
            $categories = Category::all(); // Return all if search term is empty
        }

        return response()->json($categories);
    }
}
