<style>
    /* CSS untuk membuat ikon Font Awesome mirip seperti SVG */
    .sidebar-link .menu-icon {
        font-size: 16px;
        /* Mengatur ukuran ikon */
        width: 20px;
        /* Memberi lebar tetap agar semua menu sejajar */
        margin-right: 10px;
        /* Jarak antara ikon dan teks */
        color: rgba(255, 255, 255, 0.8);
        /* Warna dasar ikon (semi-transparan putih) */
        display: inline-block;
        /* Agar width dan text-align berfungsi */
        text-align: center;
        /* Memastikan ikon di tengah area 20px */
        vertical-align: middle;
        /* Posisi vertikal lebih rapi dengan teks */
    }

    /* CSS untuk mengubah warna ikon saat menu aktif */
    .sidebar-link.active .menu-icon,
    .sidebar-link.active span {
        color: #000000;
        /* Warna ikon dan teks menjadi putih solid */
    }

    /* CSS untuk toggle icon agar terlihat bagus dan konsisten */
    .sidebar-toggle {
        font-size: 20px;
        color: rgba(255, 255, 255, 0.8);
    }
</style>

<style>
    /* Pastikan seluruh teks dan ikon (fill/stroke) di sidebar berwarna hitam
       - Hanya mengubah warna teks/ikon (color, fill, stroke)
       - Tidak mengubah background-color sehingga latar tetap seperti desain
    */

    /* Teks dasar dan heading/link dalam sidebar */
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

    /* Pastikan link mengambil warna dari parent/ inherit */
    .sidebar-wrapper a {
        color: inherit !important;
        text-decoration: none;
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
    }

    /* Aktif / hover: tetap hitam (tetap biarkan background seperti semula) */
    .sidebar-wrapper .sidebar-link.active span,
    .sidebar-wrapper .sidebar-link:hover span,
    .sidebar-wrapper .sidebar-submenu li a:hover {
        color: #000000 !important;
        font-weight: 600;
    }

    /* Jangan menyentuh background-color agar layout/tema tidak berubah */
</style>

<style>
    /* ================================
       Custom Sidebar Font Color (Hitam)
       ================================ */
    .sidebar-link span,
    .sidebar-submenu li a {
        color: #000000;
        /* warna teks normal hitam */
        transition: color 0.3s ease;
    }

    .sidebar-link:hover span,
    .sidebar-submenu li a:hover {
        color: #555555;
        /* abu tua saat hover */
    }

    .sidebar-link.active span,
    .sidebar-submenu li.active a {
        color: #1a73e8;
        /* biru modern untuk yang aktif (Google-style) */
        font-weight: 600;
    }

    /* Ikon juga ikut warna hitam */
    .sidebar-link .menu-icon svg,
    .sidebar-link .menu-icon i {
        color: #000000;
        transition: color 0.3s ease;
    }

    .sidebar-link:hover .menu-icon svg,
    .sidebar-link:hover .menu-icon i {
        color: #555555;
    }

    .sidebar-link.active .menu-icon svg,
    .sidebar-link.active .menu-icon i {
        color: #1a73e8;
        /* biru saat aktif */
    }
</style>


<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png"
                alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
            </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png"
                alt=""></a></div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                            src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2"
                            aria-hidden="true"></i></div>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-home"></use>
                        </svg>
                        <h6>Dashboard</h6>
                    </a>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-layout"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-layout"></use>
                        </svg>
                        <h6>Master</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Unit Kerja/Devisi</a></li>
                        <li><a href="#">Jabatan</a></li>
                        <li><a href="#">Provinsi</a></li>
                        <li><a href="#">Kota</a></li>
                        <li><a href="#">Status Pegawai/Karyawan</a></li>
                        <li><a href="#">Sift Kerja</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-project"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-project"></use>
                        </svg>
                        <h6>Human Resources Department</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data Pegawai/Karyawan</a></li>
                        <li><a href="#">Mutasi Pegawai</a></li>
                        {{-- Item ini aktif sesuai gambar --}}
                        <li class="active"><a href="#">Jadwal Sift Kerja</a></li>
                        <li><a href="#">Absensi/Presensi</a></li>
                        <li><a href="#">Izin</a></li>
                        <li><a href="#">Cuti</a></li>
                        <li><a href="#">Lembur</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-board"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-board"></use>
                        </svg>
                        <h6>Verifikasi</h6>
                    </a>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                        </svg>
                        <h6>Approval</h6>
                    </a>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-email"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-email"></use>
                        </svg>
                        <h6>Challange</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Program Chalange</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-bookmark"> </use>
                        </svg>
                        <h6>Finance</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Remburse</a></li>
                        <li><a href="#">Gaji</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-contact"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-contact"> </use>
                        </svg>
                        <h6>Breafing / Meeting</h6>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Jadwal Meeting</a></li>
                    </ul>
                </li>

            </ul>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</div>
