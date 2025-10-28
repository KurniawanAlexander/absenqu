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
        <div id="sidebar-menu" style="color: black;">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                            src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2"
                            aria-hidden="true"></i></div>
                </li>

                <li class="sidebar-main-title" style="color: black; ">
                    <div>
                        <h6 class="lan-1">GENERAL</h6>
                    </div>
                </li>

                <!-- Dashboard -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-home"></use>
                        </svg>
                        <span class="lan-3">Dashboard</span>
                    </a>
                </li>

                <!-- Profile Usaha/Perusahaan -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
                        </svg>
                        <span class="lan-6">Profile Usaha/Perusahaan</span>
                    </a>
                </li>

                <!-- Master -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-layout"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-layout"></use>
                        </svg>
                        <span class="lan-7">Master</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Kantor Cabang</a></li>
                        <li><a href="#">Unit Kerja/Devisi</a></li>
                        <li><a href="#">Jabatan</a></li>
                        <li><a href="#">Provinsi</a></li>
                        <li><a href="#">Kota</a></li>
                        <li><a href="#">Status Pegawai/Karyawan</a></li>
                        <li><a href="#">Sift Kerja</a></li>
                        <li><a href="#">Cuti Tahunan</a></li>
                        <li><a href="#">Hari Libur Kerja</a></li>
                    </ul>
                </li>

                <!-- HR Header -->
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-8">Human Resources Department</h6>
                    </div>
                </li>

                <!-- Data Pegawai/Karyawan -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-project"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-project"></use>
                        </svg>
                        <span>Data Pegawai/Karyawan</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Data Pegawai/Karyawan</a></li>
                        <li><a href="#">Mutasi Pegawai</a></li>
                    </ul>
                </li>

                <!-- Jadwal Sift Kerja -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-file"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-file"></use>
                        </svg>
                        <span>Jadwal Sift Kerja</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Absensi/Presensi</a></li>
                        <li><a href="#">Izin</a></li>
                        <li><a href="#">Cuti</a></li>
                        <li><a href="#">Lembur</a></li>
                    </ul>
                </li>

                <!-- Verifikasi -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-board"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-board"></use>
                        </svg>
                        <span>Verifikasi</span>
                    </a>
                </li>

                <!-- Approval -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                        </svg>
                        <span>Approval</span>
                    </a>
                </li>

                <!-- Challange -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-email"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-email"></use>
                        </svg>
                        <span>Challange</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Program Challange</a></li>
                    </ul>
                </li>

                <!-- Finance -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-bookmark"> </use>
                        </svg>
                        <span>Finance</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Remburse</a></li>
                        <li><a href="#">Gaji</a></li>
                    </ul>
                </li>

                <!-- Rapat / Pengumuman -->
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-contact"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-contact"> </use>
                        </svg>
                        <span>Rapat / Pengumuman</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="#">Jadwal Meeting</a></li>
                        <li><a href="#">Pengumuman</a></li>
                    </ul>
                </li>
            </ul> Form Widgets<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
            <ul class="nav-sub-childmenu submenu-content">
                <li><a href="datepicker.html">Datepicker</a></li>
                <li><a href="touchspin.html">Touchspin</a></li>
                <li><a href="select2.html">Select2</a></li>
                <li><a href="switch.html">Switch</a></li>
                <li><a href="typeahead.html">Typeahead</a></li>
                <li><a href="clipboard.html">Clipboard</a></li>
            </ul>
            </li>
            <li><a class="submenu-title" href="#">Form layout<span class="sub-arrow"><i
                            class="fa fa-angle-right"></i></span></a>
                <ul class="nav-sub-childmenu submenu-content">
                    <li><a href="form-wizard.html">Form Wizard 1</a></li>
                    <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                    <li><a href="two-factor.html">Two Factor</a></li>
                </ul>
            </li>
            </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-table"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-table"></use>
                    </svg><span>Tables</span></a>
                <ul class="sidebar-submenu">
                    <li><a class="submenu-title" href="#">Bootstrap Tables<span class="sub-arrow"><i
                                    class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                            <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                            <li><a href="table-components.html">Table components</a></li>
                        </ul>
                    </li>
                    <li><a class="submenu-title" href="#">Data Tables<span class="sub-arrow"><i
                                    class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                            <li><a href="datatable-basic-init.html">Basic Init</a></li>
                            <li> <a href="datatable-advance.html">Advance Init </a></li>
                            <li> <a href="datatable-API.html">API </a></li>
                            <li><a href="datatable-data-source.html">Data Sources</a></li>
                        </ul>
                    </li>
                    <li><a href="datatable-ext-autofill.html">Ex. Data Tables</a></li>
                    <li><a href="jsgrid-table.html">Js Grid Table </a></li>
                </ul>
            </li>
            <li class="sidebar-main-title">
                <div>
                    <h6>Components</h6>
                </div>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-ui-kits"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-ui-kits"></use>
                    </svg><span>Ui Kits</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="avatars.html">Avatars</a></li>
                    <li><a href="helper-classes.html">helper classes</a></li>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="tag-pills.html">Tag & pills</a></li>
                    <li><a href="progress-bar.html">Progress</a></li>
                    <li><a href="modal.html">Modal</a></li>
                    <li><a href="alert.html">Alert</a></li>
                    <li><a href="popover.html">Popover</a></li>
                    <li><a href="tooltip.html">Tooltip</a></li>
                    <li><a href="dropdown.html">Dropdown</a></li>
                    <li><a href="according.html">Accordion</a></li>
                    <li><a href="tab-bootstrap.html">Tabs</a></li>
                    <li><a href="list.html">Lists</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-bonus-kit"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-bonus-kit"></use>
                    </svg><span>Bonus Ui</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="scrollable.html">Scrollable</a></li>
                    <li><a href="tree.html">Tree view</a></li>
                    <li><a href="toasts.html">Toasts</a></li>
                    <li><a href="rating.html">Rating</a></li>
                    <li><a href="dropzone.html">dropzone</a></li>
                    <li><a href="tour.html">Tour</a></li>
                    <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                    <li><a href="modal-animated.html">Animated Modal</a></li>
                    <li><a href="owl-carousel.html">Owl Carousel</a></li>
                    <li><a href="ribbons.html">Ribbons</a></li>
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="breadcrumb.html">Breadcrumb</a></li>
                    <li><a href="range-slider.html">Range Slider</a></li>
                    <li><a href="image-cropper.html">Image cropper</a></li>
                    <li><a href="basic-card.html">Basic Card</a></li>
                    <li><a href="creative-card.html">Creative Card</a></li>
                    <li><a href="dragable-card.html">Draggable Card</a></li>
                    <li><a href="timeline-v-1.html">Timeline </a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-animation"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-animation"></use>
                    </svg><span>Animation</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="animate.html">Animate</a></li>
                    <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                    <li><a href="AOS.html">AOS animation</a></li>
                    <li><a href="tilt.html">Tilt Animation</a></li>
                    <li><a href="wow.html">Wow Animation</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-icons"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-icons"></use>
                    </svg><span>Icons</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="flag-icon.html">Flag icon</a></li>
                    <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                    <li><a href="ico-icon.html">Ico Icon</a></li>
                    <li><a href="themify-icon.html">Themify Icon</a></li>
                    <li><a href="feather-icon.html">Feather icon</a></li>
                    <li><a href="whether-icon.html">Whether Icon</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-button"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-botton"></use>
                    </svg><span>Buttons</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="buttons.html">Default Style</a></li>
                    <li><a href="buttons-flat.html">Flat Style</a></li>
                    <li><a href="buttons-edge.html">Edge Style</a></li>
                    <li><a href="raised-button.html">Raised Style</a></li>
                    <li><a href="button-group.html">Button Group</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-charts"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-charts"></use>
                    </svg><span>Charts</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="echarts.html">Echarts</a></li>
                    <li><a href="chart-apex.html">Apex Chart</a></li>
                    <li><a href="chart-google.html">Google Chart</a></li>
                    <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                    <li><a href="chart-flot.html">Flot Chart</a></li>
                    <li><a href="chart-knob.html">Knob Chart</a></li>
                    <li><a href="chart-morris.html">Morris Chart</a></li>
                    <li><a href="chartjs.html">Chatjs Chart</a></li>
                    <li><a href="chartist.html">Chartist Chart</a></li>
                    <li><a href="chart-peity.html">Peity Chart</a></li>
                </ul>
            </li>
            <li class="sidebar-main-title">
                <div>
                    <h6>Pages</h6>
                </div>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="landing-page.html">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-landing-page"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-landing-page"></use>
                    </svg><span>Landing page</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="sample-page.html">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-sample-page"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-sample-page"></use>
                    </svg><span>Sample page</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="internationalization.html">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-internationalization"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-internationalization"></use>
                    </svg><span>Internationalization</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="../starter-kit/index.html" target="_blank">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-starter-kit"></use>
                    </svg><span>Starter kit</span></a></li>
            <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-others"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-others"></use>
                    </svg><span>Others</span></a>
                <div class="mega-menu-container menu-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col mega-box">
                                <div class="link-section">
                                    <div class="submenu-title">
                                        <h5>Error Page</h5>
                                    </div>
                                    <ul class="submenu-content opensubmegamenu">
                                        <li><a href="error-400.html">Error 400</a></li>
                                        <li><a href="error-401.html">Error 401</a></li>
                                        <li><a href="error-403.html">Error 403</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                        <li><a href="error-500.html">Error 500</a></li>
                                        <li><a href="error-503.html">Error 503</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col mega-box">
                                <div class="link-section">
                                    <div class="submenu-title">
                                        <h5> Authentication</h5>
                                    </div>
                                    <ul class="submenu-content opensubmegamenu">
                                        <li><a href="login.html" target="_blank">Login Simple</a></li>
                                        <li><a href="login_one.html" target="_blank">Login bg
                                                image</a></li>
                                        <li><a href="login_two.html" target="_blank">Login image two
                                            </a></li>
                                        <li><a href="login-bs-validation.html" target="_blank">Login
                                                validation</a></li>
                                        <li><a href="login-bs-tt-validation.html" target="_blank">Login
                                                tooltip</a></li>
                                        <li><a href="login-sa-validation.html" target="_blank">Login
                                                sweetalert</a></li>
                                        <li><a href="sign-up.html" target="_blank">Register Simple</a>
                                        </li>
                                        <li><a href="sign-up-one.html" target="_blank">Register
                                                Bg-Image</a></li>
                                        <li><a href="sign-up-two.html" target="_blank">Register
                                                two-image </a></li>
                                        <li><a href="sign-up-wizard.html" target="_blank">Register
                                                wizard</a></li>
                                        <li><a href="unlock.html">Unlock User</a></li>
                                        <li><a href="forget-password.html">Forget Password</a></li>
                                        <li><a href="reset-password.html">Reset Password</a></li>
                                        <li><a href="maintenance.html">Maintenance</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col mega-box">
                                <div class="link-section">
                                    <div class="submenu-title">
                                        <h5>Coming Soon</h5>
                                    </div>
                                    <ul class="submenu-content opensubmegamenu">
                                        <li><a href="comingsoon.html">Coming Simple</a></li>
                                        <li><a href="comingsoon-bg-video.html">Coming with Bg video</a>
                                        </li>
                                        <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col mega-box">
                                <div class="link-section">
                                    <div class="submenu-title">
                                        <h5>Email templates</h5>
                                    </div>
                                    <ul class="submenu-content opensubmegamenu">
                                        <li><a href="basic-template.html">Basic Email</a></li>
                                        <li><a href="email-header.html">Basic With Header</a></li>
                                        <li><a href="template-email.html">Ecomerce Tem...</a></li>
                                        <li><a href="template-email-2.html">Email Template 2</a></li>
                                        <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                        <li><a href="email-order-success.html">Order Success</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="sidebar-main-title">
                <div>
                    <h6>Miscellaneous</h6>
                </div>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-gallery"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-gallery"></use>
                    </svg><span>Gallery</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="gallery.html">Gallery Grid</a></li>
                    <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                    <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                    <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                    <li><a href="gallery-hover.html">Hover Effects</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-blog"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-blog"></use>
                    </svg><span>Blog</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="blog.html">Blog Details</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="add-post.html">Add Post</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="faq.html">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-faq"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-faq"></use>
                    </svg><span>FAQ</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-job-search"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-job-search"></use>
                    </svg><span>Job Search</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="job-cards-view.html">Cards view</a></li>
                    <li><a href="job-list-view.html">List View</a></li>
                    <li><a href="job-details.html">Job Details</a></li>
                    <li><a href="job-apply.html">Apply</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-learning"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-learning"></use>
                    </svg><span>Learning</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="learning-list-view.html">Learning List</a></li>
                    <li><a href="learning-detailed.html">Detailed Course</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-maps"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-maps"></use>
                    </svg><span>Maps</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="map-js.html">Maps JS</a></li>
                    <li><a href="vector-map.html">Vector Maps</a></li>
                </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-editors"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-editors"></use>
                    </svg><span>Editors</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="quilleditor.html">Quill editor</a></li>
                    <li><a href="ace-code-editor.html">ACE code editor </a></li>
                </ul>
            </li>
            <li class="sidebar-list"> <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="knowledgebase.html">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                    </svg><span>Knowledgebase</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                    href="support-ticket.html">
                    <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                    </svg><span>Support Ticket</span></a></li>
            </ul>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</div>
