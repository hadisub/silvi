<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav mt-4">
                            <a class="nav-link" href="<?= base_url('beranda') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Beranda
                            </a>
                            <div class="sb-sidenav-menu-heading">Pengajuan</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Daftar Pengajuan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('vidconbaru') ?>">Baru</a>
                                    <a class="nav-link" href="<?= base_url('vidcondisetujui') ?>">Disetujui</a>
                                    <a class="nav-link" href="<?= base_url('vidconditolak') ?>">Ditolak</a>
                                    <a class="nav-link" href="<?= base_url('vidcondipending') ?>">Dipending</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Event</div>
                            <a class="nav-link" href="<?= base_url('kalender') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                                Kalender Vidcon
                            </a>
                            <div class="sb-sidenav-menu-heading">Laporan</div>
                            <a class="nav-link" href="<?= base_url('lapperbulan') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Rekap Per Bulan
                            </a>
                            <a class="nav-link" href="<?= base_url('lappertahun') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Rekap Per Tahun
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" data-toggle="modal" href="#" data-target="#modalabout">
                                <div class="sb-nav-link-icon"><i class="fas fa-info"></i></div>
                                Tentang SILVI
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Anda masuk sebagai:</div>
                        Administrator
                    </div>
                </nav>
            </div>