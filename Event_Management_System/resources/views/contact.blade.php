@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container my-5">
    <h1 class="display-4 fst-italic text-center menu-header">
        <b><u>CONTACT US</u></b>
    </h1>
    <form action="#" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="event booking" class="form-label">Event Booking</label>
            <input type="text" class="form-control" id="event_booking" name="event_booking" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Custom CSS for Navbar Color and Art Works Header Background Color -->
<style>
    .navbar {
        background-color: #6a0dad; /* Intense purple color */
        height: 70px; /* Set navbar height to 70 pixels */
    }
    .navbar .nav-link {
        color: #ffffff; /* White color for navbar links */
    }
    .navbar .nav-link:hover {
        color: #d3d3d3; /* Light gray on hover */
    }
    .navbar-brand {
        color: #ffffff; /* White color for the "EVENT MANAGEMENT SYSTEM" text */
    }
    .menu-header {
        background-color: #6a0dad; /* Intense purple background color */
        color: #ffffff; /* White text color for contrast */
        padding: 10px; /* Optional padding for better spacing */
        border-radius: 5px; /* Optional rounded corners */
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #111;
        color: #ccc;
    }
    /* Additional styles */
    .container {
        max-width: 450px; /* Updated to 450px */
        margin: 0 auto;
        padding: 20px;
    }
    .order-details {
        background-color: #6a0dad; /* Changed background color */
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 40px;
        color: black; /* Updated text color */
    }
    .order-details h3 {
        color: black;
        margin-bottom: 20px;
        font-size: 24px;
    }
    .order-details label {
        color: black;
        display: block;
        margin-bottom: 5px;
    }
    .order-details .form-control {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        color: #333;
    }
    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    #selected-items {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        color: #333;
        margin-bottom: 15px;
    }
    #total-price {
        display: block;
        font-size: 18px;
        font-weight: bold;
        color: white; /* Changed text color to white */
    }
    .footer {
        background-color: #6a0dad;
        padding: 40px 20px;
        color: #ccc;
        font-size: 14px;
    }
    .footer .container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: 0 auto;
    }
    .footer-column h3 {
        color: #fff;
        font-size: 16px;
        margin-bottom: 10px;
    }
    .footer-column a {
        color: #ccc;
        text-decoration: none;
        display: block;
        margin: 5px 0;
    }
    .footer-bottom {
        text-align: center;
        margin-top: 20px;
        border-top: 1px solid #333;
        padding-top: 20px;
    }
    .footer-bottom .info {
        color: #fff;
        font-weight: bold;
    }
    .footer-bottom .social-icons a {
        color: #ccc;
        margin: 0 10px;
        font-size: 20px;
    }
</style>
@endsection
