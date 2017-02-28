<?php

namespace Todoparrot\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    function index() {
    	return view('home.welcome');
    }
}
