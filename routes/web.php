<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;

Route::get('/',[HomeController::class, 'index']);
Route::get('/',[ExperienceController::class, 'index']);
Route::get('/',[ProjectController::class, 'index']);
Route::get('/',[SkillController::class, 'index']);