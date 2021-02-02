<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;
use Dompdf\Dompdf;

class Laporan extends BaseController{
	protected $pengajuan_model;
	public function __construct(){
		$this->pengajuan_model = new Pengajuan_Model();
	}
  public function index(){
    $halaman_sekarang = 1;
    $data = [
    'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
    //kirim data tabel laporan
    'laporan'           =>  [],
    'pager'             =>   null,
    'halaman_sekarang'  =>  $halaman_sekarang
      ];
    if(!isset($_SESSION['logged_in'])){
      return redirect()->to('/');
    }
    else{
      return view('laporan',$data);
    }
  }

    public function cari_laporan(){
      //cari halaman berapa di pagination
      $halaman_sekarang = $this->request->getVar('page_tbllaporan') ? $this->request->getVar('page_tbllaporan') : 1;
      //ambil tanggal awal
      $tanggalawal = $this->request->getVar('tanggalawal');
      //ambil tanggal akhir
      $tanggalakhir = $this->request->getVar('tanggalakhir');
      $data = [
      'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
      //kirim data tabel laporan
      'laporan'           =>  [],
      'pager'             =>  null,
      'halaman_sekarang'  =>  $halaman_sekarang
      ];
      //cek jika tanggal terisi
      if(!empty($tanggalawal) && !empty($tanggalakhir)){
        $laporan = $this->pengajuan_model->where('DATE(created_at) >=', $tanggalawal)
        ->where('DATE(created_at) <=', $tanggalakhir)->orderBy('created_at','asc');

          $data = [
          'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
          //kirim data tabel laporan
          'laporan'           =>  $laporan->paginate(10,'tbllaporan'),
          'pager'             =>  $laporan->pager,
          'halaman_sekarang'  =>  $halaman_sekarang
          ];
          session()->remove('kosong');
      }
        return view('laporan',$data);
    }

    public function ekspor_excel(){

    }
    public function ekspor_pdf(){
      $dompdf = new Dompdf();
      $dompdf->loadHtml('Hello World');

      // (Optional) Setup the paper size and orientation
      $dompdf->setPaper('A4', 'landscape');

      // Render the HTML as PDF
      $dompdf->render();

      // Output the generated PDF to Browser
      $dompdf->stream();
    }

}
?>