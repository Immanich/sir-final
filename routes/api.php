<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\PaymentController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/students', [StudentController::class, 'index']);
Route::delete('/students/{student}', [StudentController::class, 'destroy']);
Route::get('/students/{student}', [StudentController::class, 'show']);
Route::put('/students/{student}', [StudentController::class, 'update']);
Route::resource('/students', StudentController::class);

Route::post('/accounts/{account}/charges', [ChargeController::class, 'store'])->name('charges.store');
Route::post('/payments/{account}', [PaymentController::class, 'store'])->name('payments.store');







