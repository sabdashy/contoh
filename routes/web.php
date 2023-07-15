<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// DASHBOARD

// route untuk menampilkan Dashboard
Route::get('/', [DashboardController::class, 'index']);

// route untuk menampilkan Menu
Route::get('/menu', [DashboardController::class, 'indexMenu']);

// route untuk menampilkan About
Route::get('/about', [DashboardController::class, 'indexAbout']);

// route untuk menampilkan Contact
Route::get('/contact', [DashboardController::class, 'indexContact']);

// route untuk menampilkan Admin
Route::get('/admin', [DashboardController::class, 'indexAdmin']);

// route untuk menampilkan menu
Route::get('/details/{id}', [DashboardController::class, 'indexDetails']);

// route untuk menampilkan menu
Route::get('/details', [DashboardController::class, 'storeDetails']);

// route untuk menampilkan menu
Route::get('/checkout/{id}', [DashboardController::class, 'indexCheckout']);

Route::get('/checkout', [DashboardController::class, 'storeCheckout']);

Route::get('/confirm/{id}', [DashboardController::class, 'indexConfirm']);

Route::get('/confirm', [DashboardController::class, 'storeConfirm']);

// route untuk menambahkan produk ke cart
// Route::get('/menu/{id}', [CartController::class, 'store'])->name('addMenu.to.cart');

// Route::get('/shopping-cart', [CartController::class, 'index'])->name('shopping.cart');

// Route::patch('/update-shopping-cart', [CartController::class, 'updateCart'])->name('update.sopping.cart');
// Route::delete('/delete-cart-product', [CartController::class, 'deleteProduct'])->name('delete.cart.product');

// Route::get('/pesanan', [TransactionController::class, 'index'])->name('pesanan');

// Route::post('/transaction', [TransactionController::class, 'store']);


// ADMIN TYPE

// route untuk menampilkan Daftar Jenis Menu
Route::get('/admin/type', [TypeController::class, 'index']);

// route untuk menampilkan form tambah Jenis Menu
Route::get('/admin/type/create', [TypeController::class, 'create']);

// route untuk memproses form tambah Jenis Menu
Route::post('/admin/type', [TypeController::class, 'store']);

// route untuk menampilkan form edit dokter
Route::get('/admin/type/edit/{id}', [TypeController::class, 'edit']);

// route untuk memproses edit dokter
Route::put('/admin/type/{id}', [TypeController::class, 'update']);

// route untuk menghapus pasien
Route::delete('/admin/type', [TypeController::class, 'destroy']);


// ADMIN MENU

// route untuk menampilkan Daftar Jenis Menu
Route::get('/admin/menu', [MenuController::class, 'index']);

// route untuk menampilkan form tambah Jenis Menu
Route::get('/admin/menu/create', [MenuController::class, 'create']);

// route untuk memproses form tambah Jenis Menu
Route::post('/admin/menu', [MenuController::class, 'store']);

// route untuk menampilkan form edit dokter
Route::get('/admin/menu/edit/{id}', [MenuController::class, 'edit']);

// route untuk memproses edit dokter
Route::put('/admin/menu/{id}', [MenuController::class, 'update']);

// route untuk menghapus pasien
Route::delete('/admin/menu', [MenuController::class, 'destroy']);


// ADMIN USERS

// route untuk menampilkan Daftar Jenis Menu
Route::get('/admin/users', [UserController::class, 'index']);

// route untuk menampilkan form tambah Jenis Menu
Route::get('/admin/users/create', [UserController::class, 'create']);

// route untuk memproses form tambah Jenis Menu
Route::post('/admin/users', [UserController::class, 'store']);

// route untuk menampilkan form edit dokter
Route::get('/admin/users/edit/{id}', [UserController::class, 'edit']);

// route untuk memproses edit dokter
Route::put('/admin/users/{id}', [UserController::class, 'update']);

// route untuk menghapus pasien
Route::delete('/admin/users', [UserController::class, 'destroy']);


// ADMIN TRANSAKSI

// route untuk menampilkan Daftar Jenis Menu
Route::get('/admin/pesanan', [TransactionController::class, 'index']);

// route untuk menampilkan form tambah Jenis Menu
Route::get('/admin/pesanan/create', [TransactionController::class, 'create']);

// route untuk memproses form tambah Jenis Menu
Route::post('/admin/pesanan', [TransactionController::class, 'store']);

// route untuk menampilkan form edit dokter
Route::get('/admin/pesanan/edit/{id}', [TransactionController::class, 'edit']);

// route untuk memproses edit dokter
Route::put('/admin/pesanan/{id}', [TransactionController::class, 'update']);

// route untuk menghapus pasien
Route::delete('/admin/pesanan', [TransactionController::class, 'destroy']);
