@extends('layouts.app')

@section('content')
<div class="container">
    <h1><b><u>Create Category</u></b></h1>
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="event_name">Event Name</label>
            <input type="text" name="event_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="event_description">Event Description</label>
            <textarea name="event_description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="event_image">Event Image</label>
            <input type="file" name="event_image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<br>
@endsection
