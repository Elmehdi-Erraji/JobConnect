<?php

use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Guest\GuestController;
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
})->name('home');

// Route::get('/dashboard', function () {return view('admin.index');})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[DashController::class,'index'])->middleware('admin')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('skills', \App\Http\Controllers\Admin\SkillController::class);
    Route::resource('contracts', \App\Http\Controllers\Admin\ContractController::class);
    Route::resource('profession', \App\Http\Controllers\Admin\ProfessionController::class);
     Route::resource('recuiters', \App\Http\Controllers\REntreprise\RecruiterController::class);
    
    
    Route::resource('entreprise', \App\Http\Controllers\Admin\EntrepriseController::class);
});
Route::resource('users', \App\Http\Controllers\Admin\UserController::class);

Route::resource('profile', \App\Http\Controllers\ProfileController::class);



















require __DIR__.'/auth.php';

// Route::get('/home', [GuestController::class, 'index']);




// Admin    :: mehdi@mail.com

// Manager  :: amin@mail.com 

// Recruter :: recruter@mail.com	

// Condidat :: candidat@mail.com

// Test     :: test@mail.com

// Banned   :: bann@mail.com















Route::get('myCompanydash', function () {
    return view('Entreprise.index');
})->name('myCompanydash');


