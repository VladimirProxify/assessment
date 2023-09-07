<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Create a route for POST -> /api/campaign/create.
// That how it looks, but best practice is implemented below
// Route::post('/campaign/create', [CampaignController::class, 'store']);


Route::get('/campaigns', [CampaignController::class, 'index']);
Route::post('/campaigns', [CampaignController::class, 'store']);
Route::patch('/campaigns/{campaign}', [CampaignController::class, 'update']);
Route::delete('/campaigns/{campaign}', [CampaignController::class, 'destroy']);
