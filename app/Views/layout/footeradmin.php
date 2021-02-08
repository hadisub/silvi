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
        <h4 class="col-12 modal-title text-center" id="judulmodalabout">Tentang SILVI
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></h4>
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="col-12 modal-title text-center">Detail Pengajuan
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></h4>
        </button>
      </div>
      <div class="modal-body">
          <table class="table table-borderless mt-3">
          <tr>
            <td class="font-weight-bold" width="25%">Nomor Surat</td>
            <td>:</td>
            <td  id="nomordetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Nama Lembaga</td>
            <td>:</td>
            <td  id="lembagadetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Perihal</td>
            <td>:</td>
            <td  id="perihaldetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Tanggal Vidcon</td>
            <td>:</td>
            <td  id="tanggaldetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Tempat</td>
            <td>:</td>
            <td  id="tempatdetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Jumlah Peserta</td>
            <td>:</td>
            <td  id="jumlahdetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Keterangan</td>
            <td>:</td>
            <td  id="keterangandetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Kebutuhan Vidcon</td>
            <td>:</td>
            <td  id="kebutuhandetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Nama CP</td>
            <td>:</td>
            <td  id="cpdetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">No. HP CP</td>
            <td>:</td>
            <td  id="hpcpdetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Waktu Diajukan</td>
            <td>:</td>
            <td  id="createddetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Waktu Status Terakhir Diubah</td>
            <td>:</td>
            <td  id="updateddetail"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Surat</td>
            <td>:</td>
            <td  id="suratdetail"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal approve pengajuan -->
<div class="modal fade" id="modalapprovepengajuan" name="modalapprovepengajuan" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" style="max-width: 35%;" role="document">
    <form role="form" action="#" method="post">
       <?= csrf_field() ?>
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="col-12 modal-title text-center">Setujui pengajuan ini?
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></h4>
        </button>
      </div>
      <div class="modal-body">
        Anda akan menyetujui pengajuan vidcon berikut ini:
        <table class="table table-borderless mt-3">
          <tr>
            <td class="font-weight-bold">Lembaga</td>
            <td>:</td>
            <td  id="lembagadiapprove"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Perihal</td>
            <td>:</td>
            <td id="perihaldiapprove"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Tanggal</td>
            <td>:</td>
            <td id="tanggaldiapprove"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Setujui</button>
      </div>
    </div>
  </form>
  </div>
</div>

<!-- Modal pending pengajuan -->
<div class="modal fade" id="modalpendingpengajuan" name="modalpendingpengajuan" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" style="max-width: 35%;" role="document">
    <form role="form" action="#" method="post">
       <?= csrf_field() ?>
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="col-12 modal-title text-center">Pending pengajuan ini?
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></h4>
        </button>
      </div>
      <div class="modal-body">
        Anda akan menunda pengajuan vidcon berikut ini:
        <table class="table table-borderless mt-3">
          <tr>
            <td class="font-weight-bold">Lembaga</td>
            <td>:</td>
            <td  id="lembagadipending"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Perihal</td>
            <td>:</td>
            <td id="perihaldipending"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Tanggal</td>
            <td>:</td>
            <td id="tanggaldipending"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-warning">Pending</button>
      </div>
    </div>
  </form>
  </div>
</div>

<!-- Modal tolak pengajuan -->
<div class="modal fade" id="modaltolakpengajuan" name="modaltolakpengajuan" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" style="max-width: 35%;" role="document">
    <form role="form" action="#" method="post">
       <?= csrf_field() ?>
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="col-12 modal-title text-center">Tolak pengajuan ini?
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></h4>
        </button>
      </div>
      <div class="modal-body">
        Anda akan menolak pengajuan vidcon berikut ini:
        <table class="table table-borderless mt-3">
          <tr>
            <td class="font-weight-bold">Lembaga</td>
            <td>:</td>
            <td  id="lembagaditolak"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Perihal</td>
            <td>:</td>
            <td id="perihalditolak"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Tanggal</td>
            <td>:</td>
            <td id="tanggalditolak"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Tolak</button>
      </div>
    </div>
  </form>
  </div>
</div>

<!-- Modal hapus pengajuan -->
<div class="modal fade" id="modalhapuspengajuan" name="modalhapuspengajuan" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" style="max-width: 35%;" role="document">
    <form role="form" action="#" method="post">
       <?= csrf_field() ?>
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="col-12 modal-title text-center">Hapus pengajuan ini?
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></h4>
        </button>
      </div>
      <div class="modal-body">
        Anda akan menghapus pengajuan vidcon berikut:
        <table class="table table-borderless mt-3">
          <tr>
            <td class="font-weight-bold">Lembaga</td>
            <td>:</td>
            <td  id="lembagadihapus"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Perihal</td>
            <td>:</td>
            <td id="perihaldihapus"></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Tanggal</td>
            <td>:</td>
            <td id="tanggaldihapus"></td>
          </tr>
        </table>
        <p class="text-center mt-4">**PERINGATAN**<br>Pengajuan yang telah dihapus tidak dapat dikembalikan lagi.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </form>
  </div>
</div>



        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/calendar.js"></script>
        <script src="../assets/js/sidebar.js"></script>
        <script src="../assets/js/pengajuan.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script>
          //aktivasi tooltip
          $(document).ready(function(){
          $('[data-tooltip="tooltip"]').tooltip();
          });
        </script>
    </body>
</html>
