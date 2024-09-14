<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ToDoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [ToDoController::class, 'create'])->name('todos.create');
Route::post('/todos', [ToDoController::class, 'store'])->name('todos.store');
Route::get('/todos/{id}/edit', [ToDoController::class, 'edit'])->name('todos.edit');
Route::put('/todos/{id}', [ToDoController::class, 'update'])->name('todos.update');
Route::delete('/todos/{id}', [ToDoController::class, 'destroy'])->name('todos.destroy');
Route::post('/todos/{id}/complete', [ToDoController::class, 'markCompleted'])->name('todos.complete');
