@extends('layouts.app')

@section('content')
<div class="container">
    <h1><b><u>Categories</u></b></h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>

    <!-- Search Bar -->
    <div class="mt-4 mb-4">
        <input type="text" id="search-bar" class="form-control mb-2" placeholder="Search by Event Name or Event Description">
        <button id="search-btn" class="btn btn-primary">Search</button>
        <ul id="search-results" class="list-group mt-2" style="display: none;"></ul>
    </div>

    <!-- Table -->
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
        <tbody id="categories-table">
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
</div>

<!-- JavaScript for Search -->
<script>
    function fetchResults(term) {
        const resultsList = document.getElementById('search-results');
        const tableBody = document.getElementById('categories-table');

        if (term.length > 0) {
            fetch(`{{ route('categories.search') }}?term=${encodeURIComponent(term)}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                resultsList.style.display = 'block';
                resultsList.innerHTML = '';

                if (data.length > 0) {
                    resultsList.innerHTML = data.map(category => `<li class="list-group-item">${category.event_name} - ${category.event_description || 'No Description'}</li>`).join('');
                    tableBody.innerHTML = data.map(category => `
                        <tr>
                            <td>${category.id}</td>
                            <td>${category.event_image ? `<img src="/storage/${category.event_image}" class="img-thumbnail" width="50">` : 'No Image'}</td>
                            <td>${category.event_name}</td>
                            <td>${category.event_description || 'No Description'}</td>
                            <td>
                                <a href="/categories/${category.id}" class="btn btn-info btn-sm">View</a>
                                <a href="/categories/${category.id}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <form action="/categories/${category.id}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    `).join('');
                } else {
                    resultsList.innerHTML = '<li class="list-group-item">No results found</li>';
                    tableBody.innerHTML = '<tr><td colspan="5" class="text-center">No results found</td></tr>';
                }
            })
            .catch(error => console.error('Error fetching search results:', error));
        } else {
            resultsList.style.display = 'none';
        }
    }

    document.getElementById('search-bar').addEventListener('keyup', function () {
        fetchResults(this.value.trim());
    });

    document.getElementById('search-btn').addEventListener('click', function () {
        const term = document.getElementById('search-bar').value.trim();
        fetchResults(term);
    });
</script>
@endsection
