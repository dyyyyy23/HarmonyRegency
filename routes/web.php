<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\PropertiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/berita', [PagesController::class, 'berita'])->name('berita');

// Jika ingin detail berita per id (opsional)
// Route::get('/berita/{id}', [PagesController::class, 'beritaShow'])->name('berita.show');

Route::get('/berita', [Controller::class, 'berita'])->name('berita');
// Semua route CRUD untuk admin (resource)
Route::resource('admin/berita', BeritaController::class, [
    'as' => 'admin' // otomatis prefix nama route: admin.berita.*
]);

// Route Resource dengan prefix "admin" dan nama route "admin.properti"
Route::resource('admin/properti', PropertiController::class, [
    'as' => 'admin'
]);
Route::resource('properti', PropertiController::class);

Route::get('/login', function () {
    return view('admin.login');
})->name('login')->middleware('guest');

Route::post('/login', function (Request $request) {
    $username = 'admin';
    $password = 'password123';

    if ($request->input('username') === $username && $request->input('password') === $password) {
        session(['is_admin' => true]);
        return redirect('/admin/dashboard');
    } else {
        return back()->with('error', 'Username atau password salah.');
    }
})->name('login.process');

Route::get('/logout', function () {
    session()->forget('is_admin');
    return redirect('/login');
})->name('logout');

Route::get('/admin/dashboard', function () {
    if (!session('is_admin')) {
        return redirect('/login');
    }
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/berita', function () {
    return view('pages.berita');
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/properti', function () {
    return view('pages.properti');
});

