<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $contenus = DB::table('contenu')->get();
    $contenusArray = $contenus->toArray();
    return view('accueilClient', ['contenus' => $contenusArray]);
});

Route::get('/pageaccueilclient', function () {
    $contenus = DB::table('contenu')->get();
    $contenusArray = $contenus->toArray();
    return view('accueilClient', ['contenus' => $contenusArray]);
})->name('page.accueilclient');

Route::get('/singlecontenu', 'App\Http\Controllers\ContenuController@single')->name('contenucontroleur.single');