<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Abcscontrollerx;

Route::get('/welcome', [Abcscontrollerx::class, 'add']);
Route::post('/blog/add', [Abcscontrollerx::class, 'store'])->name('add');
Route::get('/',[Abcscontrollerx::class,'index'])->name('read');
Route::get('/blog/{id}/edit', [Abcscontrollerx::class, 'edit'])->name('edit');
Route::put('/blog/{id}', [Abcscontrollerx::class, 'update'])->name('update');
Route::delete('/blog/{id}', [Abcscontrollerx::class, 'delete'])->name('delete');








