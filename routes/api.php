<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AddController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\MultiplyController;
use App\Http\Controllers\Api\SubtractController;
use App\Http\Controllers\Api\SaveValueController;
use App\Http\Controllers\Api\ClearValueController;
use App\Http\Controllers\Api\SquareRootController;
use App\Http\Controllers\Api\RetrieveValueController;

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


Route::prefix('/v1')->group( function() {
    
    //Arithmathic Operations
    Route::post('/add', [AddController::class, 'show']);
    Route::post('/subtract', [SubtractController::class, 'show']);
    Route::post('/multiply', [MultiplyController::class, 'show']);
    Route::post('/divide', [DivisionController::class, 'show']);
    Route::post('/squareroot', [SquareRootController::class, 'show']);

    //Saving and fetching Data
    Route::post('/save', [SaveValueController::class, 'store']);
    Route::get('/savedvalue', [RetrieveValueController::class, 'show']);
    Route::post('/clear', [ClearValueController::class, 'delete']);

});