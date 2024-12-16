<?php
use App\Http\Controllers\FuelController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TransmissionController;
use App\Http\Controllers\CarController;

Route::get('/', function(){
    return view('layouts.app');
})->name('home');

Route::get('fuels', [FuelController::class, 'index'])->name('fuels');
Route::get('fuels/{id}', [FuelController::class,'destroy'])->name('fuels.destroy');
Route::put('fuels/{id}', [FuelController::class,'update'])->name('fuels.update');
Route::get('fuels/{id}/edit', [FuelController::class,'edit'])->name('fuels.edit');


Route::get('bodies', [BodyController::class, 'index'])->name('bodies');
Route::get('bodies/{id}', [BodyController::class,'destroy'])->name('bodies.destroy');
Route::put('bodies/{id}', [BodyController::class,'update'])->name('bodies.update');
Route::get('bodies/{id}/edit', [BodyController::class,'edit'])->name('bodies.edit');
Route::get('bodies/create', [BodyController::class,'create'])->name('bodies.create');
Route::put('bodies/{name}', [BodyController::class,'store'])->name('bodies.store');


Route::get('colors', [ColorController::class, 'index'])->name('colors');
Route::get('colors/{id}', [ColorController::class,'destroy'])->name('colors.destroy');
Route::put('colors/{id}', [ColorController::class,'update'])->name('colors.update');
Route::get('colors/{id}/edit', [ColorController::class,'edit'])->name('colors.edit');


Route::get('transmissions', [TransmissionController::class, 'index'])->name('transmissions');
Route::get('transmissions/{id}', [TransmissionController::class,'destroy'])->name('transmissions.destroy');
Route::put('transmissions/{id}', [TransmissionController::class,'update'])->name('transmissions.update');
Route::get('transmissions/{id}/edit', [TransmissionController::class,'edit'])->name('transmissions.edit');


Route::get('models', [ModelController::class, 'index'])->name('models');
Route::get('models/{id}', [ModelController::class,'destroy'])->name('models.destroy');
Route::put('models/{id}', [ModelController::class,'update'])->name('models.update');
Route::get('models/{id}/edit', [ModelController::class,'edit'])->name('models.edit');


Route::get('makers', [MakerController::class, 'index'])->name('makers');
Route::get('makers/{id}', [MakerController::class,'destroy'])->name('makers.destroy');
Route::get('makers/{id}/carmodels', [MakerController::class,'models'])->name('makers.models');
Route::put('makers/{id}', [MakerController::class,'update'])->name('makers.update');
Route::get('makers/{id}/edit', [MakerController::class,'edit'])->name('makers.edit');


Route::get('cars', [CarController::class, 'index'])->name('cars');
Route::get('cars/{id}', [CarController::class,'destroy'])->name('cars.destroy');
Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
Route::put('cars/{id}', [CarController::class,'update'])->name('cars.update');
Route::get('cars/{id}/edit', [CarController::class,'edit'])->name('cars.edit');



