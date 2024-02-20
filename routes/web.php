<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
    
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/projects', [AdminProjectController::class, 'index'])->name('admin.projects');
    Route::post('admin/projects/create', [AdminProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('admin/projects', [AdminProjectController::class, 'store'])->name('admin.projects.store'); 
    Route::get('admin/projects/{project}', [AdminProjectController::class, 'show'])->name('admin.projects.show');
    Route::delete('admin/projects/{project}', [AdminProjectController::class, 'destroy'])->name('admin.projects.destroy');
    Route::get('admin/delete/project/{project}', [AdminProjectController::class, 'deletedShow'])->name('admin.delete-show');
    Route::get('admin/projects/{project}/edit', [AdminProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('admin/projects/{project}', [AdminProjectController::class, 'update'])->name('admin.projects.update');
    //Route::resource('admin/project', AdminProjectController::class);
});     