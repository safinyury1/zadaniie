<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');



Route::get('/reports', 
[ReportController::class, 'index'])
->name('reports.index');

Route::get('/reports/create', function () { return view('reports.create'); })->name('reports.create');

Route::get('/reports/{report}',[ReportController::class,'show'])->name('reports.show');

Route::get('/reports/{report}/edit',[ReportController::class,'edit'])->name('reports.edit');

Route::put('/reports/{report}',[ReportController::class,'update'])->name('reports.update');

Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');

Route::delete('/reports/{report}',[ReportController::class, 'destroy'])->name('reports.destroy');



