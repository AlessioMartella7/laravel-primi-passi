<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/', function () {
        $title = " The journey begins!";
        $home = "Home";
        $booleaners ="Booleaners";
        $about ="About Us";
        return view('home', compact('title','home','booleaners','about'));
    }
);
