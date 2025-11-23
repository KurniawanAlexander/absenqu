@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

    <p class="h4 mb-4">Rekap Absensi Masuk Pegawai</p>

    {{-- KELOMPOK FILTER & RINGKASAN (Menggabungkan Logika Horizontal dari Gambar) --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <div class="row">

                {{-- KOLOM KIRI: FILTER --}}
                <div class="col-md-7 border-end pe-4">

                    {{-- 1. FILTER TANGGAL --}}
                    <div class="d-flex align-items-center mb-2">
                        {{-- Menggunakan d-flex dan fixed width untuk kolom label agar sejajar --}}
                        <div style="min-width: 150px;">
                            <label class="me-3 mb-0 d-inline-block">Pilih Tanggal :</label>
                        </div>

                        <input type="date" class="form-control form-control-sm me-2" style="width: 140px;"
                            value="2025-02-12">
                        <span class="me-2">sd</span>
                        <input type="date" class="form-control form-control-sm" style="width: 140px;" value="2025-02-12">
                    </div>

                    {{-- 2. FILTER UNIT KERJA/DIVISI --}}
                    <div class="d-flex align-items-center mb-2">
                        {{-- Menggunakan d-flex dan fixed width untuk kolom label agar sejajar --}}
                        <div style="min-width: 150px;">
                            <label class="me-3 mb-0 d-inline-block">Unit Kerja/Divisi :</label>
                        </div>

                        <select class="form-select form-select-sm">
                            <option>Semua Unit Kerja / Divisi</option>
                            {{-- DATA STATIS --}}
                            <option>Finance</option>
                            <option>HRD</option>
                            <option>Marketing</option>
                            <option>IT Development</option>
                        </select>
                    </div>

                    {{-- 3. FILTER NAMA KARYAWAN --}}
                    <div class="d-flex align-items-center mb-3">
                        {{-- Menggunakan d-flex dan fixed width untuk kolom label agar sejajar --}}
                        <div style="min-width: 150px;">
                            <label class="me-3 mb-0 d-inline-block">Nama Karyawan :</label>
                        </div>

                        <select class="form-select form-select-sm">
                            <option>Semua Pegawai/Karyawan</option>
                            {{-- DATA STATIS --}}
                            <option>Tri Admajo Surya</option>
                            <option>Budi Handoko</option>
                            <option>Siti Aminah</option>
                            <option>Joko Susilo</option>
                        </select>
                    </div>

                    {{-- TOMBOL TAMPILKAN DATA --}}
                    <button class="btn btn-info btn-sm btn-lg px-4"
                        style="background: #84cc16; border-color: #84cc16; color: white;">Tampilkan data</button>
                </div>


                {{-- KOLOM KANAN: RINGKASAN (DISUSUN HORIZONTAL) --}}
                <div class="col-md-5 d-flex flex-column align-items-end justify-content-start">
                    <div class="d-flex w-100 justify-content-end mb-3">
                        {{-- KARTU 1: ABSEN MASUK --}}
                        <div class="card text-white shadow-sm mb-3" style="width: 250px; background-color: #A5F3FC;">
                            <div class="card-body py-2 d-flex align-items-center justify-content-start">
                                <i class="icon-user-following" data-feather="walk"
                                    style="font-size: 32px; margin-right: 10px; color: #06b6d4;"></i>
                                <div class="text-dark">
                                    <h6 class="card-title text-dark mb-1">Rekap Absen Masuk Pegawai/Karyawan</h6>
                                    <p class="card-text mb-0" style="font-size: 0.9rem;"><strong>10</strong> Tepat waktu</p>
                                    <p class="card-text mb-0" style="font-size: 0.9rem;"><strong>02</strong> Terlambat</p>
                                </div>
                            </div>
                        </div>

                        {{-- KARTU 2: ABSEN PULANG --}}
                        <div class="card text-white shadow-sm mb-3" style="width: 250px; background-color: #C7D2FE;">
                            <div class="card-body py-2 d-flex align-items-center justify-content-start">
                                <i class="icon-user-following" data-feather="log-out"
                                    style="font-size: 32px; margin-right: 10px; color: #4F46E5;"></i>
                                <div class="text-dark">
                                    <h6 class="card-title text-dark mb-1">Rekap Absen Pulang Pegawai/Karyawan</h6>
                                    <p class="card-text mb-0" style="font-size: 0.9rem;"><strong>11</strong> Tepat waktu</p>
                                    <p class="card-text mb-0" style="font-size: 0.9rem;"><strong>01</strong> Terlalu Cepat
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- TOMBOL LIHAT & CETAK --}}
                    <div class="d-flex justify-content-end w-100">
                        <button class="btn btn-sm me-2 text-dark" style="background-color: #A5F3FC;">Lihat</button>
                        <button class="btn btn-sm"
                            style="background-color: #A7F3D0; border-color: #A7F3D0; color: black;">Cetak</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="keytable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Identitas Pegawai/Karyawan</th>
                                <th>Unit Kerja/Divisi</th>
                                <th>Jam Masuk</th>
                                <th>Absensi/Presensi</th>
                                <th>Selisih Jam</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2023-11-20</td>
                                <td>Tri Admajo Surya (NIP: 12345)</td>
                                <td>HRD</td>
                                <td>08:00</td>
                                <td>Tepat Waktu</td>
                                <td>00:00</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2023-11-20</td>
                                <td>Budi Handoko (NIP: 12346)</td>
                                <td>Finance</td>
                                <td>08:15</td>
                                <td>Terlambat</td>
                                <td>-00:15</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2023-11-20</td>
                                <td>Siti Aminah (NIP: 12347)</td>
                                <td>Marketing</td>
                                <td>07:55</td>
                                <td>Tepat Waktu</td>
                                <td>+00:05</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2023-11-20</td>
                                <td>Joko Susilo (NIP: 12348)</td>
                                <td>IT Development</td>
                                <td>08:30</td>
                                <td>Terlambat</td>
                                <td>-00:30</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2023-11-20</td>
                                <td>Dewi Lestari (NIP: 12349)</td>
                                <td>HRD</td>
                                <td>08:01</td>
                                <td>Tepat Waktu</td>
                                <td>-00:01</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>2023-11-21</td>
                                <td>Ahmad Yani (NIP: 12350)</td>
                                <td>IT Development</td>
                                <td>09:00</td>
                                <td>Terlambat</td>
                                <td>-01:00</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>2023-11-21</td>
                                <td>Sri Mulyani (NIP: 12351)</td>
                                <td>Finance</td>
                                <td>08:00</td>
                                <td>Tepat Waktu</td>
                                <td>00:00</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>2023-11-21</td>
                                <td>Bambang Pamungkas (NIP: 12352)</td>
                                <td>Marketing</td>
                                <td>08:05</td>
                                <td>Tepat Waktu</td>
                                <td>-00:05</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>2023-11-21</td>
                                <td>Rina Nose (NIP: 12353)</td>
                                <td>HRD</td>
                                <td>08:10</td>
                                <td>Terlambat</td>
                                <td>-00:10</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>2023-11-21</td>
                                <td>Deddy Corbuzier (NIP: 12354)</td>
                                <td>IT Development</td>
                                <td>07:50</td>
                                <td>Tepat Waktu</td>
                                <td>+00:10</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>2023-11-22</td>
                                <td>Agnes Monica (NIP: 12355)</td>
                                <td>Marketing</td>
                                <td>08:00</td>
                                <td>Tepat Waktu</td>
                                <td>00:00</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>2023-11-22</td>
                                <td>Iwan Fals (NIP: 12356)</td>
                                <td>Finance</td>
                                <td>08:20</td>
                                <td>Terlambat</td>
                                <td>-00:20</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>2023-11-22</td>
                                <td>Chrisye (NIP: 12357)</td>
                                <td>HRD</td>
                                <td>07:58</td>
                                <td>Tepat Waktu</td>
                                <td>+00:02</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>2023-11-22</td>
                                <td>Ebiet G. Ade (NIP: 12358)</td>
                                <td>IT Development</td>
                                <td>08:00</td>
                                <td>Tepat Waktu</td>
                                <td>00:00</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>2023-11-22</td>
                                <td>Giring Ganesha (NIP: 12359)</td>
                                <td>Marketing</td>
                                <td>08:30</td>
                                <td>Terlambat</td>
                                <td>-00:30</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>2023-11-23</td>
                                <td>Ariel Noah (NIP: 12360)</td>
                                <td>Finance</td>
                                <td>07:55</td>
                                <td>Tepat Waktu</td>
                                <td>+00:05</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>2023-11-23</td>
                                <td>Rian D'Masiv (NIP: 12361)</td>
                                <td>HRD</td>
                                <td>08:00</td>
                                <td>Tepat Waktu</td>
                                <td>00:00</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>2023-11-23</td>
                                <td>Faank Wali (NIP: 12362)</td>
                                <td>IT Development</td>
                                <td>08:15</td>
                                <td>Terlambat</td>
                                <td>-00:15</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>2023-11-23</td>
                                <td>Pasha Ungu (NIP: 12363)</td>
                                <td>Marketing</td>
                                <td>08:00</td>
                                <td>Tepat Waktu</td>
                                <td>00:00</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>2023-11-23</td>
                                <td>Armand Maulana (NIP: 12364)</td>
                                <td>Finance</td>
                                <td>08:10</td>
                                <td>Terlambat</td>
                                <td>-00:10</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>2023-11-24</td>
                                <td>Duta Sheila on 7 (NIP: 12365)</td>
                                <td>HRD</td>
                                <td>07:50</td>
                                <td>Tepat Waktu</td>
                                <td>+00:10</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>2023-11-24</td>
                                <td>Once Mekel (NIP: 12366)</td>
                                <td>IT Development</td>
                                <td>08:00</td>
                                <td>Tepat Waktu</td>
                                <td>00:00</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>2023-11-24</td>
                                <td>Charly Van Houten (NIP: 12367)</td>
                                <td>Marketing</td>
                                <td>08:05</td>
                                <td>Tepat Waktu</td>
                                <td>-00:05</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>2023-11-24</td>
                                <td>Ian Kasela (NIP: 12368)</td>
                                <td>Finance</td>
                                <td>08:25</td>
                                <td>Terlambat</td>
                                <td>-00:25</td>
                                <td><span class="badge badge-light-danger">Tidak Sesuai</span></td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>2023-11-24</td>
                                <td>Zian Zigaz (NIP: 12369)</td>
                                <td>HRD</td>
                                <td>08:00</td>
                                <td>Tepat Waktu</td>
                                <td>00:00</td>
                                <td><span class="badge badge-light-success">Sesuai</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(function() {
            // Ubah selector menjadi '#keytable' agar sesuai dengan ID tabel di HTML
            $('#keytable').DataTable({
                responsive: true,
                paging: true,
                info: true,
                searching: true
            });
        });
    </script>
@endpush
