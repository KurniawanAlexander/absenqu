@extends('layouts.app')

@section('content')
    <p class="h4 mb-4 fw-bold">Data Cuti Pegawai</p>

    <div class="card shadow-sm">
        <div class="card-body p-4">
            <form action="{{ url('/cuti') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- DATA PEGAWAI --}}
                <div class="mb-4">
                    {{-- Nama --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Nama</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nama" value="Sandy Peratama, SE, MM" readonly>
                        </div>
                    </div>

                    {{-- NIK --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">NIK</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nik" value="1209298181902190004" readonly>
                        </div>
                    </div>

                    {{-- Nomor Pegawai --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Nomor Pegawai</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nomor_pegawai" value="92019012910921001" readonly>
                        </div>
                    </div>

                    {{-- Unit Kerja/Divisi --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Unit Kerja/Divisi</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="unit_kerja" value="Finance" readonly>
                        </div>
                    </div>

                    {{-- Jabatan --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Jabatan</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="jabatan" value="Staf" readonly>
                        </div>
                    </div>

                    {{-- Jenis Karyawan --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Jenis Karyawan</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="jenis_karyawan" value="Karyawan Tetap" readonly>
                        </div>
                    </div>
                </div>

                {{-- PERMOHONAN --}}
                <div class="mb-4">
                    <h5 class="fw-bold mb-3">Permohonan</h5>

                    {{-- Tanggal Permohonan --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Tanggal Permohonan</label>
                        </div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="tanggal_permohonan" value="2025-02-12" required>
                        </div>
                    </div>

                    {{-- Tanggal Mulai & Tanggal Akhir --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Tanggal Mulai</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="tanggal_mulai" value="2025-02-13" required>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Tanggal Akhir</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="tanggal_akhir" value="2025-02-14" required>
                        </div>
                    </div>

                    {{-- Pengajuan Cuti & Sudah Dipakai --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Pengguan Cuti</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="number" class="form-control" name="pengajuan_cuti" value="2" required>
                                <span class="input-group-text">Hari</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Sudah Dipakai</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="number" class="form-control" name="sudah_dipakai" value="2" readonly>
                                <span class="input-group-text">Hari</span>
                            </div>
                        </div>
                    </div>

                    {{-- Quota Tersisa --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Quota Tersisa</label>
                        </div>
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="number" class="form-control" name="quota_tersisa" value="10" readonly>
                                <span class="input-group-text">Hari</span>
                            </div>
                        </div>
                    </div>

                    {{-- Keterangan --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Keterangan</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="keterangan" value="Cuti Tahunan" required>
                        </div>
                    </div>

                    {{-- Bukti Dokumen --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Bukti Dokumen</label>
                        </div>
                        <div class="col-md-10">
                            <input type="file" class="form-control" name="bukti_dokumen" accept=".pdf,.doc,.docx">
                            <small class="text-muted">Contoh: Surat Sakit Dokter.pdf</small>
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Status</label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-select" name="status" required>
                                <option value="">Pilih Status</option>
                                <option value="Permohonan" selected>Permohonan</option>
                                <option value="Disetujui">Disetujui</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>
                    </div>

                    {{-- Foto Kejadian --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Foto Kejadian</label>
                        </div>
                        <div class="col-md-10">
                            <input type="file" class="form-control" name="foto_kejadian" accept="image/*">
                            <small class="text-muted">Contoh: Foto Pegawai</small>
                        </div>
                    </div>
                </div>

                {{-- RIWAYAT STATUS VERIFIKASI --}}
                <div class="mb-4">
                    <h5 class="fw-bold mb-3">Riwayat Status Verifikasi</h5>

                    {{-- Verifikasi & Tanggal --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Verifikasi</label>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" name="verifikasi">
                                <option value="">Pilih Verifikasi</option>
                                <option value="Menunggu Proses Verifikasi" selected>Menunggu Proses Verifikasi</option>
                                <option value="Sedang Diverifikasi">Sedang Diverifikasi</option>
                                <option value="Verifikasi Selesai">Verifikasi Selesai</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Tanggal</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="tanggal_verifikasi">
                        </div>
                    </div>

                    {{-- Keterangan --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Keterangan</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="keterangan_verifikasi" placeholder="-">
                        </div>
                    </div>

                    {{-- Verifikator --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Verifikator</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="verifikator" value="Jhon Sitepu / Kepala Bagian SDM">
                        </div>
                    </div>

                    {{-- Tanggal Disetujui & Hari --}}
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-2">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded">Tanggal Disetujui</label>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" name="tanggal_disetujui_mulai" placeholder="-">
                        </div>
                        <div class="col-md-1 text-center">
                            <span class="fw-bold">sd</span>
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" name="tanggal_disetujui_akhir" placeholder="-">
                        </div>
                        <div class="col-md-1">
                            <label class="form-label mb-0 px-3 py-2 text-white" style="background-color: #515453; rounded w-100">Hari</label>
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" name="hari_disetujui" placeholder="-">
                        </div>
                    </div>
                </div>

                {{-- TOMBOL AKSI --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ url('/lembur') }}" class="btn btn-secondary px-4">
                        <i class="bi bi-x-circle me-2"></i>Batal
                    </a>
                    <button type="submit" class="btn text-white px-4" style="background-color: #7C3AED; border-color: #7C3AED;">
                        <i class="bi bi-save me-2"></i>Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .form-label[style*="background-color: #515453"] {
            display: inline-block;
            width: 100%;
            margin-bottom: 0;
            font-size: 0.9rem;
            font-weight: 500;
            border-radius: 5px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #7C3AED;
            box-shadow: 0 0 0 0.2rem rgba(124, 58, 237, 0.25);
        }

        .card {
            border: none;
            border-radius: 0.5rem;
        }

        h5 {
            color: #1f2937;
        }
    </style>
@endsection