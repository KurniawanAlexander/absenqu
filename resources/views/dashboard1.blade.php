@extends('layouts.app1')

@section('title', 'Dashboard Admin')

@section('content')
    <style>
        /* Styling sederhana, Anda bisa menggantinya dengan framework CSS seperti Bootstrap */
        .widget-container {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 30px;
            background-color: #e9ecef;
        }

        .widget-header {
            margin-bottom: 25px;
            border-left: 5px solid #dc3545;
            padding-left: 15px;
        }

        .widget-header h3 {
            color: #333;
            margin: 0;
            font-weight: 600;
        }

        .widget-header p {
            color: #6c757d;
            font-size: 15px;
            margin-top: 5px;
        }

        .stat-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            margin-bottom: 30px;
        }

        .stat-widget {
            background: #ffffff;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #dee2e6;
            display: flex;
            align-items: center;
        }

        .stat-widget .icon-box {
            background: #f8f9fa;
            color: #dc3545;
            padding: 10px;
            border-radius: 50%;
            margin-right: 15px;
            font-size: 20px;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .stat-widget .info-text h5 {
            margin: 0;
            font-size: 18px;
            color: #495057;
        }

        .stat-widget .info-text p {
            margin: 0;
            font-size: 12px;
            color: #999;
        }

        .main-content-row {
            display: flex;
            gap: 15px;
        }

        .main-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 20px;
            width: 100%;
        }

        .main-card h4 {
            margin-top: 0;
            color: #dc3545;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .table-list {
            width: 100%;
            border-collapse: collapse;
        }

        .table-list th,
        .table-list td {
            padding: 10px;
            text-align: left;
            font-size: 13px;
        }

        .table-list th {
            background-color: #f1f1f1;
            color: #333;
            font-weight: 600;
        }

        .table-list tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .table-container {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>

    <div class="widget-container">
        <div class="widget-header">
            <h3>Halo, Admin Platform! 👋</h3>
        </div>

        <div class="stat-row">
            <div class="stat-widget">
                <div class="icon-box"><i class="fa fa-user-plus"></i></div>
                <div class="info-text">
                    <p>Pengguna Terdaftar</p>
                    <h5>12.450</h5>
                </div>
            </div>
            <div class="stat-widget">
                <div class="icon-box"><i class="fa fa-shopping-bag"></i></div>
                <div class="info-text">
                    <p>Toko Aktif</p>
                    <h5>3.120</h5>
                </div>
            </div>
            <div class="stat-widget">
                <div class="icon-box"><i class="fa fa-tags"></i></div>
                <div class="info-text">
                    <p>Template Terjual</p>
                    <h5>45.080</h5>
                </div>
            </div>
            <div class="stat-widget">
                <div class="icon-box"><i class="fa fa-money"></i></div>
                <div class="info-text">
                    <p>Pendapatan (Rp)</p>
                    <h5>125.750.000</h5>
                </div>
            </div>
        </div>

        <div class="main-content-row">
            <div class="main-card" style="flex: 2;">
                <h4>Pengguna Baru Hari Ini</h4>
                <div class="table-container">
                <table class="table-list">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Waktu Daftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmad Mustofa</td>
                            <td>ahmad.m@mail.com</td>
                            <td>Baru saja</td>
                        </tr>
                        <tr>
                            <td>Siti Rahayu</td>
                            <td>siti.r@mail.com</td>
                            <td>25 menit lalu</td>
                        </tr>
                        <tr>
                            <td>Budi Santoso</td>
                            <td>budi.s@mail.com</td>
                            <td>1 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Dewi Purnama</td>
                            <td>dewi.p@mail.com</td>
                            <td>3 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Eko Widiatmo</td>
                            <td>eko.w@mail.com</td>
                            <td>5 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Andi Wijaya</td>
                            <td>andi.w@mail.com</td>
                            <td>5 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Rina Sari</td>
                            <td>rina.s@mail.com</td>
                            <td>6 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Joko Susilo</td>
                            <td>joko.s@mail.com</td>
                            <td>6 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Lina Marlina</td>
                            <td>lina.m@mail.com</td>
                            <td>7 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Agus Setiawan</td>
                            <td>agus.s@mail.com</td>
                            <td>8 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Fitriani</td>
                            <td>fitriani@mail.com</td>
                            <td>8 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Heru Prasetyo</td>
                            <td>heru.p@mail.com</td>
                            <td>9 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Indah Permata</td>
                            <td>indah.p@mail.com</td>
                            <td>9 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Rudi Hartono</td>
                            <td>rudi.h@mail.com</td>
                            <td>10 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Sari Puspita</td>
                            <td>sari.p@mail.com</td>
                            <td>10 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Teguh Santoso</td>
                            <td>teguh.s@mail.com</td>
                            <td>11 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Wulan Dari</td>
                            <td>wulan.d@mail.com</td>
                            <td>11 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Yoga Pratama</td>
                            <td>yoga.p@mail.com</td>
                            <td>12 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Zainal Abidin</td>
                            <td>zainal.a@mail.com</td>
                            <td>12 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Putri Amelia</td>
                            <td>putri.a@mail.com</td>
                            <td>13 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Bambang Pamungkas</td>
                            <td>bambang.p@mail.com</td>
                            <td>14 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Citra Lestari</td>
                            <td>citra.l@mail.com</td>
                            <td>14 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Dian Nugraha</td>
                            <td>dian.n@mail.com</td>
                            <td>15 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Eka Putri</td>
                            <td>eka.p@mail.com</td>
                            <td>15 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Fajar Sidik</td>
                            <td>fajar.s@mail.com</td>
                            <td>16 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Gita Gutawa</td>
                            <td>gita.g@mail.com</td>
                            <td>16 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Hendra Gunawan</td>
                            <td>hendra.g@mail.com</td>
                            <td>17 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Ika Kartika</td>
                            <td>ika.k@mail.com</td>
                            <td>17 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Jefri Nichol</td>
                            <td>jefri.n@mail.com</td>
                            <td>18 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Kartika Sari</td>
                            <td>kartika.s@mail.com</td>
                            <td>18 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Lukman Hakim</td>
                            <td>lukman.h@mail.com</td>
                            <td>19 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Maya Indah</td>
                            <td>maya.i@mail.com</td>
                            <td>19 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Nanda Pratama</td>
                            <td>nanda.p@mail.com</td>
                            <td>20 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Oscar Lawalata</td>
                            <td>oscar.l@mail.com</td>
                            <td>20 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Pandu Wijaya</td>
                            <td>pandu.w@mail.com</td>
                            <td>21 jam lalu</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

            <div class="main-card" style="flex: 1;">
                <h4>Toko Baru Dibuat</h4>
                <div class="table-container">
                <table class="table-list">
                    <thead>
                        <tr>
                            <th>Nama Toko</th>
                            <th>Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Toko Cepat Express</td>
                            <td>2 menit lalu</td>
                        </tr>
                        <tr>
                            <td>Jaya Elektronik Store</td>
                            <td>1 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Pusat Buku Online</td>
                            <td>10 jam lalu</td>
                        </tr>
                        <tr>
                            <td>Aneka Gadget</td>
                            <td>1 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Warung Serba Ada</td>
                            <td>2 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Karya Mandiri Teknik</td>
                            <td>2 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Sumber Rejeki</td>
                            <td>3 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Toko Kelontong Barokah</td>
                            <td>3 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Maju Jaya Abadi</td>
                            <td>4 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Sinar Terang</td>
                            <td>4 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Berkah Tani</td>
                            <td>5 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Lancar Jaya Motor</td>
                            <td>5 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Putra Bangsa Collection</td>
                            <td>6 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Cahaya Abadi</td>
                            <td>6 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Griya Busana Muslim</td>
                            <td>7 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Istana Sepatu</td>
                            <td>7 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Jagonya Komputer</td>
                            <td>8 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Kencana Motor</td>
                            <td>8 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Lestari Alam</td>
                            <td>9 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Mega Elektronik</td>
                            <td>9 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Nusantara Craft</td>
                            <td>10 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Optik Sehat</td>
                            <td>10 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Pustaka Ilmu</td>
                            <td>11 hari lalu</td>
                        </tr>
                        <tr>
                            <td>Ratu Dapur</td>
                            <td>11 hari lalu</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
