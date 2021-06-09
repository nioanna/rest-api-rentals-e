<?php

use App\Http\Controllers\HomesController;
use App\Http\Controllers\UserController;
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

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::post("user-signup", [UserController::class, "userSignUp"]);
Route::post("user-login", [UserController::class, "userLogin"]);
Route::get("user/{email}", [UserController::class, "userDetail"]);

Route::get('homes/{num}', [HomesController::class, 'showNum']);


Route::get('homes', [HomesController::class, 'index']);

//  Route::get('homes/{residentialBuilding}',[HomesController::class,'show']);

Route::group(['middleware' => 'auth:api'], function () {


    Route::post('homes', [HomesController::class, 'store']);
    Route::put('homes/{residentialBuilding}', [HomesController::class, 'update']);
    Route::delete('homes/{residentialBuilding}', [HomesController::class, 'delete']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
