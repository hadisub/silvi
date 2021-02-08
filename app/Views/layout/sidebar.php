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
                            <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Daftar Pengajuan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url('vidconbaru') ?>"><i class="fas fa-comment-medical mr-3"></i>Baru</a>
                                    <a class="nav-link" href="<?= base_url('vidcondisetujui') ?>"><i class="fas fa-comment mr-3"></i>Disetujui</a>
                                    <a class="nav-link" href="<?= base_url('vidcondipending') ?>"><i class="fas fa-comment-dots mr-3"></i>Dipending</a>
                                    <a class="nav-link" href="<?= base_url('vidconditolak') ?>"><i class="fas fa-comment-slash mr-3"></i>Ditolak</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Event</div>
                            <a class="nav-link" href="<?= base_url('kalender') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                                Kalender Vidcon<span class="right badge badge-primary ml-2">Beta</span>
                            </a>
                            <div class="sb-sidenav-menu-heading">Laporan</div>
                            <a class="nav-link" href="<?= base_url('laporan') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Cetak Laporan
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" data-toggle="modal" href="javascript:void(0);" data-target="#modalabout">
                                <div class="sb-nav-link-icon"><i class="fas fa-info"></i></div>
                                Tentang SILVI
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Anda masuk sebagai:</div>
                        <?= session()->get('nama') ?>
                    </div>
                </nav>
            </div>