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
        $data = [
          'judul'           =>  'Daftar Pengajuan Bantuan Vidcon Ditolak',
        //kirim data tabel pengajuan ditolak
          'vidcon_ditolak'  =>   $this->pengajuan_model->where('status_vidcon','rejected')->orderBy('updated_at','asc')->paginate(10,'tblpengajuanditolak'),
          'pager'           =>   $this->pengajuan_model->where('status_vidcon','rejected')->orderBy('updated_at','asc')->pager,
          'halaman_sekarang'     => $halaman_sekarang

        ];

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