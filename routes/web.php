<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

// ==============================
// MASTER DATA
// ==============================
Route::get('/jabatan', function () {
    return view('admin.master.jabatan.index');
});
Route::get('/kota', function () {
    return view('admin.master.kota.index');
});
Route::get('/provinsi', function () {
    return view('admin.master.provinsi.index');
});
Route::get('/siftkerja', function () {
    return view('admin.master.siftkerja.index');
});
Route::get('/statuspegawaikaryawan', function () {
    return view('admin.master.statuspegawaikaryawan.index');
});
Route::get('/unitkerjadevisi', function () {
    return view('admin.master.unitkerjadevisi.index');
});

// ==============================
// HRD (HUMAN RESOURCES)
// ==============================
Route::get('/absensipresensi', function () {
    return view('admin.hrd.absensipresensi.index');
});

// Cuti
Route::get('/cuti', function () {
    return view('admin.hrd.cuti.index');
});
Route::get('/cuti/create', function () {
    return view('admin.hrd.cuti.create');
});

// Data Pegawai
Route::get('/datapegawaikaryawan', function () {
    return view('admin.hrd.datapegawaikaryawan.index');
});
Route::get('/datapegawaikaryawan/entry', function () {
    return view('admin.hrd.datapegawaikaryawan.entry_pegawai');
});

// === [FIXED] ROUTE IZIN ===
Route::get('/izin', function () {
    return view('admin.hrd.izin.index');
});
Route::get('/izin/detail', function () {
    return view('admin.hrd.izin.show');
});
// ==========================

// Jadwal Shift
Route::get('/jadwalsiftkerja', function () {
    return view('admin.hrd.jadwalsiftkerja.index');
});
Route::get('/jadwalsiftkerja/create', function () {
    return view('admin.hrd.jadwalsiftkerja.create');
});

// Lembur
Route::get('/lembur', function () {
    return view('admin.hrd.lembur.index');
});
Route::get('/lembur/create', function () {
    return view('admin.hrd.lembur.create');
});

// Mutasi Pegawai
Route::get('/mutasipegawai', function () {
    return view('admin.hrd.mutasipegawai.index');
});
Route::get('/mutasipegawai/create', function () {
    return view('admin.hrd.mutasipegawai.create');
})->name('mutasipegawai.create');


// ==============================
// VERIFIKASI
// ==============================
Route::get('/verifikasi', function () {
    return view('admin.verifikasi.index');
});

// ==============================
// APPROVAL
// ==============================
Route::get('/approval', function () {
    return view('admin.approval.index');
});

// ==============================
// LAPORAN (CHALLENGE)
// ==============================
Route::get('/programchallange', function () {
    return view('admin.challange.programchallange.index');
});

// ==============================
// FINANCE
// ==============================
Route::get('/gaji', function () {
    return view('admin.finance.gaji.index');
});
Route::get('/remburse', function () {
    return view('admin.finance.remburse.index');
});

// ==============================
// BRIEFING / MEETING
// ==============================
Route::get('/jadwalmeeting', function () {
    return view('admin.breafing.jadwalmeeting.index');
});
Route::get('/pengumuman', function () {
    return view('admin.breafing.pengumuman.index');
});
