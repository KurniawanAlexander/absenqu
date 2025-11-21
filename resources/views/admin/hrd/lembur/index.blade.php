@extends('layouts.app')

@section('content')
    <p class="h4 mb-4 fw-bold">Lembur Pegawai</p>

    {{-- KELOMPOK FILTER & Aksi --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <p class="mb-3">Silahkan Cari Data Yang Anda Butuhkan</p>

            <div class="row">

                {{-- KOLOM KIRI: FILTER --}}
                <div class="col-md-12">
                    
                    {{-- 1. FILTER UNIT KERJA/DIVISI --}}
                    <div class="d-flex align-items-center mb-2 pb-2">

                        {{-- KOLOM 1: LABEL (Rata Kiri) --}}
                        <div style="min-width: 140px;" class="text-start">
                            <label class="mb-0 d-inline-block">Unit Kerja/Divisi</label>
                        </div>

                        {{-- KOLOM 2: TITIK DUA (Fixed width untuk sejajar) --}}
                        <div style="width: 20px;" class="text-center">
                            <label class="mb-0 d-inline-block fw-bold">:</label>
                        </div>

                        {{-- KOLOM 3: INPUT / SELECT --}}
                        <div class="flex-grow-1" style="max-width: 450px;">
                            <select class="form-select form-select-sm" name="unit_kerja">
                                <option>Semua Unit Kerja / Divisi</option>
                                <option>IT</option>
                                <option>Human Resources</option>
                                <option>Finance</option>
                                <option>Marketing</option>
                                <option>Operations</option>
                            </select>
                        </div>
                    </div>

                    {{-- 2. FILTER PILIH TANGGAL --}}
                    <div class="d-flex align-items-center mb-2 pb-2">

                        {{-- KOLOM 1: LABEL (Rata Kiri) --}}
                        <div style="min-width: 140px;" class="text-start">
                            <label class="mb-0 d-inline-block">Pilih Tanggal</label>
                        </div>

                        {{-- KOLOM 2: TITIK DUA --}}
                        <div style="width: 20px;" class="text-center">
                            <label class="mb-0 d-inline-block fw-bold">:</label>
                        </div>

                        {{-- KOLOM 3: INPUT TANGGAL + TOMBOL DEMPET --}}
                        <div class="d-flex align-items-center">
                            <input type="date" class="form-control form-control-sm me-2" style="width: 150px;"
                                name="tanggal_dari" value="2025-02-12">
                            <span class="fw-bold me-2">sd</span>
                            <input type="date" class="form-control form-control-sm" style="width: 150px;"
                                name="tanggal_sampai" value="2025-02-12">
                        </div>
                    </div>

                    {{-- TOMBOL TAMPILKAN DATA (Di bawah filter, di sebelah kiri) --}}
                    <button class="btn btn-sm btn-lg px-4 mt-3"
                        style="background: #06b6d4; border-color: #06b6d4; color: white;">
                        Tampilkan data
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- TABEL DATA LEMBUR PEGAWAI --}}
    <div class="card shadow-sm">
        <div class="card-header bg-white border-bottom">
            <div class="d-flex justify-content-end align-items-center">
                {{-- Tombol Entry Baru dipindahkan ke sini --}}
                <a href="{{ url('/lembur/create') }}" style="text-decoration: none;">
                    <button class="btn btn-sm fw-bold text-white d-flex align-items-center px-3 py-2"
                        style="background-color: #7C3AED; border-color: #7C3AED; border-radius: 20px;">
                        <i class="bi bi-plus-circle me-2"></i>
                        Entry Baru
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead style="background-color: #6b7280; color: white;">
                        <tr>
                            <th class="px-3 py-3 text-center" style="width: 80px;"></th>
                            <th class="py-3 text-center" style="width: 50px;">No</th>
                            <th class="py-3">Tanggal Submit</th>
                            <th class="py-3">Nama Pegawai / Karyawan</th>
                            <th class="py-3">Tanggal Lembur</th>
                            <th class="py-3">Jam Lembur</th>
                            <th class="py-3">Keterangan Tugas</th>
                            <th class="py-3">Surat Perintah Lembur</th>
                            <th class="py-3 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: #f9fafb;">
                            <td class="px-3 text-center">
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td class="text-center">1</td>
                            <td>12-02-2025</td>
                            <td>
                                <div>Tri Admajo Surya</div>
                                <div class="text-muted small">/1928019289901</div>
                            </td>
                            <td>13-02-2025 sd<br>13-02-2025</td>
                            <td>18.00 -<br>20.00</td>
                            <td>Melaksanakan Penyelesaian<br>Laporan Audit Stok</td>
                            <td>
                                <a href="#" class="text-decoration-underline text-dark">Surat Perintah Lembur.pdf</a>
                            </td>
                            <td class="text-center">
                                <span class="badge" style="background-color: #cccccc; color: #92400e; padding: 0.4em 0.8em; border-radius: 4px;">Permohonan</span>
                            </td>
                        </tr>
                        <tr style="background-color: white;">
                            <td class="px-3 text-center">
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td class="text-center">2</td>
                            <td>12-02-2025</td>
                            <td>
                                <div>Surya Paloh</div>
                                <div class="text-muted small">/1928019289702</div>
                            </td>
                            <td>15-02-2025 sd<br>15-02-2025</td>
                            <td>18.00 -<br>22.00</td>
                            <td>Menyelesaikan laporan Kas</td>
                            <td>
                                <a href="#" class="text-decoration-underline text-dark">Surat Perintah Lembur.pdf</a>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-success text-white" style="padding: 0.4em 0.8em; border-radius: 4px;">Izin Diterima</span>
                            </td>
                        </tr>
                        <tr style="background-color: #f9fafb;">
                            <td class="px-3 text-center">
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td class="text-center">3</td>
                            <td>11-02-2025</td>
                            <td>
                                <div>Ahmad Rizki</div>
                                <div class="text-muted small">/1928019289801</div>
                            </td>
                            <td>14-02-2025 sd<br>14-02-2025</td>
                            <td>19.00 -<br>23.00</td>
                            <td>Closing laporan keuangan bulanan</td>
                            <td>
                                <a href="#" class="text-decoration-underline text-dark">Surat Perintah Lembur.pdf</a>
                            </td>
                            <td class="text-center">
                                <span class="badge" style="background-color: #cccccc; color: #92400e; padding: 0.4em 0.8em; border-radius: 4px;">Permohonan</span>
                            </td>
                        </tr>
                        <tr style="background-color: white;">
                            <td class="px-3 text-center">
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td class="text-center">4</td>
                            <td>11-02-2025</td>
                            <td>
                                <div>Siti Nurhaliza</div>
                                <div class="text-muted small">/1928019289903</div>
                            </td>
                            <td>13-02-2025 sd<br>13-02-2025</td>
                            <td>17.00 -<br>21.00</td>
                            <td>Persiapan campaign marketing</td>
                            <td>
                                <a href="#" class="text-decoration-underline text-dark">Surat Perintah Lembur.pdf</a>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-success text-white" style="padding: 0.4em 0.8em; border-radius: 4px;">Izin Diterima</span>
                            </td>
                        </tr>
                        <tr style="background-color: #f9fafb;">
                            <td class="px-3 text-center">
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td class="text-center">5</td>
                            <td>10-02-2025</td>
                            <td>
                                <div>Budi Santoso</div>
                                <div class="text-muted small">/1928019289904</div>
                            </td>
                            <td>12-02-2025 sd<br>12-02-2025</td>
                            <td>20.00 -<br>01.00</td>
                            <td>Maintenance sistem server</td>
                            <td>
                                <a href="#" class="text-decoration-underline text-dark">Surat Perintah Lembur.pdf</a>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-success text-white" style="padding: 0.4em 0.8em; border-radius: 4px;">Izin Diterima</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top">
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-muted mb-0 small">Menampilkan 1 sampai 5 dari 156 data</p>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">32</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <style>
        .table tbody tr {
            transition: background-color 0.15s ease-in-out;
        }
        
        .table tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.05);
        }
        
        .badge {
            font-weight: 500;
            padding: 0.35em 0.65em;
        }
        
        .card {
            border: none;
            border-radius: 0.5rem;
        }
        
        .form-select:focus,
        .form-control:focus {
            border-color: #06b6d4;
            box-shadow: 0 0 0 0.2rem rgba(6, 182, 212, 0.25);
        }

        .table thead th {
            font-weight: 600;
            font-size: 0.9rem;
            border: none;
        }

        .table tbody td {
            vertical-align: middle;
            font-size: 0.9rem;
            border-color: #e5e7eb;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
    </style>
@endsection