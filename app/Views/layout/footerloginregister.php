<div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-5">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021 Dinas Kominfo Kabupaten Kediri</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- modal konfirmasi -->

        <div class="modal fade" id="modalkonfirmasi" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulmodalkonfirmasi">Konfirmasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah data yang anda masukkan sudah benar? Data yang terkirim tidak dapat diubah.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" form="formpengajuan">Kirim Pengajuan</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Fungsi menampilkan nama file di file input
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    </body>
</html>