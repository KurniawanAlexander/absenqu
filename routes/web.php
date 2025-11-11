<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard1');
});


//master
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


//HRD
Route::get('/absensipresensi', function () {
    return view('admin.hrd.absensipresensi.index');
});
Route::get('/cuti', function () {
    return view('admin.hrd.cuti.index');
});
Route::get('/datapegawaikaryawan', function () {
    return view('admin.hrd.datapegawaikaryawan.index');
});
Route::get('/izin', function () {
    return view('admin.hrd.izin.index');
});
Route::get('/jadwalsiftkerja', function () {
    return view('admin.hrd.jadwalsiftkerja.index');
});
Route::get('/lembur', function () {
    return view('admin.hrd.lembur.index');
});
Route::get('/mutasipegawai', function () {
    return view('admin.hrd.mutasipegawai.index');
});


//verifikasi
Route::get('/verifikasi', function () {
    return view('admin.verifikasi.index');
});


//Approval
Route::get('/approval', function () {
    return view('admin.approval.index');
});


//Laporan
Route::get('/programchallange', function () {
    return view('admin.challange.programchallange.index');
});


//Finance
Route::get('/gaji', function () {
    return view('admin.finance.gaji.index');
});
Route::get('/remburse', function () {
    return view('admin.finance.remburse.index');
});


//Brefing/Meeting
Route::get('/jadwalmeeting', function () {
    return view('admin.breafing.jadwalmeeting.index');
});
Route::get('/pengumuman', function () {
    return view('admin.breafing.pengumuman.index');
});
