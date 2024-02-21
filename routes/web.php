<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('skills', \App\Http\Controllers\Admin\SkillController::class);
Route::resource('profession', \App\Http\Controllers\Admin\ProfessionController::class);
Route::resource('skills', \App\Http\Controllers\Admin\SkillController::class);

require __DIR__.'/auth.php';
































Route::get('/dashboard', function () {
    return view('admin.index');
})->name('admin.index');




Route::get('/users', function () {
    return view('admin.users.index');
})->name('admin.users.index');


Route::get('/users/create', function () {
    return view('admin.users.create');
})->name('admin.users.create');


Route::get('/users/edit', function () {
    return view('admin.users.edit');
})->name('admin.users.edit');



Route::get('/entreprise', function () {
    return view('admin.entreprise.index');
})->name('admin.entreprise.index');


Route::get('/entreprise/create', function () {
    return view('admin.entreprise.create');
})->name('admin.entreprise.create');


Route::get('/entreprise/edit', function () {
    return view('admin.entreprise.edit');
})->name('admin.entreprise.edit');







Route::get('/profession', function () {
    return view('admin.profession.index');
})->name('admin.profession.index');


Route::get('/contract', function () {
    return view('admin.contract.index');
})->name('admin.contract.index');

Route::get('/education_level', function () {
    return view('admin.education_level.index');
})->name('admin.education_level.index');

Route::get('/category', function () {
    return view('admin.category.index');
})->name('admin.category.index');

