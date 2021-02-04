<?= $this->include('layout/headeradmin') ?>
<?= $this->include('layout/sidebar') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4 text-center"><?= $judul ?></h2>
                    <div class="card mb-4">
                        <!-- alert jika data kosong -->
                        <?php if(!empty($_GET['tanggalawal']) && !empty($_GET['tanggalakhir']) && empty($laporan)){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Tidak ada data pengajuan video conference di antara tanggal yang anda pilih. Silahkan pilih kembali
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?>
	                    <div class="card-body">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <form action="<?= site_url('laporan/cari_laporan') ?>" method="get">
                                    <div class="row">

                                            <div class="col-4 form-group">
                                                <label class="small mb-1" for="tanggalawal">Tanggal Awal:</label>
                                                <input class="form-control" id="tanggalawal" name="tanggalawal" type="date" value="<?= isset($_GET['tanggalawal']) ? $_GET['tanggalawal'] : '' ?>" required oninvalid="this.setCustomValidity('Tanggal awal harus diisi')" oninput="setCustomValidity('')" />
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="small mb-1" for="tanggalakhir">Tanggal Akhir:</label>
                                                <input class="form-control" id="tanggalakhir" name="tanggalakhir" type="date" value="<?= isset($_GET['tanggalakhir']) ? $_GET['tanggalakhir'] : '' ?>" required oninvalid="this.setCustomValidity('Tanggal akhir harus diisi')" oninput="setCustomValidity('')" />
                                            </div>
                                            <div class="col-4 form-group mt-auto">
                                                <button class="btn btn-primary" id="caritanggal" name="caritanggal" type="submit">Cari<i class="fa fa-search ml-2"></i></button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="col-6 mb-3 my-auto text-right">
                                    <a class="btn btn-danger" id="cetak_pdf" name="cetak_pdf" href="<?= site_url('laporan/ekspor_pdf') ?>?<?= $_SERVER['QUERY_STRING'] ?>">Ekspor PDF<i class="fa fa-file-pdf ml-2"></i></a>
                                    <a class="btn btn-success" id="cetak_excel" name="cetak_excel" href="<?= site_url('laporan/ekspor_excel') ?>">Ekspor Excel<i class="fa fa-file-excel ml-2"></i></a>
                                </div>
                            </div>
                                <div class="table-responsive">
                                <table class="table table-bordered" id="tbllaporan" cellspacing="0">
                                    <thead class="text-center thead-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Surat</th>
                                            <th>Tgl. Diajukan</th>
                                            <th>Asal Surat</th>
                                            <th>Perihal</th>
                                            <th>Tempat</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i =1+(10*($halaman_sekarang-1)); ?>
                                        <?php foreach($laporan as $l): ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $l['nomorsurat'] ?></td>
                                            <td style="white-space: nowrap"><?= $l['created_at'] = date("d-m-Y", strtotime($l['created_at']))  ?></td>
                                            <td><?= $l['namalembaga'] ?></td>
                                            <td><?= $l['perihal'] ?></td>
                                            <td><?= $l['tempat'] ?></td>
                                            <td><?= $l['keterangan'] ?></td>
                                        </tr>
                                        <?php endforeach; ?>        
                                    </tbody>
                                </table>
                                <?php if(!is_null($pager)) { echo $pager->links('tbllaporan','my_pager');} ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </main>


<?= $this->include('layout/footeradmin') ?>