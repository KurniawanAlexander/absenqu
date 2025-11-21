@extends('layouts.app')

@section('title', 'Entry Data Pegawai')

@section('content')

{{-- Custom CSS untuk halaman ini --}}
<style>
    /* Warna Label Data (Abu-abu Gelap) */
    .bg-label-dark {
        background-color: #525554;
        color: white;
        border-radius: 6px;
        padding: 8px 15px;
        font-weight: 500;
        min-width: 160px; /* Menjaga lebar label agar rapi */
    }

    /* Tombol Kembali (Hijau Terang) */
    .btn-back-green {
        background-color: #4DED15;
        color: #000;
        font-weight: bold;
        border-radius: 10px;
        border: none;
        padding: 15px 30px;
        font-size: 1.1rem;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: background-color 0.3s;
    }
    .btn-back-green:hover {
        background-color: #3ec211;
        color: #000;
    }

    /* Tombol Entry Data Kecil (Hijau Muda Pucat) */
    .btn-entry-pill {
        background-color: #8BFFBF;
        color: #000;
        border-radius: 20px;
        padding: 5px 20px;
        font-weight: 600;
        font-size: 0.9rem;
        border: none;
        text-decoration: none;
        transition: background-color 0.3s;
    }
    .btn-entry-pill:hover {
        background-color: #72e0a3;
        color: #000;
    }

    /* Styling Baris Data */
    .data-row {
        display: flex;
        align-items: center;
        padding: 5px 0;
        border-bottom: 1px solid #e0e0e0;
    }
    .data-value {
        padding-left: 15px;
        font-weight: 500;
        color: #333;
        flex: 1;
    }
    
    /* Judul Section (Misal: Curriculum Vitae) */
    .section-title {
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 0;
    }
    
    /* Ukuran Foto Profil */
    .profile-img {
        max-height: 150px;
        width: auto;
    }
</style>

