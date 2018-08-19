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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('abc', function () {
    //return view('abc', [
    //  "name" => "World"
  //  ]);
//});

//Tas pats kas virs šitā
//Route::get('abc', function () {
    //return view('abc') -> with("name","World");
//});


//Arī tas pats
//Route::get('abc', function () {
    //$name = "Jeff ";
    //$age = 31;
    //return view('abc', compact("name","age"));
//});

//Route::get('abc', function () {
  //  $tasks = [
    //  "Go to the store",
    //  "Finish my screencast",
    //  "Clean the house"
    //];
    //return view('abc', compact("tasks"));
//});


Route::get('abc', function () {
    $tasks = DB::table("tasks")->get();
    //return $tasks;

    return view('abc', compact("tasks"));
});

Route::get('abc/tasks/{task}', function ($id) {
    dd($id);
    $tasks = DB::table("tasks")->get();
    //return $tasks;

    return view('abc', compact("tasks"));
});

Route::get('StartaLapa', function () {
    return view('StartaLapa');
});

Route::get('BlogaIeraksts', function () {
    return view('BlogaIeraksts');
});

Route::get('StatiskaLapa', function () {
    return view('StatiskaLapa');
});
