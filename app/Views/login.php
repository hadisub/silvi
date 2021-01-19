<?= $this->include('layout/headerloginregister') ?>

<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-bold my-4">SILVI</h3>
                                        <h5 class="text-center font-weight-light">Sistem Informasi Laporan</h5><h5 class="text-center font-weight-light"> Video Conference</h5>
                                    </div>
                                    <div class="card-body">
                                        <form role="form" autocomplete="off" action ="<?=base_url('user/login')?>" method ="POST">
                                        <?= csrf_field() ?>
                                        <?php if(!empty(session()->getFlashData('gagal'))){ 
                                        echo '<div class="alert alert-danger" role="alert">';
                                        echo session()->getFlashData('gagal');
                                        echo '</div>'; }
                                        ?>
                                            <div class="form-group">
                                                <label class="small mb-1" for="nama">Nama Pengguna:</label>
                                                <input class="form-control py-4" id="nama" name="nama" type="text" placeholder="Masukkan nama pengguna" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Kata Sandi:</label>
                                                <input class="form-control py-4" id="password" name="password" type="password" placeholder="Masukkan kata sandi" />
                                            </div>
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-center">
                                                <button class="btn btn-primary btn-block" type="submit">Masuk</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?= $this->include('layout/footerloginregister') ?>