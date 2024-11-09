@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Welcome to EventMaster</h1>
    <p>Book tickets to your favorite events effortlessly!</p>
    <a href="{{ route('event-listings') }}" class="btn btn-primary btn-lg">Explore Events</a>
</div>
@endsection
