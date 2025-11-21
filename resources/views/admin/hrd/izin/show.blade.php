@extends('layouts.app')
<br>
@section('title', 'Data Izin Pegawai')
</b>
@section('content')
    {{-- CSS Khusus untuk Halaman Detail ini --}}
    <style>
        /* Background Putih Bersih */
        .page-body {
            background-color: #ffffff !important;
        }

        /* Judul Section (Permohonan, Riwayat, dll) */
        .section-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 25px;
            margin-bottom: 10px;
            color: #000;
        }

        /* Styling Tabel Detail Custom */
        .table-detail {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 2px;
            /* Memberikan jarak tipis antar baris putih */
            margin-bottom: 15px;
        }

        .table-detail tr {
            background-color: transparent;
        }

        /* Kolom Label (Kiri) - Warna Abu Gelap */
        .td-label {
            background-color: #585858;
            /* Sesuaikan dengan warna dark header di index */
            color: #ffffff;
            font-weight: 500;
            padding: 10px 15px;
            width: 200px;
            /* Lebar label tetap */
            vertical-align: middle;
            border-radius: 4px 0 0 4px;
            /* Sudut kiri membulat */
        }

        /* Kolom Label Sub (untuk baris yang dibagi 2, misal: Tanggal Akhir) */
        .td-label-sub {
            background-color: #585858;
            color: #ffffff;
            font-weight: 500;
            padding: 10px 15px;
            width: 150px;
            text-align: center;
            vertical-align: middle;
        }

        /* Kolom Value (Kanan) - Warna Putih dengan Border */
        .td-value {
            background-color: #ffffff;
            color: #333;
            padding: 10px 15px;
            vertical-align: middle;
            border: 1px solid #dee2e6;
            border-left: none;
            /* Hapus border kiri agar nempel visualnya (opsional) */
            border-radius: 0 4px 4px 0;
            /* Sudut kanan membulat */
            font-weight: 400;
        }

        /* Link Styling (Underline hitam sesuai gambar) */
        .text-link {
            color: #000;
            text-decoration: underline;
            cursor: pointer;
        }

        /* Header Halaman Utama */
        .page-header-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #000;
        }

        /* Helper untuk baris ganda (split columns) */
        .td-value-split {
            background-color: #ffffff;
            color: #333;
            padding: 10px 15px;
            vertical-align: middle;
            border: 1px solid #dee2e6;
            border-left: none;
            border-right: none;
        }
    </style>

    <div class="container-fluid p-4">

        {{-- BAGIAN 1: IDENTITAS PEGAWAI --}}
        <table class="table-detail">
            <tr>
                <td class="td-label">Nama</td>
                <td class="td-value">-</td>
            </tr>
            <tr>
                <td class="td-label">NIK</td>
                <td class="td-value">-</td>
            </tr>
            <tr>
                <td class="td-label">Nomor Pegawai</td>
                <td class="td-value">-</td>
            </tr>
            <tr>
                <td class="td-label">Unit Kerja/Divisi</td>
                <td class="td-value">-</td>
            </tr>
            <tr>
                <td class="td-label">Jabatan</td>
                <td class="td-value">-</td>
            </tr>
            <tr>
                <td class="td-label">Jenis Karyawan</td>
                <td class="td-value">-</td>
            </tr>
        </table>

        {{-- BAGIAN 2: PERMOHONAN --}}
        <div class="section-title">Permohonan</div>
        <table class="table-detail">
            <tr>
                <td class="td-label">Tanggal Permohonan</td>
                <td class="td-value" colspan="3">-</td>
            </tr>
            <tr>
                {{-- Baris Split: Tanggal Mulai & Tanggal Akhir --}}
                <td class="td-label">Tanggal Mulai</td>
                <td class="td-value-split">-</td>
                <td class="td-label-sub">Tanggal Akhir</td>
                <td class="td-value">-</td>
            </tr>
            <tr>
                <td class="td-label">Jumlah Hari</td>
                <td class="td-value" colspan="3">-</td>
            </tr>
            <tr>
                <td class="td-label">Kategori Izin</td>
                <td class="td-value" colspan="3">-</td>
            </tr>
            <tr>
                <td class="td-label">Keterangan</td>
                <td class="td-value" colspan="3">-</td>
            </tr>
            <tr>
                <td class="td-label">Bukti Dokumen</td>
                <td class="td-value" colspan="3">
                    <a href="#" class="text-link">-</a>
                </td>
            </tr>
            <tr>
                <td class="td-label">Status</td>
                <td class="td-value" colspan="3">
                    <a href="#" class="text-link">-</a>
                </td>
            </tr>
            <tr>
                <td class="td-label">Foto Kejadian</td>
                <td class="td-value" colspan="3">
                    <a href="#" class="text-link">-</a>
                </td>
            </tr>
        </table>

        {{-- BAGIAN 3: RIWAYAT STATUS VERIFIKASI --}}
        <div class="section-title">Riwayat Status Verifikasi</div>
        <table class="table-detail">
            <tr>
                {{-- Baris Split: Verifikasi & Tanggal --}}
                <td class="td-label">Verifikasi</td>
                <td class="td-value-split">
                    <a href="#" class="text-link">-</a>
                </td>
                <td class="td-label-sub">Tanggal</td>
                <td class="td-value">-</td>
            </tr>
            <tr>
                <td class="td-label">Keterangan</td>
                <td class="td-value" colspan="3">-</td>
            </tr>
            <tr>
                <td class="td-label">Verifikator</td>
                <td class="td-value" colspan="3">-</td>
            </tr>
            <tr>
                {{-- Baris Split: Tanggal Disetujui & Hari --}}
                <td class="td-label">Tanggal Disetujui</td>
                <td class="td-value-split">
                    - <span class="fw-bold mx-2">sd</span> -
                </td>
                <td class="td-label-sub">Hari</td>
                <td class="td-value">-</td>
            </tr>
        </table>

        {{-- Tombol Kembali --}}
        <div class="mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm px-4">Kembali</a>
        </div>

    </div>
@endsection
