<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AdminProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ProjectsController::class, 'index']);

Route::get('/project/{id}', [ProjectsController::class, 'show'])->name('project');


/**
 * Admin
 */
Route::get('/admin', function() {
    return view('admin.index');
});

Route::resource('/admin/projects', AdminProjectsController::class);

Route::post('/changePosition', [AdminProjectsController::class, 'changePosition']);
Route::post('/changeSize', [AdminProjectsController::class, 'changeSize']);

// Photo Intervention
Route::post('/admin/projects/{id}/addPhoto', [AdminProjectsController::class, 'addPhoto']);

Route::delete('/admin/projects/{id}/removePhoto', [AdminProjectsController::class, 'removePhoto']);

