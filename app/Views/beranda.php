<?= $this->include('layout/headeradmin') ?>
<?= $this->include('layout/sidebar') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4"><?= $judul ?></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body text-center">
                                    <h3><i class="fa fa-comment-medical fa-2x"></i></h3>
                                    <h4>2 Pengajuan Baru</h4>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url("vidconbaru") ?>">Lihat selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body text-center">
                                    <h3><i class="fa fa-comment fa-2x"></i></h3>
                                    <h4>0 Pengajuan Disetujui</h4>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url("vidcondisetujui") ?>">Lihat selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body text-center">
                                    <h3><i class="fa fa-comment-slash fa-2x"></i></h3>
                                    <h4>0 Pengajuan Dipending</h4>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url("vidcondipending") ?>">Lihat selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body text-center">
                                    <h3><i class="fa fa-comment-dots fa-2x"></i></h3>
                                    <h4>0 Pengajuan Ditolak</h4>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= base_url("vidconditolak") ?>">Lihat selengkapnya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?= $this->include('layout/footeradmin') ?>