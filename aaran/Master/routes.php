<?php

use Illuminate\Support\Facades\Route;

//Master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

//    Route::get('/companies', App\Livewire\Master\Company\Index::class)->name('companies');
//
    Route::get('/contacts', Aaran\Master\Livewire\Contact\Index::class)->name('contacts');

    Route::get('/contacts/{id}/upsert', Aaran\Master\Livewire\Contact\Upsert::class)->name('contacts.upsert');
//
//    Route::get('/products', App\Livewire\Master\Product\Index::class)->name('products');
//
//    Route::get('/orders', App\Livewire\Master\Orders\Index::class)->name('orders');
//
//    Route::get('/styles', App\Livewire\Master\Style\Index::class)->name('styles');


});
