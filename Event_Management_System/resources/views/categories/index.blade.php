@extends('layouts.app')

@section('content')
<div class="container">
    <h1><b><u>Categories</u></b></h1>

    <!-- Search Form -->
    <form action="{{ route('categories.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" 
                   placeholder="Search by Event Name or Description" 
                   value="{{ old('search', $query ?? '') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>

    @if ($categories->isEmpty())
        <!-- No results message -->
        <div class="alert alert-warning mt-4">
            No results found.
        </div>
    @else
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Event Image</th>
                    <th>Event Name</th>
                    <th>Event Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>
                            @if($category->event_image)
                                <img src="{{ asset('storage/' . $category->event_image) }}" alt="Category Event Image" class="img-thumbnail" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $category->event_name }}</td>
                        <td>{{ $category->event_description }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
