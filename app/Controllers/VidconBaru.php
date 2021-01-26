<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;

class VidconBaru extends BaseController{
	protected $pengajuan_model;
	public function __construct(){
		$this->pengajuan_model = new Pengajuan_Model();
	}
public function index(){

    //cari halaman berapa di pagination
    $halaman_sekarang = $this->request->getVar('page_tblpengajuanbaru') ? $this->request->getVar('page_tblpengajuanbaru') : 1;
    //ambil kata kunci dari pencarian
    $katakunci = $this->request->getVar('katakunci');
    if($katakunci){
      $vidcon_baru = $this->pengajuan_model->caritabel($katakunci)->where('status_vidcon','new')->orderBy('tglvidcon','asc');
    } else{
      $vidcon_baru = $this->pengajuan_model->where('status_vidcon','new')->orderBy('tglvidcon','asc');
    }

    $data = [
      'judul'           =>  'Daftar Pengajuan Bantuan Vidcon Baru',
    //kirim data tabel pengajuan baru
      'vidcon_baru'  =>   $vidcon_baru->paginate(10,'tblpengajuanbaru'),
      'pager'           =>   $vidcon_baru->pager,
      'halaman_sekarang'     => $halaman_sekarang

    ];
    //dd($this->db->getLastQuery());

        if(!isset($_SESSION['logged_in'])){
          return redirect()->to('/');
        }
        else{
          return view('vidconbaru',$data);
        }
    }
}
?>