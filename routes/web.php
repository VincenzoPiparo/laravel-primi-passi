<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
       'name' => 'Vincenzo',
       'lastname' => 'Piparo',
        'parents' => [
            'Liborio Piparo',
            'Andrea Piporo',
            'Cettina Cardinale'
        ]
    ];
    return view('helloWord', $data);
})->name('homepage');

Route::get('/bonus-in', function () {
    return view('bonus');
})->name('bonus');

Route::get('/menu-in', function () {
    return view('menu');
})->name('menu');