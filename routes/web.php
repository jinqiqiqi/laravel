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

// Route::get('/', 'TaskController@index');

// Route::post('/task', 'TaskController@task');

// Route::delete('/task/{id}', 'TaskController@delete');

Route::get('/', function() {
    return redirect('cats');
    //    return 'All cats';
});

Route::get('about', function(){
    return view('cats.about');
});

Route::get('cats', function() {
	$cats = Furbook\Cat::all();
    return view('cats.index')->with('cats', $cats);
});


Route::get('cats/{id?}', function($id = 34){
    $cat = Furbook\Cat::find($id);
    return view('cats.show')->with('cat', $cat);
})->where('id', '[0-9]+');