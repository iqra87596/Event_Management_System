<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EventManagementController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        return view('products');
    }

    public function contact()
    {
        return view('contact');
    }

}

