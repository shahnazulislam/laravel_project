<?php

use App\Http\Controllers\crudController;
use Illuminate\Support\Facades\Route;



/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get  ('/', [crudController::class, 'showData']);
Route::get  ('/add_data', [crudController::class, 'addData']);
Route::post ('/store_data', [crudController::class, 'storeData']);
Route::get  ('edit_data/{id}', [crudController::class, 'editData']);
Route::post  ('update_data/{id}', [crudController::class, 'updateData']);
Route::get  ('delete_data/{id}', [crudController::class, 'deleteData']);