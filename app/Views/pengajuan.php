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
                                    <div class="card-header"><h3 class="text-center font-weight-bold my-4">Form Pengajuan VidCon</h3>
                                        <h6 class="text-center font-weight-light">Silahkan isi form berikut untuk mengajukan bantuan fasilitas video conference dari Dinas Kominfo Kabupaten Kediri</h6>
                                    </div>
                                    <div class="card-body">
                                        <form autocomplete="off">
                                            <!-- form -->
                                            <div class="form-group">
                                                <label class="small mb-1" for="nomorsurat">Nomor Surat:</label>
                                                <input class="form-control py-4" id="nomorsurat" name="nomorsurat" type="text" placeholder="Contoh: 800/213/418.26/2021" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="namalembaga">Nama SKPD atau Kecamatan:</label>
                                                <input class="form-control py-4" id="namalembaga" name="namalembaga" type="text" placeholder="Contoh: Dinas Sosial Kabupaten Kediri" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="perihal">Perihal:</label>
                                                <input class="form-control py-4" id="perihal" name="perihal" type="text" placeholder="Contoh: Video Conference Pelantikan Kepala SKPD baru" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="tglvidcon">Tanggal Pelaksanaan Vidcon:</label>
                                                <input class="form-control py-4" id="tglvidcon" name="tglvidcon" type="date" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="tempat">Tempat:</label>
                                                <input class="form-control py-4" id="tempat" name="tempat" type="text" placeholder="Contoh: Ruang Rapat Dinas Sosial" />
                                            </div>
                                            <div class="col-sm-4" style="padding:0;">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="jmlpeserta">Jumlah Peserta:</label>
                                                    <div class="input-group">
                                                        <input class="form-control py-4" id="jmlpeserta" name="jmlpeserta" type="text" />
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" >Orang</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="keterangan">Keterangan:</label>
                                                <textarea class="form-control py-4" id="keterangan" name="keterangan" type="text" placeholder="Diisi dengan uraian singkat tentang kegiatan video conference"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="kebutuhan">Kebutuhan Vidcon:</label>
                                                <textarea class="form-control py-4" id="keterangan" name="keterangan" type="text" placeholder="Masukkan peralatan apa saja yang dibutuhkan untuk video conference"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="cp">Nama Contact Person/ Penanggung Jawab:</label>
                                                <input class="form-control py-4" id="cp" name="cp" type="text" placeholder="Diisi dengan nama CP/Penanggung Jawab Vidcon" />
                                            </div>
                                            <div class="form-group">
                                            <label class="small mb-1" for="filesurat">Unggah Surat Resmi (dalam bentuk gambar):</label>
                                                <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="filesurat" name="filesurat" />
                                                <label class="custom-file-label" for="customFile">Pilih surat</label>
                                                </div>
                                            </div>
                                            <!-- tombol -->
                                            <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block mb-3" href="<?= base_url('pengajuan/kirimpengajuan') ?>">Buat Pengajuan</a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?= $this->include('layout/footerloginregister') ?>
