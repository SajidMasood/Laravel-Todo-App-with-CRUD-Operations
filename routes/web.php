<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;



Route::get('/', [TaskController::class,'index']);
Route::get('/tasks', [TaskController::class,'index']);

Route::get('/tasks/create', [TaskController::class,'create']);

Route::post('/tasks', [TaskController::class,'store']);

// update
Route::patch('/tasks/{id}',[TaskController::class, 'update']);

// Replace the homePage
// Create a task
// Display a list of Tasks
// Mark a task as Completed
// Divided the tasks into completed and uncompleted section
// Delete a task permanently  
Route::delete('/tasks/{id}', [TaskController::class,'delete']);