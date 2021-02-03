<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;
use Dompdf\Dompdf;

class Laporan extends BaseController{
	protected $pengajuan_model;
  protected $data;

	public function __construct(){
		$this->pengajuan_model = new Pengajuan_Model();
    $this->data = [
    'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
    //kirim data tabel laporan
    'laporan'           =>  [],
    'pager'             =>   null,
    'halaman_sekarang'  =>  1];
	}
  public function index(){
    $halaman_sekarang = 1;
    if(!isset($_SESSION['logged_in'])){
      return redirect()->to('/');
    }
    else{
      return view('laporan',$this->data);
    }
  }

    public function cari_laporan(){
      //cari halaman berapa di pagination
      $halaman_sekarang = $this->request->getVar('page_tbllaporan') ? $this->request->getVar('page_tbllaporan') : 1;
      //ambil tanggal awal
      $tanggalawal = $this->request->getVar('tanggalawal');
      //ambil tanggal akhir
      $tanggalakhir = $this->request->getVar('tanggalakhir');
      //cek jika tanggal terisi
      if(!empty($tanggalawal) && !empty($tanggalakhir)){
        $laporan = $this->pengajuan_model->cari_laporan($tanggalawal,$tanggalakhir);

          $this->data = [
          'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
          //kirim data tabel laporan
          'laporan'           =>  $laporan->paginate(10,'tbllaporan'),
          'pager'             =>  $laporan->pager,
          'halaman_sekarang'  =>  $halaman_sekarang
          ];
          session()->remove('kosong');
      }
        return view('laporan',$this->data);
    }

    public function ekspor_excel(){

    }
    public function ekspor_pdf(){
      //ambil tanggal awal
      $tanggalawal = '2021-01-01';
      //ambil tanggal akhir
      $tanggalakhir = '2021-01-20';
      //cek jika tanggal terisi
      if(!empty($tanggalawal) && !empty($tanggalakhir)){
        $laporan = $this->pengajuan_model->cari_laporan($tanggalawal,$tanggalakhir);
          $this->data = [
          'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
          //kirim data tabel laporan
          'laporan'           =>  $laporan,
          'pager'             =>  null,
          'halaman_sekarang'  =>  1
          ];
      }

      $tabellaporan= view('tabellaporan');
      $dompdf = new Dompdf();
      $dompdf->loadHtml($tabellaporan,$this->data);

      // (Optional) Setup the paper size and orientation
      $dompdf->setPaper('A4', 'landscape');

      // Render the HTML as PDF
      $dompdf->render();

      // Output the generated PDF to Browser
      $dompdf->stream();
    }

}
?>