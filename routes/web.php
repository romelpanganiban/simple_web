<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\ContactController;
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
    return view('index');
});

Route::get('/index', function () {
    return view('contacts.index');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/contact/create', [AdminController::class, 'create'])->name('admin.contact.create');
Route::post('/admin/contact/store', [AdminController::class, 'store'])->name('admin.contact.store');
Route::get('/admin/contact/edit/{id}', [AdminController::class, 'edit'])->name('admin.contact.edit');
Route::post('/admin/contact/update/{id}', [AdminController::class, 'update'])->name('admin.contact.update');
Route::get('/admin/contact/show/{id}', [AdminController::class, 'show'])->name('admin.contact.show');
Route::get('/admin/contact/delete/{id}', [AdminController::class, 'delete'])->name('admin.contact.delete');




Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');