@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">

    {{-- JUDUL HALAMAN --}}
    <h4 class="mb-4 font-weight-bold text-dark">Entry Data Mutasi Pegawai</h4>

    {{-- Custom CSS untuk menyamakan desain --}}
    <style>
        .label-dark {
            background-color: #525554; /* Warna Abu Gelap sesuai gambar */
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 500;
            display: flex;
            align-items: center;
            height: 100%;
            font-size: 0.95rem;
        }

        .form-control-plaintext {
            padding-left: 15px;
            font-weight: 500;
            color: #000;
        }

        /* Style untuk input dengan garis bawah saja atau box tipis sesuai preferensi */
        .form-control-custom {
            border: 1px solid #ced4da;
            border-radius: 4px;
            height: 40px;
        }

        .btn-search-custom {
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            color: #495057;
        }
        
        .section-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 20px;
            margin-bottom: 15px;
            color: #000;
        }

        .btn-simpan {
            background-color: #93FFFA; /* Warna Cyan sesuai gambar */
            border: none;
            color: #000;
            font-weight: 700;
            padding: 10px 40px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .btn-simpan:hover {
            background-color: #7eebe6;
        }
    </style>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        
        {{-- BAGIAN 1: DATA PEGAWAI --}}
        <div class="row mb-2 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Nama</div>
            </div>
            <div class="col-md-10">
                <div class="input-group">
                    <input type="text" class="form-control form-control-custom" value="Sandy Peratama, SE, MM">
                    <div class="input-group-append">
                        <button class="btn btn-search-custom" type="button"><i class="fas fa-search"></i></button>
                        <button class="btn btn-search-custom px-3" type="button">Pilih Pegawai</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">NIK</div>
            </div>
            <div class="col-md-10">
                <input type="text" class="form-control form-control-custom" value="1209298191029109004" readonly style="background-color: #fff;">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Nomor Pegawai</div>
            </div>
            <div class="col-md-10">
                <input type="text" class="form-control form-control-custom" value="92019012910921001" readonly style="background-color: #fff;">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Unit Kerja/Divisi</div>
            </div>
            <div class="col-md-10">
                <input type="text" class="form-control form-control-custom" value="Finance" readonly style="background-color: #fff;">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Jabatan</div>
            </div>
            <div class="col-md-10">
                <input type="text" class="form-control form-control-custom" value="Staf" readonly style="background-color: #fff;">
            </div>
        </div>

        <div class="row mb-4 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Jenis Karyawan</div>
            </div>
            <div class="col-md-10">
                <input type="text" class="form-control form-control-custom" value="Karyawan Tetap" readonly style="background-color: #fff;">
            </div>
        </div>


        {{-- BAGIAN 2: JABATAN SEMULA --}}
        <h5 class="section-title">Jabatan Semula</h5>
        <div class="row mb-2 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Unit Kerja</div>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-custom" value="Departemen Finance" readonly style="background-color: #fff;">
            </div>
            <div class="col-md-2 pr-0 pl-4">
                <div class="label-dark">Jabatan</div>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control form-control-custom" value="Staf" readonly style="background-color: #fff;">
            </div>
        </div>


        {{-- BAGIAN 3: JABATAN MENJADI --}}
        <h5 class="section-title">Jabatan Menjadi</h5>
        <div class="row mb-4 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Unit Kerja Baru</div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control form-control-custom" value="Departemen HRD">
                    <div class="input-group-append">
                        <button class="btn btn-search-custom" type="button"><i class="fas fa-search"></i></button>
                        <button class="btn btn-search-custom px-3" type="button">Pilih</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 pr-0 pl-4">
                <div class="label-dark">Jabatan Baru</div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control form-control-custom" value="Manager">
                    <div class="input-group-append">
                        <button class="btn btn-search-custom" type="button"><i class="fas fa-search"></i></button>
                        <button class="btn btn-search-custom px-3" type="button">Pilih</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- BAGIAN 4: KETERANGAN SK MUTASI --}}
        <h5 class="section-title">Keterangan SK Mutasi</h5>
        <div class="row mb-2 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Tanggal Mutasi</div>
            </div>
            <div class="col-md-10">
                <input type="date" class="form-control form-control-custom" value="2023-01-20">
            </div>
        </div>

        <div class="row mb-2 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">SK Mutasi</div>
            </div>
            <div class="col-md-10">
                <input type="text" class="form-control form-control-custom" value="SK Direktur Nomor 191 Tahun 2020">
            </div>
        </div>

        <div class="row mb-4 align-items-center">
            <div class="col-md-2 pr-0">
                <div class="label-dark">Upload Dokumen</div>
            </div>
            <div class="col-md-10">
                <div class="input-group">
                    <input type="text" class="form-control form-control-custom" value="SK Direktur Nomor 191 Tahun 2020">
                    <div class="input-group-append">
                        <button class="btn btn-search-custom" type="button"><i class="fas fa-search"></i></button>
                        <button class="btn btn-search-custom px-3" type="button">Cari</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- TOMBOL SIMPAN --}}
        <div class="mt-4">
            <button type="submit" class="btn btn-simpan">Simpan</button>
        </div>

    </form>
</div>
@endsection