<div class="container-fluid py-4">
    
    {{-- BAGIAN HEADER --}}
    <div class="row align-items-start mb-5">
        {{-- Kolom Kiri: Judul & Filter Statis --}}
        <div class="col-md-7">
            <h3 class="fw-bold mb-3">Data Pegawai / Karyawan</h3>
            <p class="fw-bold mb-2">Silahkan Cari Data Yang Anda Butuhkan</p>
            <hr>
            <div class="row mb-2">
                <div class="col-3">Unit Kerja/Divisi :</div>
                <div class="col-9">Finance</div>
            </div>
            <div class="row">
                <div class="col-3">Nama Karyawan :</div>
                <div class="col-9">Sandy Peratama, SE, MM / 192019012910921001</div>
            </div>
        </div>

        {{-- Kolom Tengah: Tombol Kembali --}}
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center" style="height: 100%;">
            {{-- PERBAIKAN LINK: Mengarah ke halaman index datapegawaikaryawan --}}
            <a href="{{ url('/datapegawaikaryawan') }}" class="btn-back-green">
                Kembali
            </a>
        </div>

        {{-- Kolom Kanan: Foto Profil --}}
        <div class="col-md-3 text-end">
            {{-- PERBAIKAN PATH: Menggunakan folder 'assets' (pakai s) --}}
            <img src="{{ asset('assets/Rectangle 1.svg') }}" alt="Foto Profil" class="profile-img">
        </div>
    </div>

    {{-- BAGIAN KONTEN DATA (2 KOLOM) --}}
    <div class="row g-5">
        
        {{-- KOLOM KIRI --}}
        <div class="col-md-6">
            
            {{-- 1. Curriculum Vitae (CV) --}}
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                    <h5 class="section-title">Curriculum Vitae (CV)</h5>
                    <button class="btn-entry-pill">Entry Data</button>
                </div>
                <div class="data-group">
                    <div class="data-row">
                        <div class="bg-label-dark">Nama</div>
                        <div class="data-value">Sandy Peratama, SE, MM</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">NIK</div>
                        <div class="data-value">1209298191029109004</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">NPWP</div>
                        <div class="data-value">1209298191029109004</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Tempat / Tanggal Lahir</div>
                        <div class="data-value">Medan / 14-05-1981</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Alamat</div>
                        <div class="data-value">Jalan Bilal No 1 Medan Sunggal</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">No Wa (Tlpn)</div>
                        <div class="data-value">081167584647</div>
                    </div>
                </div>
            </div>

            {{-- 2. Pendidikan --}}
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                    <h5 class="section-title">Pendidikan</h5>
                    <button class="btn-entry-pill">Entry Data</button>
                </div>
                <div class="data-group">
                    <div class="data-row">
                        <div class="bg-label-dark">SLTP</div>
                        <div class="data-value">SD N 30 Medan</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">SMU</div>
                        <div class="data-value">SMUN 01 Medan</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">S1</div>
                        <div class="data-value">USU</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">S2</div>
                        <div class="data-value">USU</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">S3</div>
                        <div class="data-value">-</div>
                    </div>
                </div>
            </div>

            {{-- 3. Finance --}}
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                    <h5 class="section-title">Finance</h5>
                    <button class="btn-entry-pill">Entry Data</button>
                </div>
                <div class="data-group">
                    <div class="data-row">
                        <div class="bg-label-dark">NPWP</div>
                        <div class="data-value">1209298191029109004</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">No Rekening</div>
                        <div class="data-value">0092091019</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Bank</div>
                        <div class="data-value">Mandiri</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">No BPJS Tenaga kerja</div>
                        <div class="data-value">10290110910</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">No BPJS Kesehatan</div>
                        <div class="data-value">1929101901991</div>
                    </div>
                </div>
            </div>

        </div> {{-- End Kolom Kiri --}}

        {{-- KOLOM KANAN --}}
        <div class="col-md-6">
            
            {{-- 4. Status Karyawan / Pegawai --}}
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                    <h5 class="section-title">Status Karyawan / Pegawai</h5>
                    <button class="btn-entry-pill">Entry Data</button>
                </div>
                <div class="data-group">
                    <div class="data-row">
                        <div class="bg-label-dark">Unit Kerja/Divisi</div>
                        <div class="data-value">Finance</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Nomor Pegawai</div>
                        <div class="data-value">92019012910921001</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Jabatan</div>
                        <div class="data-value">Manager</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Mulai Kerja</div>
                        <div class="data-value">01-12-2024</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Jenis Karyawan</div>
                        <div class="data-value">Karyawan Tetap</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Waktu Kontrak Kerja</div>
                        <div class="data-value">01-12-2024 sd 01-12-2025 / 1 Tahun</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Status</div>
                        <div class="data-value">Aktif</div>
                    </div>
                </div>
            </div>

            {{-- 5. Keluarga --}}
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                    <h5 class="section-title">Keluarga</h5>
                    <button class="btn-entry-pill">Entry Data</button>
                </div>
                <div class="data-group">
                    <div class="data-row">
                        <div class="bg-label-dark">Status Perkawinan</div>
                        <div class="data-value">SD N 30 Medan</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Istri</div>
                        <div class="data-value">SMUN 01 Medan</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Anak Ke-1</div>
                        <div class="data-value">USU</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Anak Ke-2</div>
                        <div class="data-value">USU</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Anak Ke-3</div>
                        <div class="data-value">-</div>
                    </div>
                </div>
            </div>

            {{-- 6. Social Media --}}
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
                    <h5 class="section-title">Social Media</h5>
                    <button class="btn-entry-pill">Entry Data</button>
                </div>
                <div class="data-group">
                    <div class="data-row">
                        <div class="bg-label-dark">Facebook</div>
                        <div class="data-value">Sandyperatama_aja</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Instagram</div>
                        <div class="data-value">Sandyperatama_aja</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Tiktok</div>
                        <div class="data-value">Sandyperatama_aja</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Email</div>
                        <div class="data-value">Sandyperatama@gmail.com</div>
                    </div>
                    <div class="data-row">
                        <div class="bg-label-dark">Telegram</div>
                        <div class="data-value">Sandyperatama_aja</div>
                    </div>
                </div>
            </div>

        </div> {{-- End Kolom Kanan --}}
    </div>
</div>

{{-- Script Jquery (Standard) --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Contoh alert sederhana jika tombol entry diklik
        $('.btn-entry-pill').click(function() {
            alert('Fitur Entry Data akan segera hadir!');
        });
    });
</script>

@endsection