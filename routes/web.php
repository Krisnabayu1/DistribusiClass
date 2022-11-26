<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KloterController;
use App\Http\Controllers\MemberController;

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
    return view('home');
});

Route::get('/members', function () {
    return view('members', [
        "title" => "Members",
    ]);
});




Route::get('/login', function () {
    return view('posts', [
        "title" => "Login"
    ]);
});

Route::get('/kloters', function () {
    return view('kloters', [
        "title" => "kloters"
    ]);
});


Route::get('/tutors', function () {
    return view('tutors', [
        "title" => "tutor"
    ]);
});

Route::get('/ruangans', function () {
    return view('ruangans', [
        "title" => "ruangans"
    ]);
});

Route::get('/subjects', function () {
    return view('subjects', [
        "title" => "subject"
    ]);
});
Route::resource('jams', JamController::class);
Route::resource('tutors', TutorController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('ruangans', RuanganController::class);
Route::resource('kloters', KloterController::class);
Route::resource('members', MemberController::class);
