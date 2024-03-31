<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

/* tasks.blade route  */
Route::get('/', [TaskController::class, 'all']);
/* show.blade route */
Route::get('/tasks/{task}', [TaskController::class, 'show']);


Route::get('/home',function () {return view('layout');});


