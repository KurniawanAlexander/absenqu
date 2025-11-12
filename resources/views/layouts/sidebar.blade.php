<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

<style>
    /* =====================================
       CSS Dasar (Font dan Warna Hitam Default)
       ===================================== */

    /* GANTI FONT KE INTER REGULAR */
    .sidebar-wrapper,
    .sidebar-wrapper a,
    .sidebar-wrapper span,
    .sidebar-wrapper h6,
    .sidebar-wrapper h5,
    .sidebar-wrapper li,
    .sidebar-wrapper .submenu-title,
    .sidebar-wrapper .mobile-back,
    .sidebar-wrapper .pin-title,
    .sidebar-wrapper .sidebar-main-title,
    .sidebar-link span,
    .sidebar-submenu li a {
        font-family: 'Inter', sans-serif !important;
        font-weight: 400 !important;
    }

    /* Pastikan seluruh teks dan ikon (fill/stroke) di sidebar berwarna hitam */
    .sidebar-wrapper,
    .sidebar-wrapper a,
    .sidebar-wrapper a *,
    .sidebar-wrapper span,
    .sidebar-wrapper h6,
    .sidebar-wrapper h5,
    .sidebar-wrapper li,
    .sidebar-wrapper .submenu-title,
    .sidebar-wrapper .mobile-back,
    .sidebar-wrapper .pin-title,
    .sidebar-wrapper .sidebar-main-title {
        color: #000000 !important;
    }

    /* Ikon (font icon & SVG) - gunakan currentColor agar mengikuti color */
    .sidebar-wrapper .menu-icon,
    .sidebar-wrapper .menu-icon i,
    .sidebar-wrapper .menu-icon svg,
    .sidebar-wrapper svg,
    .sidebar-wrapper svg use,
    .sidebar-wrapper .stroke-icon,
    .sidebar-wrapper .fill-icon {
        color: #000000 !important;
        fill: currentColor !important;
        stroke: currentColor !important;
        font-family: initial !important;
    }

    /* Font Color (Hitam) Default */
    .sidebar-link span,
    .sidebar-submenu li a {
        color: #000000;
        transition: color 0.3s ease;
    }

    /* Ikon juga ikut warna hitam Default */
    .sidebar-link .menu-icon svg,
    .sidebar-link .menu-icon i {
        color: #000000;
        transition: color 0.3s ease;
    }

    /* Hover/Active Color (Biru/Abu-abu) */
    .sidebar-link:hover span,
    .sidebar-submenu li a:hover {
        color: #555555;
    }

    .sidebar-link.active span,
    .sidebar-submenu li.active a {
        color: #1a73e8;
        /* Biru saat aktif */
        font-weight: 600;
    }

    .sidebar-link.active .menu-icon svg,
    .sidebar-link.active .menu-icon i {
        color: #1a73e8;
        /* Biru saat aktif */
    }

    /* =====================================
       ✅ PERBAIKAN ALIGNMENT UNTUK SEJAJAR HORIZONTAL
       ===================================== */

    .sidebar-link.sidebar-title {
        /* Kontainer Flex utama untuk menyejajarkan ikon dan teks */
        display: flex;
        align-items: center;
        padding: 10px 15px;
        box-sizing: border-box;
    }

    /* Target Ikon SVG */
    .sidebar-link.sidebar-title svg {
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin-right: 10px !important;

        /* Menggunakan position relative dan transform untuk penyesuaian pixel-perfect */
        position: relative;
        /* Geser ikon sedikit ke bawah 1px-2px, ini sangat bergantung pada font */
        top: 1px;
    }

    /* Target Teks H6 */
    .sidebar-link.sidebar-title h6 {
        /* Hapus semua margin bawaan tag h6 */
        margin: 0 !important;

        /* Line-height yang mendukung teks multi-baris dan kontrol vertikal */
        line-height: 1.4 !important;

        flex-grow: 1;
        align-self: center;
        font-weight: 600 !important;
    }

    /* === Perbaikan CSS Lainnya (Untuk menjaga konsistensi) === */
    .sidebar-submenu li a {
        color: #000000 !important;
    }

    .sidebar-link .menu-icon {
        font-size: 16px;
        width: 20px;
        margin-right: 10px;
        color: rgba(255, 255, 255, 0.8);
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        font-family: initial !important;
    }

    .sidebar-link.active .menu-icon,
    .sidebar-link.active span {
        color: #000000;
    }

    .sidebar-toggle {
        font-size: 20px;
        color: rgba(255, 255, 255, 0.8);
        font-family: initial !important;
    }

    .sidebar-wrapper a {
        color: inherit !important;
        text-decoration: none;
    }

    .sidebar-wrapper .sidebar-link.active span,
    .sidebar-wrapper .sidebar-link:hover span,
    .sidebar-wrapper .sidebar-submenu li a:hover {
        color: #000000 !important;
        font-weight: 600;
    }
