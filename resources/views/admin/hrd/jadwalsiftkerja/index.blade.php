@extends('layouts.app')

@section('title', 'Jadwal Sift Kerja Pegawai')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <style>
        .page-body {
            background-color: #ffffff !important;
        }

        .form-filters .input-group .form-control[readonly] {
            background-color: #f8f9fa !important;
        }

        .form-filters .btn {
            border-color: #ced4da !important;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <p class="mb-1 fw-bold">Silahkan Cari Data Yang Anda Butuhkan</p>
                    <div class="form-filters">

                        <div class="row mb-2 align-items-center">
                            <div class="col-lg-2">
                                <label for="filter-unit-kerja" class="col-form-label **text-end**">Unit Kerja/Divisi</label>
                            </div>
                            <div class="col-auto px-1">:</div>
                            <div class="col-lg-5 col-md-6">
                                <div class="input-group">
                                    <input class="form-control" id="filter-unit-kerja" type="text"
                                        placeholder="Semua Unit Kerja / Divisi" readonly>
                                    <button class="btn btn-light" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalPilihUnit">
                                        <i class="fa fa-search"></i> Pilih
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2 align-items-center">
                            <div class="col-lg-2">
                                <label for="filter-karyawan" class="col-form-label **text-end**">Nama Karyawan</label>
                            </div>
                            <div class="col-auto px-1">:</div>
                            <div class="col-lg-5 col-md-6">
                                <div class="input-group">
                                    <input class="form-control" id="filter-karyawan" type="text"
                                        placeholder="Semua Pegawai/Karyawan" readonly>
                                    <button class="btn btn-light" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalPilihKaryawan">
                                        <i class="fa fa-search"></i> Pilih
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-2">
                                <label for="filter-periode-start" class="col-form-label **text-end**">Periode</label>
                            </div>
                            <div class="col-auto px-1">:</div>
                            <div class="col-lg-5 col-md-6">
                                <div class="input-group">
                                    <input class="form-control" id="filter-periode-start" type="date" value="2025-02-12">
                                    <span class="input-group-text">s/d</span>
                                    <input class="form-control" id="filter-periode-end" type="date" value="2025-02-12">
                                    <button class="btn btn-light" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modalPilihUnit">
                                        <i class="fa fa-search"></i> Pilih
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- TOMBOL TAMPILKAN DATA --}}
                        <button class="btn btn-info btn-sm btn-lg px-4"
                            style="background: #84cc16; border-color: #84cc16; color: white;">Tampilkan data</button>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('/jadwalsiftkerja/create') }}" class="btn me-2"
                    style="background-color: #A5F3FC; border-color: #A5F3FC; color:black">
                    Entry
                </a>
                <button class="btn" type="button" style="background-color: #C2F9D3; border-color: #C2F9D3; color:black">
                    Cetak
                </button>
            </div>

            <div class="card">
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
                                            <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a>
                                            </li>
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
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
        $(function() {
            // Ubah selector menjadi '#keytable' agar sesuai dengan ID tabel di HTML
            $('#keytable').DataTable({
                responsive: true,
                paging: true,
                info: true,
                searching: true,
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ data per halaman",
                    zeroRecords: "Tidak ada data yang cocok",
                    info: "Menampilkan halaman _PAGE_ dari _PAGES_",
                    infoEmpty: "Tidak ada data tersedia",
                    infoFiltered: "(disaring dari _MAX_ total data)"
                }
            });
        });
    </script>
@endpush
