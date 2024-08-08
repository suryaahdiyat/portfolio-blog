<?php

use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('portfolio');
});
Route::get('/know-me-more', [SkillController::class, 'index']);
Route::get('/know-me-more/skill/add', [SkillController::class, 'create']);
Route::post('/know-me-more', [SkillController::class, 'store']);
Route::get('/know-me-more/skill/edit/{skill}', [SkillController::class, 'edit']);
Route::put('/know-me-more/{skill}', [SkillController::class, 'update']);
Route::delete('/know-me-more/skill/{skill}', [SkillController::class, 'destroy']);
