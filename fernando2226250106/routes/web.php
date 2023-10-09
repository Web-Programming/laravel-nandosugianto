<?php

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

// buat route ke halaman profil
Route::get("/profil", function () {
    return view("profil");
});

// route dengan paramter (wajib)
Route::get("/Mahasiswa/(nama)", function ($nama = "Nando") {
    echo "<h1>Helo Nama Saya $nama</h2>";
});

// route dengan parameter (tidak wajib)
Route::get("/Mahasiswa/(nama)", function ($nama = "Nando") {
    echo "<h1>Helo Nama Saya $nama</h2>";
});

// route dengan paramter > 1
Route::get("/profil/{nama?}/ {pekerjaan?}", function ($nama = "Nando", $pekerjaan = "Mahasiswa") {
    echo "<h1>Helo Nama Saya $nama. Saya adalah $pekerjaan</h2>";

});

// redirect
Route::get("/hubungi", function () {
    echo "<h1> Hubungi kami</h1>";
})->name("call");

route::redirect("/contact", "/hubungi");

Route::get("/halo", function () {
    echo "<a href='" . route('call') . "'>" . route('call') . "</a>";
});

//Memudahkan kita mengelompokan route per modul
Route::prefix("/dosen") ->group(function() {
    route::get("/jadwal", function () {
        echo "<h1> jadwal dosen</h1>";
    });
    Route::get("/materi", function() {
        echo"<h1> Materi Perkuliahan</h1>";
    });
    // dan lain2

});