<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;
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

use App\Http\Controllers\ServiceController;


Route::get('/', function () {
     return view('welcome');
    
});

Route::get('koshi', [ServiceController::class, 'koshi']);


//Route::get('service', 'ServiceController@View');
// Route::get('product', 'Productcontroller@productView');
//Route::get('service','ServiceController@View');
// Route::get('service', 'okkk@View');
Route::get('service', [ServiceController::class, 'View']);
Route::post('service', [ServiceController::class, 'store']);
Route::get('serviceid/{id}', [ServiceController::class, 'serviceDetail']);

Route::get('rout-bind/{routbindid:name}', [ServiceController::class, 'serviceDetailBind']);

Route::get('getall', [ServiceController::class, 'getallSerive']);



Route::get('dependency', [ServiceController::class, 'dependency']);



