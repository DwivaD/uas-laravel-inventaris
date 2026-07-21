<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;
use App\Models\Inventaris;

Route::get('/', function () {

    $totalBarang = Inventaris::count();

    $totalKategori = Inventaris::distinct('kategori')->count('kategori');

    $totalStok = Inventaris::sum('jumlah');

    return view('dashboard', compact(
        'totalBarang',
        'totalKategori',
        'totalStok'
    ));

})->name('dashboard');

Route::resource('inventaris', InventarisController::class);