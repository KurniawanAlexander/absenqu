@extends('layouts.app')

@section('title', 'Izin Pegawai')

@section('content')
    {{--
       CSS disisipkan langsung di sini untuk memastikan tampilan sesuai desain
       (mengatasi jika @stack('styles') tidak tersedia di layout utama).
    --}}
    <style>
        /* Override Background Halaman menjadi Putih */
        .page-body {
            background-color: #ffffff !important;
        }

        /* Judul Halaman */
        .page-title-custom {
            font-weight: 700;
            color: #000;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        /* Label Filter */
        .filter-label {
            font-weight: 500;
            color: #000;
        }

        /* 1. Tombol Tampilkan Data (Cyan) */
        .btn-cyan {
            background-color: #9BEAE4 !important;
            border: none;
            color: #000;
            font-weight: 500;
            padding: 6px 30px;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .btn-cyan:hover {
            background-color: #7ddad3 !important;
        }

        /* 2. Tombol Lihat Detail (Hijau Muda) */
        .btn-green {
            display: inline-block;
            background-color: #84FA9D !important;
            border: none;
            color: #000;
            font-weight: 600;
            padding: 8px 25px;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            /* Hilangkan garis bawah link */
            transition: background-color 0.3s;
        }

        .btn-green:hover {
            background-color: #6ee085 !important;
            color: #000;
        }

        /* 3. Header Tabel (Abu-abu Gelap) */
        .table-header-dark {
            background-color: #585858 !important;
            color: white !important;
            font-weight: 500;
            text-align: center;
            vertical-align: middle;
        }

        .table-header-dark th {
            background-color: #585858 !important;
            color: white !important;
            border-color: #666;
        }

        /* 4. Input Group Custom */
        .input-group-text-custom {
            background-color: #e9ecef;
            border: 1px solid #ced4da;
        }

        /* 5. Table Styling */
        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered td {
            vertical-align: middle;
            text-align: center;
        }

        /* 6. Status Badges */
        .status-badge {
            display: inline-block;
            padding: 6px 15px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.9rem;
            width: 100%;
            max-width: 140px;
            text-align: center;
        }

        .status-pending {
            background-color: #cfcfcf;
            /* Abu-abu */
            color: #444;
        }

        .status-approved {
            background-color: #4cff00;
            /* Hijau Neon */
            color: #000;
        }
    </style>

    <div class="container-fluid p-3">

        {{-- JUDUL HALAMAN --}}
        <div class="mb-4">
            <h3 class="page-title-custom">Izin Pegawai</h3>
            <p class="fw-bold text-dark" style="font-size: 0.95rem;">Silahkan Cari Data Yang Anda Butuhkan</p>
        </div>

        {{-- FILTER SECTION --}}
        <div class="row mb-4">
            <div class="col-lg-8 col-md-10">

                {{-- Filter Unit Kerja --}}
                <div class="row mb-3 align-items-center">
                    <label class="col-sm-3 col-form-label filter-label">Unit Kerja/Divisi <span
                            class="float-end me-2">:</span></label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control bg-white" value="Semua Unit Kerja / Divisi" readonly>
                            <span class="input-group-text bg-light"><i class="fa fa-search"></i></span>
                            <button class="btn btn-light border" type="button"
                                style="background-color: #e9ecef;">Pilih</button>
                        </div>
                    </div>
                </div>

                {{-- Filter Tanggal --}}
                <div class="row mb-3 align-items-center">
                    <label class="col-sm-3 col-form-label filter-label">Pilih Tanggal <span
                            class="float-end me-2">:</span></label>
                    <div class="col-sm-9 d-flex align-items-center">
                        <input type="date" class="form-control w-auto text-center" value="2025-02-12"
                            style="max-width: 150px;">
                        <span class="fw-bold mx-3">sd</span>
                        <input type="date" class="form-control w-auto text-center" value="2025-02-12"
                            style="max-width: 150px;">
                    </div>
                </div>

                {{-- Garis Pembatas Tipis --}}
                <div class="border-top my-3"></div>

                {{-- Tombol Tampilkan Data --}}
                <div class="mt-3">
                    <button class="btn-cyan">Tampilkan data</button>
                </div>
            </div>
        </div>

        {{-- TOMBOL LIHAT DETAIL --}}
        <div class="d-flex justify-content-end mb-3">
            {{-- URL DIPERBAIKI: Mengarah ke /izin/detail --}}
            <a href="{{ url('/izin/detail') }}" class="btn-green">Lihat Detail</a>
        </div>

        {{-- TABEL DATA --}}
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-header-dark">
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 12%;">Tanggal</th>
                        <th class="text-start" style="width: 25%;">Identitas Pegawai/Karyawan</th>
                        <th style="width: 15%;">Tanggal Permohonan</th>
                        <th style="width: 10%;">Jumlah Hari</th>
                        <th style="width: 10%;">Katagori Izin</th>
                        <th style="width: 13%;">Upload Dokumen izin</th>
                        <th style="width: 10%;">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-dark">
                    {{-- Placeholder Data Kosong --}}
                    <tr>
                        <td colspan="8" class="text-center py-5">
                            <p class="text-muted mb-0" style="font-size: 0.95rem;">Belum ada data izin pegawai yang
                                ditampilkan.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
