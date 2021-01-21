    <?= $this->include('layout/headerloginregister') ?>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-bold my-4">Form Pengajuan Bantuan VidCon</h3>
                                        <h6 class="text-center font-weight-light">Silahkan isi form berikut untuk mengajukan bantuan fasilitas video conference dari Dinas Kominfo Kabupaten Kediri</h6>
                                    </div>
                                    <div class="card-body">
                                        <form id="formpengajuan" action="<?= base_url('pengajuan/kirimpengajuan') ?>" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                            <!-- form -->
                                            <div class="form-group">
                                                <label class="small mb-1" for="nomorsurat">Nomor Surat:</label>
                                                <input class="form-control <?= ($validation->hasError('nomorsurat')) ? 'is-invalid' : ''; ?>" id="nomorsurat" name="nomorsurat" type="text" placeholder="Contoh: 800/213/418.26/2021"
                                                 value="<?= old('nomorsurat') ?>" autofocus/>
                                                <div class="invalid-feedback"><?= $validation->getError('nomorsurat') ?> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="namalembaga">Nama SKPD atau Kecamatan:</label>
                                                <input class="form-control <?= ($validation->hasError('namalembaga')) ? 'is-invalid' : ''; ?>" id="namalembaga" name="namalembaga" type="text" placeholder="Contoh: Dinas Sosial Kabupaten Kediri" 
                                                value="<?= old('namalembaga') ?>" />
                                                <div class="invalid-feedback"><?= $validation->getError('namalembaga') ?> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="perihal">Perihal:</label>
                                                <input class="form-control <?= ($validation->hasError('perihal')) ? 'is-invalid' : ''; ?>" id="perihal" name="perihal" type="text" placeholder="Contoh: Video Conference Pelantikan Kepala SKPD baru"
                                                value="<?= old('perihal') ?>" />
                                                <div class="invalid-feedback"><?= $validation->getError('perihal') ?> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="tglvidcon">Tanggal Pelaksanaan Vidcon:</label>
                                                <input class="form-control <?= ($validation->hasError('tglvidcon')) ? 'is-invalid' : ''; ?>" id="tglvidcon" name="tglvidcon" type="date"
                                                value="<?= old('tglvidcon') ?>" />
                                                <div class="invalid-feedback"><?= $validation->getError('tglvidcon') ?> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="tempat">Tempat:</label>
                                                <input class="form-control <?= ($validation->hasError('tempat')) ? 'is-invalid' : ''; ?>" id="tempat" name="tempat" type="text" placeholder="Contoh: Ruang Rapat Dinas Sosial"
                                                value="<?= old('tempat') ?>" />
                                                <div class="invalid-feedback"><?= $validation->getError('tempat') ?> </div>
                                            </div>
                                            <div class="col-sm-4" style="padding:0;">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="jmlpeserta">Jumlah Peserta:</label>
                                                    <div class="input-group">
                                                        <input class="form-control <?= ($validation->hasError('jmlpeserta')) ? 'is-invalid' : ''; ?>" id="jmlpeserta" name="jmlpeserta" type="text"
                                                        value="<?= old('jmlpeserta') ?>" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" >Orang</span>
                                                        </div>
                                                        <div class="invalid-feedback"><?= $validation->getError('jmlpeserta') ?> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="keterangan">Keterangan:</label>
                                                <textarea class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan" type="text" placeholder="Diisi dengan uraian singkat tentang kegiatan video conference"
                                                ><?= old('keterangan') ?></textarea>
                                                <div class="invalid-feedback"><?= $validation->getError('keterangan') ?> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="kebutuhan">Kebutuhan Vidcon:</label>
                                                <textarea class="form-control <?= ($validation->hasError('kebutuhan')) ? 'is-invalid' : ''; ?>" id="kebutuhan" name="kebutuhan" type="text" placeholder="Masukkan peralatan apa saja yang dibutuhkan untuk video conference"
                                                ><?= old('kebutuhan') ?></textarea>
                                                <div class="invalid-feedback"><?= $validation->getError('kebutuhan') ?> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="namacp">Nama Contact Person/ Penanggung Jawab:</label>
                                                <input class="form-control <?= ($validation->hasError('namacp')) ? 'is-invalid' : ''; ?>" id="namacp" name="namacp" type="text" placeholder="Diisi dengan nama CP/Penanggung Jawab Vidcon" 
                                                value="<?= old('namacp') ?>"/>
                                                <div class="invalid-feedback"><?= $validation->getError('namacp') ?> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="nomorcp">Nomor HP Contact Person/ Penanggung Jawab:</label>
                                                <input class="form-control <?= ($validation->hasError('nomorcp')) ? 'is-invalid' : ''; ?>" id="nomorcp" name="nomorcp" type="text" placeholder="Diisi dengan nama CP/Penanggung Jawab Vidcon" 
                                                value="<?= old('nomorcp') ?>"/>
                                                <div class="invalid-feedback"><?= $validation->getError('nomorcp') ?> </div>
                                            </div>
                                            <div class="form-group">
                                            <p class="small mb-1">Unggah Surat Resmi (dalam bentuk gambar jpg/jpeg/png maksimal 2 MB):</p>
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input <?= ($validation->hasError('filesurat')) ? 'is-invalid' : ''; ?>" id="filesurat" name="filesurat" onchange="ValidateSize(this)" />
                                                <div class="invalid-feedback"><?= $validation->getError('filesurat') ?></div>
                                                <label class="custom-file-label" for="filesurat" id="labelfilesurat" name="labelfilesurat">Pilih surat..</label>
                                                </div>
                                            </div>
                                            <!-- tombol -->
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block mb-3" type="button" data-toggle="modal" data-target="#modalkonfirmasi">Kirim Pengajuan</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?= $this->include('layout/footerloginregister') ?>
