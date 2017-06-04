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

use Illuminate\Support\Facades\DB;
use App\Patient;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    $title = '트와이스';

    $body = ['나연', '쯔위', '채영', '지효', '정연', '미나', '사나', '다현', '모모'];

    return view('home', compact('title', 'body'));
});

Route::get('hello/{nama}', function ($nama) {
    return 'hello '. $nama;
});

/// --- CRUD Patient --- ///

// -- Show all patient data
Route::get('patients', 'PatientController@index');

/* Route::get('patients', function () {
    $patients = DB::table('patients')->get();
    return $patients;
}); */

// -- Create a new patient
Route::get('patients/create', 'PatientController@create');
Route::post('patients', 'PatientController@store');

// -- Update existing patient data
Route::get('patients/{id}/edit', 'PatientController@edit');
Route::put('patients/{id}', 'PatientController@update');

// -- Delete existing patient data
Route::delete('patients/{id}', 'PatientController@destroy');

// -- Show specific patient data
Route::get('patients/{id}', 'PatientController@show');
/* Route::get('patients', function ($id) {
    $patients = DB::table('patients')->where('id', $id)->get();
    return $patients;
}); */

Route::get('test', function () {
    return view('layout.app');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
