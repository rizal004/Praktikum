<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('loginView');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/index', function () {
    return view('index');
});

Route::get('/create', function () {
    return view('create');
});
Route::get('/edit', function () {
 return view('edit');
}); 


//Login 
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout/user', [AuthController::class, 'logout'])->name('logout');

Route::get('/mahasiswa', [mahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/create/', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/edit/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
Route::get('/mahasiswa/print/data', [MahasiswaController::class, 'print'])->name('mahasiswa.print');
Route::get('/mahasiswa/search', [MahasiswaController::class, 'search'])->name('mahasiswa.search');