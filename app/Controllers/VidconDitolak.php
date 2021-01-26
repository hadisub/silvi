<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;

class VidconDitolak extends BaseController{
	protected $pengajuan_model;
	public function __construct(){
		$this->pengajuan_model= new Pengajuan_Model();
	}

    public function index(){

    //cari halaman berapa di pagination
    $halaman_sekarang = $this->request->getVar('page_tblpengajuanditolak') ? $this->request->getVar('page_tblpengajuanditolak') : 1;
    //ambil kata kunci dari pencarian
    $katakunci = $this->request->getVar('katakunci');
    if($katakunci){
      $vidcon_ditolak = $this->pengajuan_model->caritabelditolak($katakunci)->where('status_vidcon','rejected');
    } else{
      $vidcon_ditolak = $this->pengajuan_model->where('status_vidcon','rejected')->orderBy('tglvidcon','asc');
    }

    $data = [
      'judul'           =>  'Daftar Pengajuan Bantuan Vidcon Ditolak',
    //kirim data tabel pengajuan ditolak
      'vidcon_ditolak'  =>   $vidcon_ditolak->paginate(10,'tblpengajuanditolak'),
      'pager'           =>   $vidcon_ditolak->orderBy('tglvidcon','asc')->pager,
      'halaman_sekarang'     => $halaman_sekarang

    ];
    //dd($this->db->getLastQuery());

        if(!isset($_SESSION['logged_in'])){
          return redirect()->to('/');
        }
        else{
          return view('vidconditolak',$data);
        }
    }

    public function tabelpengditolak(){
    }
}
?>