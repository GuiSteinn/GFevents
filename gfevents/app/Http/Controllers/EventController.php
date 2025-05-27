<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display events
        return view('welcome');
    }
    public function create(){
        return view('events.create');
    }
}
