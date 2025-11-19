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

<<<<<<< HEAD
            {{-- ================================================== --}}
            {{-- 1. BAGIAN JUDUL HALAMAN --}}
            {{-- ================================================== --}}
            <div class="mb-3">
                <h4 class="mb-0" style="font-weight: 600;">Rekap Absensi Masuk Pegawai</h4>
            </div>
=======
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
            <div class="card-header pb-0 card-no-border">
                <h4>Keytable Integration</h4><span>If you are looking to emulate the UI of spreadsheet programs such as
                    Excel with DataTables, the combination of KeyTable and AutoFill will take you a long way there!</span>
            </div>
            <div class="card-body">
                <div class="dt-ext table-responsive custom-scrollbar">
                    <table class="display" id="keytable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Employee Name</th>
                                <th>Job Designation</th>
                                <th>Company Name</th>
                                <th>Invoice No.</th>
                                <th>Credit/Debit</th>
                                <th>Date</th>
                                <th>Priority</th>
                                <th>Budget</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Tata Co.</td>
                                <td>#AS61</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2011/04/25</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$320.800,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Edinburgh</td>
                                <td>#FG63</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2011/07/25</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$170.750,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>Mphasis Ltd</td>
                                <td>#GH66</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2009/01/12</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$86.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>#UH22</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2012/03/29</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$433.060,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Google Inc.</td>
                                <td>#TY33</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2008/11/28</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$162.700,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>Microsoft</td>
                                <td>#TS61</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2012/12/02</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$372.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>Google Co.</td>
                                <td>#GF59</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2012/08/06</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$137.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>#FT55</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2010/10/14</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$327.900,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>Google Co.</td>
                                <td>#NB39</td>
                                <td> <i class="icofont icofont-arrow-up me-1">2.8%</i></td>
                                <td>2009/09/15</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$205.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>#BH23</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2008/12/13</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$103.600,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>Tata Co.</td>
                                <td>#HN30</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2008/12/19</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$90.560,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>#YH22</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2013/03/03</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$342.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>Google Co.</td>
                                <td>#FV36</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2008/10/16</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$470.600,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>Tata Co.</td>
                                <td>#TF43</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2012/12/18</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$313.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>Infosys Ltd.</td>
                                <td>#DF19</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2010/03/17</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$385.750,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>Infosys Ltd.</td>
                                <td>#HD66</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2012/11/27</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$198.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>#NH64</td>
                                <td> <i class="icofont icofont-arrow-up me-1">9.8%</i></td>
                                <td>2010/06/09</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$725.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>#MN59</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2009/04/10</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$237.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>Tata Co.</td>
                                <td>#JH41</td>
                                <td> <i class="icofont icofont-arrow-up me-1">9.8%</i></td>
                                <td>2012/10/13</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$132.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>#YT35</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2012/09/26</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$217.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>#FG30</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2011/09/03</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$345.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>#VB40</td>
                                <td> <i class="icofont icofont-arrow-up me-1">5.6%</i></td>
                                <td>2009/06/25</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$675.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>#CV21</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2011/12/12</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$106.450,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>#BH23</td>
                                <td> <i class="icofont icofont-arrow-up me-1">5.6%</i></td>
                                <td>2010/09/20</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$85.600,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>Tata Co.</td>
                                <td>#VC47</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2009/10/09</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$1.200.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>#TH42</td>
                                <td> <i class="icofont icofont-arrow-up me-1">9.8%</i></td>
                                <td>2010/12/22</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$92.575,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>#BN28</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2010/11/14</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$357.650,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>Google Co.</td>
                                <td>#CV28</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2011/06/07</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$206.850,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>Infosys Ltd.</td>
                                <td>#GF48</td>
                                <td> <i class="icofont icofont-arrow-up me-1">9.8%</i></td>
                                <td>2010/03/11</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$850.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>#BF20</td>
                                <td> <i class="icofont icofont-arrow-up me-1">5.6%</i></td>
                                <td>2011/08/14</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$163.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>#DF37</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2011/06/02</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$95.400,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>Infosys Ltd.</td>
                                <td>#ER53</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2009/10/22</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$114.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>Tata Co.</td>
                                <td>#DF27</td>
                                <td> <i class="icofont icofont-arrow-up me-1">5.6%</i></td>
                                <td>2011/05/07</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$145.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>Google Co.</td>
                                <td>#SW22</td>
                                <td> <i class="icofont icofont-arrow-up me-1">5.6%</i></td>
                                <td>2008/10/26</td>
                                <td><span class="badge badge-light-danger">Urgent</span></td>
                                <td>$235.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>#ED46</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2011/03/09</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$324.050,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>Infosys Ltd.</td>
                                <td>#ED47</td>
                                <td> <i class="icofont icofont-arrow-up me-1">9.8%</i></td>
                                <td>2009/12/09</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$85.675,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>Google Co.</td>
                                <td>#WS51</td>
                                <td> <i class="icofont icofont-arrow-down me-1">1.4%</i></td>
                                <td>2008/12/16</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$164.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>Infosys Ltd.</td>
                                <td>#RG41</td>
                                <td> <i class="icofont icofont-arrow-up me-1">5.6%</i></td>
                                <td>2010/02/12</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$109.850,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>Infosys Ltd.</td>
                                <td>#TY62</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2009/02/14</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$452.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>Tata Co.</td>
                                <td>#GH37</td>
                                <td> <i class="icofont icofont-arrow-up me-1">9.8%</i></td>
                                <td>2008/12/11</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$136.200,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>#YU65</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.8%</i></td>
                                <td>2008/09/26</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$645.750,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>#GH64</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2011/02/03</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$234.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>Tata Co.</td>
                                <td>#UY38</td>
                                <td> <i class="icofont icofont-arrow-down me-1">1.4%</i></td>
                                <td>2011/05/03</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$163.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>#RT37</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2009/08/19</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$139.575,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>#WE61</td>
                                <td> <i class="icofont icofont-arrow-down me-1">1.4%</i></td>
                                <td>2013/08/11</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$98.540,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>Google Co.</td>
                                <td>#YU47</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2009/07/07</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$87.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>#QW64</td>
                                <td> <i class="icofont icofont-arrow-down me-1">1.4%</i></td>
                                <td>2012/04/09</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$138.575,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>#WE63</td>
                                <td> <i class="icofont icofont-arrow-up me-1">1.4%</i></td>
                                <td>2010/01/04</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$125.250,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>Google Co.</td>
                                <td>#ER56</td>
                                <td> <i class="icofont icofont-arrow-down me-1">1.4%</i></td>
                                <td>2012/06/01</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$115.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>#RT43</td>
                                <td> <i class="icofont icofont-arrow-up me-1">2.8%</i></td>
                                <td>2013/02/01</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$75.650,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>#TY46</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2011/12/06</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$145.600,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>Tata Co.</td>
                                <td>#QA47</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2011/03/21</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$356.250,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>53</td>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>Tata Co.</td>
                                <td>#QS21</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2009/02/27</td>
                                <td><span class="badge badge-light-warning">Medium</span></td>
                                <td>$103.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>Infosys Ltd.</td>
                                <td>#ED30</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2010/07/14</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$86.500,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>55</td>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>#SD51</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2008/11/13</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$183.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>56</td>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>#RF29</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2011/06/27</td>
                                <td><span class="badge badge-light-success">Low</span></td>
                                <td>$183.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>57</td>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>#GD27</td>
                                <td> <i class="icofont icofont-arrow-down me-1">2.5%</i></td>
                                <td>2011/01/25</td>
                                <td><span class="badge badge-light-primary">High</span></td>
                                <td>$112.000,00</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
>>>>>>> 02bb8217e1cfc1a9da62c7b3c478cbb122bb6ade

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