</style>


<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div class="logo-wrapper" style="background-color: #56FFF4;">
        <a href="/">
            <img class="img-fluid" src="{{ asset('assets/riho-asset/images/logo/logo_absenqu.png') }}"
                alt="Logo AbsenQu" style="width: 150px; height: auto;">
        </a>
        {{-- <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div> --}}
    </div>
    {{-- <div class="logo-icon-wrapper">
        <a href="/">
            <img class="img-fluid" src="{{ asset('assets/riho-asset/images/logo/logo_absenqu.png') }}"
                alt="Logo AbsenQu" style="width: 40px; height: auto;"> </a>
    </div> --}}
    <nav class="sidebar-main" style="margin-top: 15px;">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                            src="{{ asset('assets/riho-asset/images/logo/logo-icon.png') }}" alt=""></a>
                    <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2"
                            aria-hidden="true"></i></div>
                </li>

                <li class="sidebar-list" style="margin-top: 30px;">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="/">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#fill-home') }}"></use>
                        </svg>
                        <h6>Dashboard</h6>
                    </a>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#stroke-layout') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#fill-layout') }}"></use>
                        </svg>
                        <h6>Master</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="/unitkerjadevisi">Unit Kerja/Devisi</a></li>
                        <li><a href="/jabatan">Jabatan</a></li>
                        <li><a href="/provinsi">Provinsi</a></li>
                        <li><a href="/kota">Kota</a></li>
                        <li><a href="/statuspegawaikaryawan">Status Pegawai/Karyawan</a></li>
                        <li><a href="/siftkerja">Sift Kerja</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg>
                        <h6>Human Resources Department</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="/datapegawaikaryawan">Data Pegawai/Karyawan</a></li>
                        <li><a href="mutasipegawai">Mutasi Pegawai</a></li>
                        {{-- Item ini aktif sesuai gambar --}}
                        <li class="active"><a href="/jadwalsiftkerja">Jadwal Sift Kerja</a></li>
                        <li><a href="/absensipresensi">Absensi/Presensi</a></li>
                        <li><a href="/izin">Izin</a></li>
                        <li><a href="/cuti">Cuti</a></li>
                        <li><a href="/lembur">Lembur</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="/verifikasi">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#stroke-board') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#fill-board') }}"></use>
                        </svg>
                        <h6>Verifikasi</h6>
                    </a>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="/approval">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#fill-ecommerce') }}"></use>
                        </svg>
                        <h6>Approval</h6>
                    </a>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#stroke-email') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#fill-email') }}"></use>
                        </svg>
                        <h6>Challange</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="/programchallange">Program Chalange</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#stroke-bookmark') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#fill-bookmark') }}"> </use>
                        </svg>
                        <h6>Finance</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="/remburse">Remburse</a></li>
                        <li><a href="/gaji">Gaji</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#stroke-contact') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/riho-asset/svg/icon-sprite.svg#fill-contact') }}"> </use>
                        </svg>
                        <h6>Breafing / Meeting</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="/jadwalmeeting">Jadwal Meeting</a></li>
                        <li><a href="/pengumuman">Pengumuman</a></li>
                    </ul>
                </li>

            </ul>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</div>
