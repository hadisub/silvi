<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;

class Laporan extends BaseController{
	protected $pengajuan_model;
	public function __construct(){
		$this->pengajuan_model = new Pengajuan_Model();
	}
    public function index(){
	//cari halaman berapa di pagination
    $halaman_sekarang = $this->request->getVar('page_tbllaporan') ? $this->request->getVar('page_tbllaporan') : 1;
    //ambil tanggal awal
    $tanggalawal = $this->request->getVar('tanggalawal');
    //ambil tanggal akhir
    $tanggalakhir = $this->request->getVar('tanggalakhir');

    if(isset($tanggalawal) && ($tanggalakhir)){
      $laporan = $this->pengajuan_model->where('created_at >=', $tanggalawal)->where('created_at >=', $tanggalawal)->orderBy('created_at','asc');
      $data = [
        'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
        //kirim data tabel laporan
        'laporan'           =>   $laporan->paginate(10,'tbllaporan'),
        'pager'             =>   $laporan->pager,
        'halaman_sekarang'  => $halaman_sekarang

      ];
    }
    else{
      $data = [
      'judul'             =>  'Rekapitulasi Permintaan Bantuan Fasilitas Video Conference',
      //kirim data tabel laporan
      'laporan'           =>   [],
      'pager'             =>   null,
      'halaman_sekarang'  => $halaman_sekarang

    ];
    }

        if(!isset($_SESSION['logged_in'])){
        	return redirect()->to('/');
        }
        else{
        	return view('laporan',$data);
        }
    }
}
?>