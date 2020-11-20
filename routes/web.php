<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ActiveController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('transfers/', 'TransferController@index')->name('transferencias');
//Route::middleware(['auth'])->group(function () {
//    Route::get('/companies', 'CompanyController@index')->name('companies');
//    Route::post('/companies', 'CompanyController@store')->name('create-company');
//    Route::get('/companies/{id}', 'CompanyController@edit')->name('companies');
//    Route::get('/companies/{id}/eliminar', 'CompanyController@destroy')->name('delete-companies');
//    Route::get('/companies/{id}/restaurar', 'CompanyController@restore')->name('restore-companies');
//
//
//    Route::get('empleados/', 'EmployeeController@index')->name('employees');
//
//});


Route::middleware(['auth'])->group(function () {
    Route::resource('companies','CompanyController');
    Route::get('/companies/{id}/eliminar', 'CompanyController@destroy')->name('companies-delete');
    Route::get('/companies/{id}/restaurar', 'CompanyController@restore')->name('companies-restore');

//    Route::get('empleados/', 'EmployeeController@index')->name('employees');
    Route::resource('employees', 'EmployeeController');
    Route::get('/employees/{id}/eliminar', 'EmployeeController@destroy')->name('employees-delete');
    Route::get('/employees/{id}/restaurar', 'EmployeeController@restore')->name('employees-restore');


});
