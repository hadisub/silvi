<?= $this->include('layout/headeradmin') ?>
<?= $this->include('layout/sidebar') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4 text-center"><?= $judul ?></h2>
                    <div class="card mb-4">
	                    <div class="card-body">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <form action="<?= site_url('laporan') ?>" method="get">
                                    <div class="row">

                                            <div class="col-4 form-group">
                                                <label class="small mb-1" for="tanggalawal">Tanggal Awal:</label>
                                                <input class="form-control" id="tanggalawal" name="tanggalawal" type="date" value="<?= isset($_GET['tanggalawal']) ? $_GET['tanggalawal'] : '' ?>" />
                                            </div>
                                            <div class="col-4 form-group">
                                                <label class="small mb-1" for="tanggalakhir">Tanggal Akhir:</label>
                                                <input class="form-control" id="tanggalakhir" name="tanggalakhir" type="date" value="<?= isset($_GET['tanggalakhir']) ? $_GET['tanggalakhir'] : '' ?>" />
                                            </div>
                                            <div class="col-4 form-group mt-auto">
                                                <button class="btn btn-primary" type="submit">Cari<i class="fa fa-search ml-2"></i></button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="col-6 mb-3 my-auto text-right">
                                    <a class="btn btn-danger" id="cetak" name="cetak" href="#">Cetak<i class="fa fa-print ml-2"></i></a>
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