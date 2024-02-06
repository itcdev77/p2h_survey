<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">P2H SURVEY <sup>SCG</sup></div>
        <!-- <img src="<?= $base_url; ?>assets/img/Logo Sebuku.png" width="120" height="110"> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Beranda -->
    <li class="nav-item <?= isset($home) ? 'active' : ''; ?>">
        <a class="nav-link" href="?#">
            <i class="fas fa-fw fa-home"></i>
            <span>Ddashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>
    <?php if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'user') : ?>
        <!-- Nav Item - Pages Collapse Menu -->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item <?= isset($transaksi) ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi" aria-expanded="true" aria-controls="transaksi">
                <i class="fas fa-fw fa-folder"></i>
                <span>Form P2H</span>
            </a>
            <div id="transaksi" class="collapse <?= isset($transaksi) ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <!-- <a class="collapse-item <?= isset($barang_masuk) ? 'active' : ''; ?>" href="?barang_masuk">Barang Masuk</a> -->
                    <a class="collapse-item <?= isset($total_station) ? 'active' : ''; ?>" href="?total_station">Total Station</a>
                    <a class="collapse-item <?= isset($gps) ? 'active' : ''; ?>" href="?gps">GPS</a>
                    <a class="collapse-item <?= isset($drone) ? 'active' : ''; ?>" href="?drone">Drone</a>
                    <a class="collapse-item <?= isset($drone_rtk) ? 'active' : ''; ?>" href="?drone_rtk">Drone RTK</a>
                </div>
            </div>
        </li>

        <li class="nav-item <?= isset($report) ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#report" aria-expanded="true" aria-controls="report">
                <i class="fas fa-fw fa-folder"></i>
                <span>Rreport Table</span>
            </a>
            <div id="report" class="collapse <?= isset($report) ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?= isset($total_station) ? 'active' : ''; ?>" href="?trnsk_berhasil">Report Total Station</a>
                    <a class="collapse-item <?= isset($drone) ? 'active' : ''; ?>" href="?drone">Report Drone</a>
                    <a class="collapse-item <?= isset($drone_rtk) ? 'active' : ''; ?>" href="?drone_rtk">Report Drone RTK</a>
                    <a class="collapse-item <?= isset($gps) ? 'active' : ''; ?>" href="?gps">GPS Geodetic</a>
                </div>
            </div>
        </li>

        <li class="nav-item <?= isset($log_transaksi) ? 'active' : ''; ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#log_transaksi" aria-expanded="true" aria-controls="log_transaksi">
                <i class="fas fa-fw fa-folder"></i>
                <span>Log P2H</span>
            </a>
            <div id="log_transaksi" class="collapse <?= isset($log_transaksi) ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item <?= isset($trnsk_berhasil) ? 'active' : ''; ?>" href="?trnsk_berhasil">Log di Approve</a>
                    <a class="collapse-item <?= isset($trnsk_gagal) ? 'active' : ''; ?>" href="?trnsk_gagal">Log Gagal</a>
                </div>
            </div>
        </li>


    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->