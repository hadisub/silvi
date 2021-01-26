        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2021 Dinas Kominfo Kabupaten Kediri</div>
                </div>
            </div>
        </footer>
    </div>
</div>


<!-- Modal about -->
<div class="modal fade" id="modalabout" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="judulmodalabout">Tentang SILVI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Sistem Informasi Laporan Video Conference atau disingkat SILVI adalah sistem informasi yang dikembangkan untuk memenuhi kebutuhan Dinas Kominfo Kabupaten Kediri untuk mengembangkan sistem yang dapat membantu pengelolaan pengajuan bantuan Video Conference.
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal detail pengajuan -->
<div class="modal fade" id="modaldetailpengajuan" name="modaldetailpengajuan" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Pengajuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal pending pengajuan -->
<div class="modal fade" id="modalpendingpengajuan" name="modalpendingpengajuan" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pending pengajuan ini?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin untuk mengganti status pengajuan vidcon berikut:
        Menjadi pending?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-warning">Pending</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal hapus pengajuan -->
<div class="modal fade" id="modalhapuspengajuan" name="modalhapuspengajuan" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus pengajuan ini?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin untuk menghapus pengajuan vidcon berikut:
        <p class="text-center mt-2">PERINGATAN: <br>Pengajuan yang telah dihapus tidak dapat dikembalikan lagi.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>



        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/sidebar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script>
          //aktivasi tooltip
          $(document).ready(function(){
          $('[data-tooltip="tooltip"]').tooltip();
          });
        </script>
    </body>
</html>
