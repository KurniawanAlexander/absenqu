@extends('layouts.app1')

@section('content')

<div class="container-fluid p-3">

    {{-- 1. Judul Halaman dan Ikon Beranda --}}
    <div class="row mb-3">
        <div class="col-10">
            <h4 class="text-dark mb-0" style="font-weight: 500;">Jadwal Kerja Pegawai</h4>
        </div>
        <div class="col-2 text-right">
            <a href="#"><i class="fas fa-home" style="font-size: 1.2rem; color: #6c757d;"></i></a>
        </div>
    </div>

    {{-- GARIS GRADASI 1: Di bawah Judul Halaman --}}
    <hr class="gradient-hr" style="margin-top: 0; margin-bottom: 20px;">

    {{-- 2. Area Pencarian & Tabel --}}

    <h5 class="card-title text-dark" style="font-size: 0.875rem; font-weight: bold; margin-bottom: 20px;">Silahkan Cari Data Yang Anda Butuhkan</h5>

    <div class="row mb-1">
        {{-- Form Pencarian Unit Kerja --}}
        <div class="col-lg-6 col-md-12">
            <div class="form-group row align-items-center">
                <label for="unitKerja" class="col-sm-3 col-form-label text-sm-right" style="padding-right: 5px;">Unit Kerja/Divisi :</label>
                <div class="col-sm-9">
                    <div class="input-group custom-input-group">
                        <input type="text" class="form-control" id="unitKerja" value=": Semua Unit Kerja / Divisi" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-secondary" type="button" style="background-color: #e9ecef; border-color: #ced4da; color: #6c757d; border-radius: 0;">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-light" type="button" style="background-color: #e9ecef; border-color: #6c757d; color: #6c757d; border-radius: 0 5px 5px 0;">
                                Pilih
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        {{-- Form Pencarian Nama Karyawan --}}
        <div class="col-lg-6 col-md-12">
            <div class="form-group row align-items-center">
                <label for="namaKaryawan" class="col-sm-3 col-form-label text-sm-right" style="padding-right: 5px;">Nama Karyawan :</label>
                <div class="col-sm-9">
                    <div class="input-group custom-input-group">
                        <input type="text" class="form-control" id="namaKaryawan" value="Tri Admajo Surya /1928019289901">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-secondary" type="button" style="background-color: #e9ecef; border-color: #ced4da; color: #6c757d; border-radius: 0;">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-light" type="button" style="background-color: #e9ecef; border-color: #6c757d; color: #6c757d; border-radius: 0 5px 5px 0;">
                                Pilih
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tombol Tampilkan Data --}}
    <div class="row mb-5">
        {{-- MENGHAPUS offset-lg-3 dan offset-sm-3 untuk memindahkan tombol ke kiri --}}
        <div class="col-lg-6 col-md-12">
            <button class="btn text-white" style="background-color: #79d8d1; border: 1px solid #79d8d1; padding: 8px 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                Tampilkan data
            </button>
        </div>
    </div>

    {{-- GARIS GRADASI 2: Di bawah Area Pencarian --}}
    <hr class="gradient-hr" style="margin-top: 0; margin-bottom: 20px;">

    {{-- Tombol Aksi (Entry dan Cetak) --}}
    <div class="row justify-content-end mb-3">
        <div class="col-auto">
            <button class="btn btn-sm text-white mr-2" style="background-color: #8ce9e9; border: 1px solid #79d8d1; border-radius: 5px; font-weight: bold; padding: 5px 15px;">
                Entry
            </button>
            <button class="btn btn-sm text-dark" style="background-color: #a4f4a4; border: 1px solid #a4f4a4; border-radius: 5px; font-weight: bold; padding: 5px 15px;">
                Cetak
            </button>
        </div>
    </div>

    {{-- Tabel Data --}}
    <div class="table-responsive">
        <table class="table" width="100%" cellspacing="0">
            <thead style="background-color: #6c757d; color: white;">
                <tr>
                    <th class="text-center" style="width: 5%;"></th>
                    <th class="text-center" style="width: 10%;">Tahun</th>
                    <th class="text-left" style="width: 25%;">Identitas Pegawai/Karyawan</th>
                    <th class="text-center" style="width: 15%;">Unit Kerja/Divisi Semula</th>
                    <th class="text-center" style="width: 15%;">Unit Kerja/Divisi Menjadi</th>
                    <th class="text-center" style="width: 20%;">SK Penugasan</th>
                    <th class="text-center" style="width: 10%;">Status</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data Dummy --}}
                <tr>
                    <td class="text-center align-middle">
                        <input type="checkbox" checked>
                    </td>
                    <td class="text-center align-middle">2020</td>
                    <td class="align-middle">Tri Admajo Surya /1928019289901</td>
                    <td class="align-middle text-center">Finance Staf</td>
                    <td class="align-middle text-center">HRD Manager</td>
                    <td class="align-middle text-center">SK Direktur Nomor 191 Tahun 2020</td>
                    <td class="text-center align-middle">
                        <button class="btn btn-sm text-white" style="background-color: #76ff76; border: none; font-weight: bold; padding: 5px 15px;">
                            Lihat
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center align-middle">
                        <input type="checkbox">
                    </td>
                    <td class="text-center align-middle">2023</td>
                    <td class="align-middle">Budi Hartanto /199512310210</td>
                    <td class="align-middle text-center">IT Support</td>
                    <td class="align-middle text-center">IT Specialist</td>
                    <td class="align-middle text-center">SK Kepala Divisi 005/IT/2023</td>
                    <td class="text-center align-middle">
                        <button class="btn btn-sm text-white" style="background-color: #76ff76; border: none; font-weight: bold; padding: 5px 15px;">
                            Lihat
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<style>
/* ---------------------------------- */
/* STYLE GRADASI */
/* ---------------------------------- */
.gradient-hr {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(224, 224, 224, 0), #e0e0e0, rgba(224, 224, 224, 0));
}

/* ---------------------------------- */
/* CSS KUSTOM SEBELUMNYA */
/* ---------------------------------- */
.custom-input-group .form-control {
    border-right: none !important;
}
.custom-input-group .input-group-append button {
    border-left: none !important;
}
.custom-input-group .form-control {
    border-radius: 5px 0 0 5px !important;
    height: calc(1.5em + .75rem + 2px);
}
.custom-input-group .input-group-append .btn-sm {
    height: 100%;
    display: flex;
    align-items: center;
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
}
</style>

@endsection
