<?= $this->include('layout/headeradmin') ?>
<?= $this->include('layout/sidebar') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4"><?= $judul ?></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Pengajuan</li>
                            <li class="breadcrumb-item">Daftar Pengajuan Bantuan Vidcon yang Ditolak</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-sm-3">
                                        <form action="" method="get">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Masukkan kata kunci di sini..." name="katakunci" id="katakunci" value="<?= isset($_GET['katakunci']) ? $_GET['katakunci'] : '' ?>">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="submit" name="submitkatakunci"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tblpengajuanditolak" cellspacing="0">
                                        <thead class="text-center thead-light">
                                            <tr>
                                                <th>No.</th>
                                                <th>No. Surat</th>
                                                <th>Asal Surat</th>
                                                <th>Perihal</th>
                                                <th>Tempat</th>
                                                <th>Tgl. Vidcon</th>
                                                <th class="type-action" width="12%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i =1+(10*($halaman_sekarang-1)); ?>
                                            <?php foreach($vidcon_ditolak as $vd): ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $vd['nomorsurat'] ?></td>
                                                <td><?= $vd['namalembaga'] ?></td>
                                                <td><?= $vd['perihal'] ?></td>
                                                <td><?= $vd['tempat'] ?></td>
                                                <td style="white-space: nowrap;"><?= $vd['tglvidcon'] = date("d-m-Y", strtotime($vd['tglvidcon'])) ?></td>
                                                <td style="white-space: nowrap;"><a class="btn btn-primary btn-circle center-block" data-toggle="tooltip" data-placement="top" title="Lihat rincian"><i class="fas fa-eye"></i></a>
                                                    <a class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Pending pengajuan ini"><i class="fas fa-hourglass"></i></a>
                                                    <a class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Hapus pengajuan ini"><i class="fas fa-trash"></i></a></td>
                                            </tr>
                                            <?php endforeach; ?>        
                                        </tbody>
                                    </table>
                                    <?= $pager->links('tblpengajuanditolak','my_pager') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?= $this->include('layout/footeradmin') ?>