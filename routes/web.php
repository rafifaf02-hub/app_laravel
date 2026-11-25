<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return redirect()->route('customers.index');
});
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
