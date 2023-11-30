<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/filter', [CatalogController::class, 'filter'])->name('catalog.filter');
Route::get('/catalog/sort', [CatalogController::class, 'sort'])->name('catalog.sort');

Route::get('/pricing', [PlanController::class, 'index'])->name('pricing.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'reader'])->name('dashboard');

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/list-course', [CourseController::class, 'getAllCourseAdmin'])->name('admin.course.list');
    Route::get('/admin/add-course', [CourseController::class, 'formAddCourse'])->name('admin.course.form-add');
    Route::post('/admin/add-course', [CourseController::class, 'addCourse'])->name('admin.course.add');
    Route::get('/admin/course/{id}/edit', [CourseController::class, 'formEditCourse'])->name('admin.course.form-edit');
    Route::patch('/admin/course/{id}/edit', [CourseController::class, 'editCourse'])->name('admin.course.edit');
    Route::get('/admin/course/{id}', [CourseController::class, 'courseDetail'])->name('admin.course.detail');
    Route::delete('/admin/course/{id}', [CourseController::class, 'deleteCourse'])->name('admin.course.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
