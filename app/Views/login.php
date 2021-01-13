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
                                        <form autocomplete="off"> 
                                            <div class="form-group">
                                                <label class="small mb-1" for="username">Nama Pengguna:</label>
                                                <input class="form-control py-4" id="username" name="username" type="text" placeholder="Masukkan nama pengguna" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Kata Sandi:</label>
                                                <input class="form-control py-4" id="password" type="password" placeholder="Masukkan kata sandi" />
                                            </div>
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-block" href="index.html">Masuk</a>
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