<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #9ABDFF;">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title" style="color: black; font-weight: bold;">
                    Dashboard
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#master" aria-expanded="true"
                aria-controls="master">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title" style="color: black; font-weight: bold;">Master</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="master">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Unit Kerja/Devisi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Jabatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Provinsi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kota</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Status Pegawai/Karyawan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sift Kerja</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#hrd" aria-expanded="true"
                aria-controls="hrd">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title" style="color: black; font-weight: bold;">Human Resources Department</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="hrd">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Data Pegawai/Karyawan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mutasi Pegawai</a></li>
                    {{-- Item ini aktif sesuai gambar --}}
                    <li class="nav-item active"><a class="nav-link" href="#">Jadwal Sift Kerja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Absensi/Presensi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Izin</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cuti</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lembur</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title" style="color: black; font-weight: bold;">
                    Verifikasi
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title" style="color: black; font-weight: bold;">
                    Approval
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#challange" aria-expanded="false"
                aria-controls="challange">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title" style="color: black; font-weight: bold;">Challange</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="challange">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Program Chalange</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#finance" aria-expanded="false"
                aria-controls="finance">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title" style="color: black; font-weight: bold;">Finance</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="finance">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Remburse</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gaji</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#meeting" aria-expanded="false"
                aria-controls="meeting">
                <i class="icon-contract menu-icon"></i>
                <span class="menu-title" style="color: black; font-weight: bold;">Breafing / Meeting</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="meeting">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Jadwal Meeting</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
