<?= $this->include('layout/headeradmin') ?>
<?= $this->include('layout/sidebar') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-4"><?= $judul ?></h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Pengajuan</li>
                            <li class="breadcrumb-item">Daftar Pengajuan Bantuan Vidcon Baru</li>
                        </ol>
                        <div class="card mb-4">
                            <!-- alert jika perintah sukses -->
                            <?php if(session()->getFlashData('sukses')!==NULL){ ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo(session()->getFlashData('sukses')); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php } ?>
                            <!-- alert jika perintah gagal -->
                            <?php if(session()->getFlashData('gagal')!==NULL){ ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo(session()->getFlashData('gagal')); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php } ?>
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-sm-3">
                                        <form action="" method="get">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Masukkan kata kunci di sini..." name="katakunci" id="katakunci" value="<?= isset($_GET['katakunci']) ? $_GET['katakunci'] : '' ?>" autocomplete="off">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="submit" name="submitkatakunci"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tblpengajuanbaru" cellspacing="0">
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
                                            <?php foreach($vidcon_baru as $vd): ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $vd['nomorsurat'] ?></td>
                                                <td><?= $vd['namalembaga'] ?></td>
                                                <td><?= $vd['perihal'] ?></td>
                                                <td><?= $vd['tempat'] ?></td>
                                                <td style="white-space: nowrap;"><?= $vd['tglvidcon'] = date("d-m-Y", strtotime($vd['tglvidcon'])) ?></td>
                                                <td style="white-space: nowrap;"><a class="btn btn-primary btn-circle btn-detail" data-tooltip="tooltip" data-toggle="modal" data-target="#modaldetailpengajuan" data-placement="top" title="Lihat rincian" 
                                                    data-nomordetail="<?=$vd['nomorsurat'] ?>" 
                                                    data-lembagadetail="<?=$vd['namalembaga'] ?>" 
                                                    data-perihaldetail="<?=$vd['perihal'] ?>" 
                                                    data-tanggaldetail="<?=$vd['tglvidcon'] ?>" 
                                                    data-tempatdetail="<?=$vd['tempat'] ?>" 
                                                    data-jumlahdetail="<?=$vd['jmlpeserta'] ?>" 
                                                    data-keterangandetail="<?=$vd['keterangan'] ?>" 
                                                    data-kebutuhandetail="<?=$vd['kebutuhan'] ?>" 
                                                    data-cpdetail="<?=$vd['namacp'] ?>" 
                                                    data-hpcpdetail="<?=$vd['nomorcp'] ?>"
                                                    data-createddetail="Tanggal <?=date('d-m-Y', strtotime($vd['created_at']))?> Jam <?=date('H:i', strtotime($vd['created_at'])) ?>"
                                                    data-updateddetail="Tanggal <?=date('d-m-Y', strtotime($vd['updated_at']))?> Jam <?=date('H:i', strtotime($vd['updated_at'])) ?>" 
                                                    data-suratdetail="<?=$vd['filesurat'] ?>"><i class="fas fa-eye"></i></a>
                                                    <a class="btn btn-success btn-circle btn-approve" data-tooltip="tooltip" data-toggle="modal" data-placement="top" data-target="#modalapprovepengajuan" title="Setujui pengajuan ini" data-url="<?=site_url("pengajuan/approvepengajuan/".$vd['id_vidcon']."/".'vidconbaru') ?>" data-nama="<?=$vd['namalembaga'] ?>" 
                                                        data-perihal="<?=$vd['perihal'] ?>" 
                                                        data-tanggal="<?=$vd['tglvidcon'] ?>" id="btn-approve" name="btn-approve"><i class="fas fa-check"></i></a>
                                                    <a class="btn btn-warning btn-circle btn-pending" data-tooltip="tooltip" data-toggle="modal" data-placement="top" data-target="#modalpendingpengajuan" title="Pending pengajuan ini" data-url="<?=site_url("pengajuan/pendingpengajuan/".$vd['id_vidcon']."/".'vidconbaru') ?>" data-nama="<?=$vd['namalembaga'] ?>" 
                                                    data-perihal="<?=$vd['perihal'] ?>" 
                                                    data-tanggal="<?=$vd['tglvidcon'] ?>" id="btn-pending" name="btn-pending"><i class="fas fa-hourglass"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>        
                                        </tbody>
                                    </table>
                                    <?= $pager->links('tblpengajuanbaru','my_pager') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?= $this->include('layout/footeradmin') ?>