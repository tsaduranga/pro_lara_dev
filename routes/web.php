<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/temp', function () {
    return view('index1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/suppliers', function () {
    return view('suppliers');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/subcategories', function () {
    return view('subcategories');
});

Route::get('/items', function () {
    return view('items');
});

Route::get('/customers', function () {
    return view('customers');
});

Route::get('/total-invoices', function () {
    return view('total_invoices');
});

Route::get('/total-reservations', function () {
    return view('total_reservations');
});

Route::get('/quotations', function () {
    return view('quotations');
});



Route::get('/stock', function () {
    return view('stock');
});

Route::get('/grn', function () {
    return view('grn');
});

Route::get('/supplier-payments', function () {
    return view('supplier_payments');
});

Route::get('/supplier-payments-completed', function () {
    return view('supplier_payments_completed');
});

Route::get('/customer-payments', function () {
    return view('customer_payments');
});


Route::get('/customer-payments-completed', function () {
    return view('customer_payments_completed');
});


Route::get('/banks', function () {
    return view('banks');
});

Route::get('/grn-return', function () {
    return view('grn_return');
});

Route::get('/customer-return', function () {
    return view('customer_return');
});

Route::get('/customer-return-list', function () {
    return view('customer_return_list');
});

Route::get('/expenses-and-income-type', function () {
    return view('expenses_income_type');
});

Route::get('/expenses', function () {
    return view('expenses');
});


Route::get('/incomes', function () {
    return view('incomes');
});
