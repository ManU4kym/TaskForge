<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

/* tasks.blade route  */
Route::get('/', [TaskController::class, 'index']);
/* show.blade route */
Route::get('/tasks/{task}', [TaskController::class, 'show']);


Route::get('/home',function () {return view('layout');});
 /* create route */

 Route::get('/create',[TaskController::class,'create']);

 Route::post('/tasks', [TaskController::class, 'store']);


