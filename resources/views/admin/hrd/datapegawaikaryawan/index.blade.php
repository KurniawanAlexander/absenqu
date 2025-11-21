@extends('layouts.app')

@section('title', 'Dashboard Admin - Data Pegawai')

@section('content')

{{-- Link CDN CSS DataTables --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

{{-- Custom CSS sesuai request warna --}}
<style>
    /* Warna Custom */
    .btn-custom-cyan {
        background-color: #93FFFA;
        color: #000;
        font-weight: 500;
        border: 1px solid #8bede8;
    }
    .btn-custom-cyan:hover { background-color: #7eebe6; }

    .btn-custom-green {
        background-color: #4DED15;
        color: #000; 
        font-weight: 600;
        border: none;
    }
    .btn-custom-green:hover { background-color: #42cc12; }

    .btn-custom-yellow {
        background-color: #ECE41C;
        color: #000;
        font-weight: 600;
        border: none;
    }
    .btn-custom-yellow:hover { background-color: #d6cf19; }

    .btn-custom-magenta {
        background-color: #FD20DA;
        color: #fff; 
        font-weight: 600;
        border: none;
    }
    .btn-custom-magenta:hover { background-color: #e01cc1; }

    /* Table Styling */
    .table-header-custom {
        background-color: #606060 !important;
        color: white;
    }
    
    /* Override warna header DataTables */
    table.dataTable thead th {
        background-color: #606060; 
        color: white;
        border-bottom: none;
        vertical-align: middle; /* Agar teks header di tengah vertikal */
    }

    .filter-label {
        min-width: 150px;
        font-weight: 500;
    }
    
    .form-control-sm {
        border-radius: 0;
    }
</style>

<div class="container-fluid py-4">
    
    {{-- Judul Halaman --}}
    <h3 class="fw-bold mb-1">Data Pegawai / Karyawan</h3>
    <p class="mb-4 fw-bold">Silahkan Cari Data Yang Anda Butuhkan</p>

    {{-- Bagian Filter --}}
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="d-flex align-items-center mb-2">
                <span class="filter-label">Unit Kerja/Divisi :</span>
                <input type="text" class="form-control form-control-sm w-50" placeholder="Semua Karyawan / Pegawai">
            </div>
            <div class="d-flex align-items-center mb-3">
                <span class="filter-label">Nama Karyawan :</span>
                <input type="text" class="form-control form-control-sm w-50" placeholder="Semua Karyawan / Pegawai">
            </div>
            <button class="btn btn-custom-cyan px-4 shadow-sm rounded-3">Tampilkan data</button>
        </div>
    </div>

    {{-- Tombol Aksi Atas --}}
    <div class="d-flex justify-content-end mb-2 gap-2">
        {{-- Tombol Entry Global --}}
        <button class="btn btn-custom-green rounded-pill px-4 shadow-sm">Entry</button>
        <button class="btn btn-custom-yellow rounded-pill px-4 shadow-sm">Edit</button>
        <button class="btn btn-custom-magenta rounded-pill px-4 shadow-sm">Hapus</button>
    </div>

    {{-- Tabel Data --}}
    <div class="table-responsive">
        <table id="pegawaiTable" class="table table-bordered align-middle">
            <thead class="table-header-custom text-center align-middle">
                <tr>
                    <th style="width: 20px;"><input type="checkbox"></th>
                    <th style="width: 30px;">No</th>
                    <th>Identitas Pegawai/Karyawan</th>
                    <th>Unit Kerja/Divisi</th>
                    <th>Jenis Pegawai</th>
                    <th>No TLpn (WA) Pegawai</th>
                    <th>Status Pegawai</th>
                    {{-- PERBAIKAN 1: Memberikan lebar minimum (width) pada kolom Detail --}}
                    <th style="min-width: 100px;">Detail</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data Baris 1 --}}
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td class="text-center">1</td>
                    <td>
                        <strong>Tri Admajo Surya</strong> <br>
                        <span class="text-muted">/ 1928019289901</span>
                    </td>
                    <td>
                        Finance <br>
                        Direktur Marketing
                    </td>
                    <td class="text-center">Tetap</td>
                    <td class="text-center">081164784192</td>
                    <td class="text-center">Aktif</td>
                    <td class="text-center">
                        {{-- PERBAIKAN 2: Menghapus w-100, menambah padding (px-4) agar rapi di tengah --}}
                        <a href="{{ url('/datapegawaikaryawan/entry') }}" class="btn btn-custom-green btn-sm px-4 text-white text-decoration-none shadow-sm">
                            Lihat
                        </a>
                    </td>
                </tr>

                {{-- Data Baris 2 --}}
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td class="text-center">2</td>
                    <td>
                        <strong>Budi Handoko</strong> <br>
                        <span class="text-muted">/ 10192020100</span>
                    </td>
                    <td>
                        HRD <br>
                        Manager Marketing
                    </td>
                    <td class="text-center">Kontrak</td>
                    <td class="text-center">0878901929101</td>
                    <td class="text-center">Aktif</td>
                    <td class="text-center">
                         <a href="{{ url('/datapegawaikaryawan/entry') }}" class="btn btn-custom-green btn-sm px-4 text-white text-decoration-none shadow-sm">
                            Lihat
                        </a>
                    </td>
                </tr>

                {{-- Data Baris 3 --}}
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td class="text-center">3</td>
                    <td>
                        <strong>Budi Handoko</strong> <br>
                        <span class="text-muted">/ 10192020100</span>
                    </td>
                    <td>
                        HRD <br>
                        Staf
                    </td>
                    <td class="text-center">Kontrak</td>
                    <td class="text-center">0816819291819</td>
                    <td class="text-center">Aktif</td>
                    <td class="text-center">
                         <a href="{{ url('/datapegawaikaryawan/entry') }}" class="btn btn-custom-green btn-sm px-4 text-white text-decoration-none shadow-sm">
                            Lihat
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

{{-- Script Section --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#pegawaiTable').DataTable({
            "paging": true,
            "lengthChange": false, 
            "searching": false,   
            "ordering": true,
            "info": true,
            "autoWidth": false, // Mematikan auto width agar width manual kita (min-width: 100px) bekerja
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json" 
            }
        });
    });
</script>

@endsection