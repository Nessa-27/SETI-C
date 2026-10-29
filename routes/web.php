<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DossierController;

Route::get('/', [DossierController::class, 'index'])->name('dossiers.index');
Route::get('/dossiers/create', [DossierController::class, 'create'])->name('dossiers.create');
Route::post('/dossiers', [DossierController::class, 'store'])->name('dossiers.store');
Route::get('/dossiers/{dossier}', [DossierController::class, 'show'])->name('dossiers.show');
Route::get('/dossiers/{dossier}/edit', [DossierController::class, 'edit'])->name('dossiers.edit');
Route::put('/dossiers/{dossier}', [DossierController::class, 'update'])->name('dossiers.update');
Route::delete('/dossiers/{dossier}', [DossierController::class, 'destroy'])->name('dossiers.destroy');
Route::get('/dossiers/{dossier}/pdf/{type}', [DossierController::class, 'pdf'])->name('dossiers.pdf');