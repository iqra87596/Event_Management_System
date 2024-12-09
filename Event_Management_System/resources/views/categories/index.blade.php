@extends('layouts.app')

@section('content')
<div class="container">
    <h1><b><u>Categories</u></b></h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Event Name</th>
                <th>Event Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->event_name }}</td>
                    <td>{{ $category->event_description }}</td>
                    <td>
                        <!-- View Button -->
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>

                        <!-- Edit Button -->
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete Button -->
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
</div>
@endsection
