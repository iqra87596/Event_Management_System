<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryApiController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

    public function show(Category $category)
    {
        return response()->json($category);
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

        $category = Category::create($data);
        return response()->json($category, 201);
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
            // Delete old event image if it exists
            if ($category->event_image) {
                Storage::disk('public')->delete($category->event_image);
            }
            $data['event_image'] = $request->file('event_image')->store('event-images', 'public');
        }

        $category->update($data);
        return response()->json($category);
    }

    public function destroy(Category $category)
    {
        if ($category->event_image) {
            Storage::disk('public')->delete($category->event_image);
        }

        $category->delete();
        return response()->json(null, 204);
    }
}
