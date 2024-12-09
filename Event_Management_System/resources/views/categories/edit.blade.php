@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1><b><u>Edit Category</u></b></h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="event_name">Name</label>
            <input type="text" name="event_name" class="form-control" value="{{ $category->event_name }}" required>
        </div>
        <div class="form-group">
            <label for="event_description">Description</label>
            <textarea name="event_description" class="form-control">{{ $category->event_description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
    <br>
</div>
@endsection
