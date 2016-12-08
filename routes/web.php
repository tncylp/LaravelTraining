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
//     $people = ['Tuncay', 'Çağla', 'Eren'];
//     //$people = [];
//
//     //return View::make();
//     return view('welcome', compact('people'));
//     // aşağıdaki 3 satır üsteki satırla tamamen aynı işi yapıyor.
//     // return view('welcome', ['people' => $people]);
//     // return view('welcome')->with('people', $people);
//     //return view('welcome')->withPeople($people);
// });

// Route::get('about', function () {
//     return view('pages.about');  // resources/views/pages/about.blade.php
// });

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
