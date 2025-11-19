@extends('layouts.app')

@section('title', 'Rekap Absensi Masuk Pegawai')

@push('styles')
    <style>
        /* Mengoverride background abu-abu tema agar jadi putih bersih */
        .page-body {
            background-color: #ffffff !important;
        }

        /* Styling untuk kotak statistik kustom */
        .stat-card {
            padding: 15px 20px;
            border-radius: 12px;
            color: white;
            display: flex;
            align-items: center;
            height: 100%; /* Memastikan tinggi sama */
        }
        .stat-card-icon {
            /* Menggunakan ikon FontAwesome yang sudah ada di template Anda */
            font-size: 2.5rem;
            margin-right: 15px;
            line-height: 1;
        }
        .stat-card-info h6 {
            font-weight: 600;
            margin-bottom: 5px;
            color: white;
            font-size: 1rem;
        }
        .stat-card-info p {
            margin-bottom: 0;
            line-height: 1.4;
            font-size: 13px;
        }
        /* Warna dari gambar */
        .stat-card.blue { background-color: #24CCFF; }
        .stat-card.purple { background-color: #7A89F8; }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-sm-12">

            {{-- ================================================== --}}
            {{-- 1. BAGIAN JUDUL HALAMAN --}}
            {{-- ================================================== --}}
            <div class="mb-3">
                <h4 class="mb-0" style="font-weight: 600;">Rekap Absensi Masuk Pegawai</h4>
            </div>

            {{-- ================================================== --}}
            {{-- 2. BLOK FILTER & STATISTIK (Kolom Kiri & Kanan) --}}
            {{-- ================================================== --}}
            <div class="row mb-4">

                {{-- KOLOM KIRI: FILTER --}}
                <div class="col-lg-7">
                    <div class="form-filters">

                        <div class="row mb-2 align-items-center">
                            <div class="col-lg-3">
                                <label for="filter-tanggal-start" class="col-form-label">Pilih Tanggal</label>
                            </div>
                            <div class="col-auto" style="width: 1rem;">:</div>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input class="form-control" id="filter-tanggal-start" type="date" value="2025-02-12">
                                    <span class="input-group-text">s/d</span>
                                    <input class="form-control" id="filter-tanggal-end" type="date" value="2025-02-12">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2 align-items-center">
                            <div class="col-lg-3">
                                <label for="filter-unit-kerja" class="col-form-label">Unit Kerja/Divisi</label>
                            </div>
                            <div class="col-auto" style="width: 1rem;">:</div>
                            <div class="col-lg-8">
                                <input class="form-control" id="filter-unit-kerja" type="text" placeholder="Semua Unit Kerja / Divisi" readonly style="background-color: #f8f9fa;">
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-3">
                                <label for="filter-karyawan" class="col-form-label">Nama Karyawan</label>
                            </div>
                            <div class="col-auto" style="width: 1rem;">:</div>
                            <div class="col-lg-8">
                                <input class="form-control" id="filter-karyawan" type="text" placeholder="Semua Pegawai/Karyawan" readonly style="background-color: #f8f9fa;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-auto" style="width: 1rem;"></div>
                            <div class="col-lg-8">
                                <button class="btn" type="button" style="background-color: #24CCFF; color: white;">Tampilkan data</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- KOLOM KANAN: STATISTIK --}}
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <div class="stat-card blue">
                                <i class="fa fa-male stat-card-icon"></i>
                                <div class="stat-card-info">
                                    <h6>Rekap Absen Masuk</h6>
                                    <p>10 Tepat waktu<br>02 Terlambat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="stat-card purple">
                                <i class="fa fa-male stat-card-icon"></i>
                                <div class="stat-card-info">
                                    <h6>Rekap Absen Pulang</h6>
                                    <p>11 Tepat waktu<br>01 Terlalu Cepat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ================================================== --}}
            {{-- 3. BLOK TABEL DATA --}}
            {{-- ================================================== --}}

            {{-- Tombol Aksi Atas (Lihat & Cetak) --}}
            <div class="d-flex justify-content-end mb-3">
                <button class="btn me-2" type="button" style="background-color: #24CCFF; color: white;">
                    Lihat
                </button>
                <button class="btn" type="button" style="background-color: #4CAF50; color: white;">
                    Cetak
                </button>
            </div>

            {{-- Tabel Data --}}
            <div class="table-responsive">
                <table class="table table-hover" id="tabel-absensi">
                    <thead style="background-color: #4B5563; color: white;">
                        <tr>
                            <th style="width: 20px;">
                                <input class="form-check-input" type="checkbox" value="" id="checkAll" style="border: 1px solid #aaa;">
                            </th>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Identitas Pegawai/Karyawan</th>
                            <th scope="col">Unit Kerja/Divisi</th>
                            <th scope="col">Jam Masuk</th>
                            <th scope="col">Absensi/Presensi</th>
                            <th scope="col">Selisih Jam</th>
                            <th scope="col" style="width: 120px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Data Baris 1 (dari gambar) --}}
                        <tr>
                            <td><input class="form-check-input" type="checkbox" style="border: 1px solid #aaa;"></td>
                            <th scope="row">1</th>
                            <td>12/02/2025</td>
                            <td>Tri Admojo Surya /1928019289901</td>
                            <td>
                                <div>Finance</div>
                                <small class="text-muted">Direktur</small>
                            </td>
                            <td>
                                <div>07.30</div>
                                <small class="text-muted">Sift 1</small>
                            </td>
                            <td>07.15</td>
                            <td>+00.15</td>
                            <td>
                                <button class="btn btn-sm" style="background-color: #84D44E; color: white; width: 110px;">Sesuai</button>
                            </td>
                        </tr>

                        {{-- Data Baris 2 (dari gambar) --}}
                        <tr>
                            <td><input class="form-check-input" type="checkbox" style="border: 1px solid #aaa;"></td>
                            <th scope="row">2</th>
                            <td>12/02/2025</td>
                            <td>Budi Handoko /10192020100</td>
                            <td>
                                <div>HRD</div>
                                <small class="text-muted">Manager</small>
                            </td>
                            <td>
                                <div>07.30</div>
                                <small class="text-muted">Sift 1</small>
                            </td>
                            <td>07.05</td>
                            <td>+00.25</td>
                            <td>
                                <button class="btn btn-sm" style="background-color: #84D44E; color: white; width: 110px;">Sesuai</button>
                            </td>
                        </tr>

                        {{-- Data Baris 3 (dari gambar) --}}
                        <tr>
                            <td><input class="form-check-input" type="checkbox" style="border: 1px solid #aaa;"></td>
                            <th scope="row">3</th>
                            <td>12/02/2025</td>
                            <td>Budi Handoko /10192020100</td>
                            <td>
                                <div>HRD</div>
                                <small class="text-muted">Staf</small>
                            </td>
                            <td>
                                <div>07.30</div>
                                <small class="text-muted">Sift 1</small>
                            </td>
                            <td>07.35</td>
                            <td>-00.05</td>
                            <td>
                                {{-- Tombol kuning dengan border dan teks gelap --}}
                                <button class="btn btn-sm" style="background-color: #FFD700; color: #333; width: 110px; border: 1px solid #E6C200;">Tidak Sesuai</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
