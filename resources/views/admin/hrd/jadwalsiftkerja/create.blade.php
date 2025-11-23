@extends('layouts.app')

@section('title', 'Entry Data Shift Kerja')

@section('content')

    <div class="container mt-4">
        <div class="card border-0 shadow-none">
            <table class="table table-borderless align-middle m-0">
                {{-- Definisikan lebar kolom agar stabil (total 6 kolom) --}}
                <colgroup>
                    <col style="width: 18%;"> {{-- Label Utama --}}
                    <col style="width: 27%;"> {{-- Input Utama / Bulan / Shift --}}
                    <col style="width: 10%;"> {{-- Label Tengah (Mulai/Masuk) --}}
                    <col style="width: 17.5%;"> {{-- Input Tengah --}}
                    <col style="width: 10%;"> {{-- Label Kanan (Akhir/Pulang) --}}
                    <col style="width: 17.5%;"> {{-- Input Kanan --}}
                </colgroup>

                <tbody>
                    {{-- BARIS 1: NAMA & TOMBOL PILIH --}}
                    <tr>
                        <td class="text-white fw-bold ps-3"
                            style="background-color: #585858; border-radius: 4px 0 0 4px; padding-top: 5px; padding-bottom: 5px;">
                            Nama
                        </td>
                        <td colspan="5" class="border-bottom position-relative"
                            style="padding-top: 5px; padding-bottom: 5px;">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                {{-- Input Nama --}}
                                <input type="text" class="form-control border-0 p-0 shadow-none bg-white"
                                    value="Sandy Peratama, SE, MM" style="font-weight: 500; color: black !important;">

                                {{-- Tombol Pilih Pegawai (Style Kapsul Abu-abu) --}}
                                <button class="btn btn-sm d-flex align-items-center px-3" type="button"
                                    style="background-color: #E0E0E0; border-radius: 50px; font-size: 0.85rem; font-weight: 600; color: #333;">
                                    <i class="icon-search me-2"></i> Pilih Pegawai
                                </button>
                            </div>
                        </td>
                    </tr>

                    {{-- BARIS LOOP: DATA STANDAR (NIK s/d Jenis Karyawan) --}}
                    @foreach ([
            'NIK' => '1209298191029109004',
            'Nomor Pegawai' => '92019012910921001',
            'Unit Kerja/Divisi' => 'Finance',
            'Jabatan' => 'Manager',
            'Jenis Karyawan' => 'Karyawan Tetap',
        ] as $label => $value)
                        <tr>
                            <td class="text-white fw-bold ps-3"
                                style="background-color: #585858; border-radius: 4px 0 0 4px; padding-top: 5px; padding-bottom: 5px;">
                                {{ $label }}
                            </td>
                            <td colspan="5" class="border-bottom" style="padding-top: 5px; padding-bottom: 5px;">
                                <input type="text" class="form-control border-0 p-0 shadow-none bg-white"
                                    value="{{ $value }}" readonly style="color: black !important;">
                            </td>
                        </tr>
                    @endforeach

                    {{-- Spacer Tipis --}}
                    <tr>
                        <td colspan="6" style="height: 20px;"></td>
                    </tr>

                    {{-- BARIS 7: BULAN | MULAI | AKHIR (Ditambahkan style warna teks) --}}
                    <tr>
                        {{-- Kolom 1: Label Bulan --}}
                        <td class="text-white fw-bold ps-3"
                            style="background-color: #585858; border-radius: 4px 0 0 4px; padding-top: 8px; padding-bottom: 8px;">
                            Bulan
                        </td>
                        {{-- Kolom 2: Input Bulan --}}
                        <td class="border-bottom pe-3" style="padding-top: 8px; padding-bottom: 8px;">
                            <input type="text" class="form-control border-0 p-0 shadow-none bg-transparent"
                                value="Januari" style="color: black !important;">
                        </td>

                        {{-- Kolom 3: Label Mulai --}}
                        <td class="text-white fw-bold text-center"
                            style="background-color: #585858; border-radius: 4px; padding-top: 8px; padding-bottom: 8px;">
                            Mulai
                        </td>
                        {{-- Kolom 4: Input Mulai --}}
                        <td class="border-bottom px-3" style="padding-top: 8px; padding-bottom: 8px;">
                            <input type="text" class="form-control border-0 p-0 shadow-none bg-transparent"
                                value="01-01-2025" style="color: black !important;">
                        </td>

                        {{-- Kolom 5: Label Akhir --}}
                        <td class="text-white fw-bold text-center"
                            style="background-color: #585858; border-radius: 4px; padding-top: 8px; padding-bottom: 8px;">
                            Akhir
                        </td>
                        {{-- Kolom 6: Input Akhir --}}
                        <td class="border-bottom px-3" style="padding-top: 8px; padding-bottom: 8px;">
                            <input type="text" class="form-control border-0 p-0 shadow-none bg-transparent"
                                value="30-03-2025" style="color: black !important;">
                        </td>
                    </tr>

                    {{-- BARIS 8: SIFT KERJA | MASUK | PULANG (Ditambahkan style warna teks) --}}
                    <tr>
                        {{-- Kolom 1: Label Shift --}}
                        <td class="text-white fw-bold ps-3"
                            style="background-color: #585858; border-radius: 4px 0 0 4px; padding-top: 8px; padding-bottom: 8px;">
                            Sift Kerja
                        </td>
                        {{-- Kolom 2: Input Shift --}}
                        <td class="border-bottom pe-3" style="padding-top: 8px; padding-bottom: 8px;">
                            <input type="text" class="form-control border-0 p-0 shadow-none bg-transparent"
                                value="Sift 1" style="color: black !important;">
                        </td>

                        {{-- Kolom 3: Label Masuk --}}
                        <td class="text-white fw-bold text-center"
                            style="background-color: #585858; border-radius: 4px; padding-top: 8px; padding-bottom: 8px;">
                            Masuk
                        </td>
                        {{-- Kolom 4: Input Masuk --}}
                        <td class="border-bottom px-3" style="padding-top: 8px; padding-bottom: 8px;">
                            <input type="text" class="form-control border-0 p-0 shadow-none bg-transparent"
                                value="07.30" style="color: black !important;">
                        </td>

                        {{-- Kolom 5: Label Pulang --}}
                        <td class="text-white fw-bold text-center"
                            style="background-color: #585858; border-radius: 4px; padding-top: 8px; padding-bottom: 8px;">
                            Pulang
                        </td>
                        {{-- Kolom 6: Input Pulang --}}
                        <td class="border-bottom px-3" style="padding-top: 8px; padding-bottom: 8px;">
                            <input type="text" class="form-control border-0 p-0 shadow-none bg-transparent"
                                value="17.00" style="color: black !important;">
                        </td>
                    </tr>
                </tbody>
            </table>

            {{-- TOMBOL SIMPAN --}}
            <div class="mt-4">
                <button type="submit" class="btn fw-bold shadow-sm"
                    style="background-color: #80F5D8; width: 150px; border-radius: 8px; border: none; color: black;">
                    Simpan
                </button>
            </div>
        </div>
    </div>

@endsection
