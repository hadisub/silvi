<?= $this->include('layout/headeradmin') ?>
<?= $this->include('layout/sidebar') ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4"><?= $judul ?></h4>
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
                        </div">
                        <div class="container-fluid mb-4 mt-4">
                            <form role="form" action="<?= site_url('user/edit_info') ?>" method="POST">
                              <?= csrf_field() ?>
                              <div>
                                  <input type="hidden" class="form-control" id="id" name="id" value="<?=$akun['iduser'] ?>">
                              </div>
                              <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?=$akun['username'] ?>">
                                <div class="invalid-feedback"><?= $validation->getError('username') ?> </div>
                              </div>
                              <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?=$akun['nama'] ?>">
                                <div class="invalid-feedback"><?= $validation->getError('nama') ?> </div>
                              </div>
                              <div class="form-group">
                                <label for="passwordbaru">Password baru</label>
                                <input type="password" class="form-control <?= ($validation->hasError('passwordbaru')) ? 'is-invalid' : ''; ?>" id="passwordbaru" name="passwordbaru" placeholder="Masukkan password baru.." autocomplete="on">
                                <div class="invalid-feedback"><?= $validation->getError('passwordbaru') ?> </div>
                              </div>
                              <div class="form-group">
                                <label for="konfirmasipassword">Konfirmasi Password baru</label>
                                <input type="password" class="form-control <?= ($validation->hasError('konfirmasipassword')) ? 'is-invalid' : ''; ?>" id="konfirmasipassword" name="konfirmasipassword" placeholder="Masukkan kembali password baru.." autocomplete="on">
                                <div class="invalid-feedback"><?= $validation->getError('konfirmasipassword') ?> </div>
                              </div>
                              <a class="btn btn-secondary" href="<?= site_url('beranda') ?>">Batal</a>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </main>

<?= $this->include('layout/footeradmin') ?>