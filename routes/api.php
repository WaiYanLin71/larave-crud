<?php

use App\Http\Controllers\Api\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create/student',[StudentController::class,'create']);

Route::get('/students',[StudentController::class,'index']);

Route::delete('/{id}/student',[StudentController::class,'destroy']);

Route::put('/{id}/student',[StudentController::class,'update']);

Route::post('/img/upload',[StudentController::class,'upload']);

