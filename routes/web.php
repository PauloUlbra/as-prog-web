<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtifactController;
use App\Http\Controllers\ExpeditionController;
use App\Http\Controllers\ExplorerController;
use App\Http\Controllers\GuideController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Artifact routes
Route::get('artifacts', [ArtifactController::class, 'index']);
Route::get('artifacts/create', [ArtifactController::class, 'create']);
Route::post('artifacts', [ArtifactController::class, 'store']);
Route::get('artifacts/{id}/edit', [ArtifactController::class, 'edit']);
Route::put('artifacts/{id}', [ArtifactController::class, 'update']);
Route::delete('artifacts/{id}', [ArtifactController::class, 'destroy']);

// Expedition routes
Route::get('expeditions', [ExpeditionController::class, 'index']);
Route::get('expeditions/create', [ExpeditionController::class, 'create']);
Route::post('expeditions', [ExpeditionController::class, 'store']);
Route::get('expeditions/{id}/edit', [ExpeditionController::class, 'edit']);
Route::put('expeditions/{id}', [ExpeditionController::class, 'update']);
Route::delete('expeditions/{id}', [ExpeditionController::class, 'destroy']);

// Explorer routes
Route::get('explorers', [ExplorerController::class, 'index']);
Route::get('explorers/create', [ExplorerController::class, 'create']);
Route::post('explorers', [ExplorerController::class, 'store']);
Route::get('explorers/{id}/edit', [ExplorerController::class, 'edit']);
Route::put('explorers/{id}', [ExplorerController::class, 'update']);
Route::delete('explorers/{id}', [ExplorerController::class, 'destroy']);

// Guide routes
Route::get('guides', [GuideController::class, 'index']);
Route::get('guides/create', [GuideController::class, 'create']);
Route::post('guides', [GuideController::class, 'store']);
Route::get('guides/{id}/edit', [GuideController::class, 'edit']);
Route::put('guides/{id}', [GuideController::class, 'update']);
Route::delete('guides/{id}', [GuideController::class, 'destroy']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
