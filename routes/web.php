<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ScrollController;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ImageUploadController;
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

Route::get('/scroll', [ScrollController::class, 'index']);

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

// RESTFUL Controller Routes
Route::get('/admin/projects/sortProjects', [AdminProjectsController::class, 'sort']);
Route::post('/admin/projects/sortUpdate', [AdminProjectsController::class, 'sortUpdate']);
Route::resource('/admin/projects', AdminProjectsController::class);

// Rotes for initial project position and size on project index page
Route::post('/changePosition', [AdminProjectsController::class, 'changePosition']);
Route::post('/changeSize', [AdminProjectsController::class, 'changeSize']);


// Photo Intervention
Route::post('/admin/projects/{id}/addPhoto', [PhotosController::class, 'addPhoto']);
Route::delete('/admin/projects/{id}/removePhoto', [PhotosController::class, 'removePhoto']);

