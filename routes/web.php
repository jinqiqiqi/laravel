<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	$items = ['Pack luggage', 'Go to airport', 'Arrive in San Juan'];
// 	// dd($items);

//     return view('welcome');
// });

Route::get('/', function () {
	$items = ['Pack luggage', 'Go to airport', 'Arrive in San Juan'];
	// dd($items);

    return view('welcome');
});
