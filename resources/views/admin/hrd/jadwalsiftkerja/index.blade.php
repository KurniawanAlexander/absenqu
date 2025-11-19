@extends('layouts.app')

@section('title', 'Jadwal Sift Kerja Pegawai')

@push('styles')
    <style>
        /* Ini untuk menimpa (override) background abu-abu dari tema 'Riho'
              HANYA di halaman ini, agar latar belakangnya putih bersih
              sesuai gambar.
            */
        .page-body {
            background-color: #ffffff !important;
        }

        /* Menyesuaikan input group agar tombol 'Pilih' tidak terlalu besar
              dan input field readonly terlihat sedikit abu-abu.
            */
        .form-filters .input-group .form-control[readonly] {
            background-color: #f8f9fa !important;
        }

        .form-filters .btn {
            border-color: #ced4da !important;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-sm-12">

            {{-- ================================================== --}}
            {{-- 2. BLOK FILTER (Layout Rata Sesuai Gambar) --}}
            {{-- ================================================== --}}
            <div class="form-filters mb-4">

                <div class="row mb-2 align-items-center">
                    <div class="col-lg-2">
                        <label for="filter-unit-kerja" class="col-form-label">Unit Kerja/Divisi</label>
                    </div>
                    <div class="col-auto" style="width: 1rem;">:</div>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input class="form-control" id="filter-unit-kerja" type="text"
                                placeholder="Semua Unit Kerja / Divisi" readonly>
                            <button class="btn btn-light" type="button" data-bs-toggle="modal"
                                data-bs-target="#modalPilihUnit">
                                <i class="fa fa-search"></i> Pilih
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row mb-2 align-items-center">
                    <div class="col-lg-2">
                        <label for="filter-karyawan" class="col-form-label">Nama Karyawan</label>
                    </div>
                    <div class="col-auto" style="width: 1rem;">:</div>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input class="form-control" id="filter-karyawan" type="text"
                                placeholder="Semua Pegawai/Karyawan" readonly>
                            <button class="btn btn-light" type="button" data-bs-toggle="modal"
                                data-bs-target="#modalPilihKaryawan">
                                <i class="fa fa-search"></i> Pilih
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-lg-2">
                        <label for="filter-periode-start" class="col-form-label">Periode</label>
                    </div>
                    <div class="col-auto" style="width: 1rem;">:</div>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input class="form-control" id="filter-periode-start" type="date" value="2025-02-12">
                            <span class="input-group-text">s/d</span>
                            <input class="form-control" id="filter-periode-end" type="date" value="2025-02-12">
                            <button class="btn btn-light" type="button">
                                <i class="fa fa-search"></i> Pilih
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-auto" style="width: 1rem;"></div>
                    <div class="col-lg-5">

                    </div>
                </div>
                <button class="btn" type="button" style="background-color: #24CCFF; color: white;">Tampilkan
                    data</button>
            </div>

            {{-- ================================================== --}}
            {{-- 3. BLOK TABEL DATA (Langsung di halaman) --}}
            {{-- ================================================== --}}

            {{-- Tombol Aksi Atas (Entry & Cetak) --}}
            <div class="d-flex justify-content-end mb-3">
                <button class="btn me-2" type="button" data-bs-toggle="modal" data-bs-target="#modalEntryData"
                    style="background-color: #24CCFF; color: white;">
                    Entry
                </button>
                <button class="btn" type="button" style="background-color: #4CAF50; color: white;">
                    Cetak
                </button>
            </div>

            {{-- Tabel Data --}}
            <div class="table-responsive">
                <table class="table table-hover" id="tabel-jadwal-sift">
                    <thead style="background-color: #4B5563; color: white;">
                        <tr>
                            {{-- <th style="width: 20px;">
                                <input class="form-check-input" type="checkbox" value="" id="checkAll"
                                    style="border: 1px solid #aaa;">
                            </th> --}}
                            <th scope="col" style="width: 50px;">No</th>
                            <th scope="col">Bulan</th>
                            <th scope="col">Identitas Pegawai/Karyawan</th>
                            <th scope="col">Unit Kerja/Divisi</th>
                            <th scope="col">Jam Masuk</th>
                            <th scope="col">Jam Pulang</th>
                            <th scope="col">Sift Kerja</th>
                            <th scope="col" style="width: 100px;">Status</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
@endsection
