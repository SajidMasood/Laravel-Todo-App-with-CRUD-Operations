<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::get('/', [TaskController::class,'index']);
Route::get('/tasks', [TaskController::class,'index']);

Route::get('/tasks/create', [TaskController::class,'create']);

Route::post('/tasks', [TaskController::class,'store']);

// Replace the homePage
// Create a task
// Display a list of Tasks
// Mark a task as Completed
// Divided the tasks into completed and uncompleted section
// Delete a task permanently  