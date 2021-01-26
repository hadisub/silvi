<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;

class VidconDipending extends BaseController{
  protected $pengajuan_model;
	public function __construct(){
		$this->pengajuan_model = new Pengajuan_Model();
	}

    public function index(){

    //cari halaman berapa di pagination
    $halaman_sekarang = $this->request->getVar('page_tblpengajuandipending') ? $this->request->getVar('page_tblpengajuandipending') : 1;
    //ambil kata kunci dari pencarian
    $katakunci = $this->request->getVar('katakunci');
    if($katakunci){
      $vidcon_dipending = $this->pengajuan_model->caritabel($katakunci)->where('status_vidcon','pending')->orderBy('tglvidcon','asc');
    } else{
      $vidcon_dipending = $this->pengajuan_model->where('status_vidcon','pending')->orderBy('tglvidcon','asc');
    }

    $data = [
      'judul'           =>  'Daftar Pengajuan Bantuan Vidcon Dipending',
    //kirim data tabel pengajuan dipending
      'vidcon_dipending'  =>   $vidcon_dipending->paginate(10,'tblpengajuandpending'),
      'pager'           =>   $vidcon_dipending->pager,
      'halaman_sekarang'     => $halaman_sekarang

    ];
    //dd($this->db->getLastQuery());

        if(!isset($_SESSION['logged_in'])){
          return redirect()->to('/');
        }
        else{
          return view('vidcondipending',$data);
        }
    }
}
?>