<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;


class VidconDisetujui extends BaseController{

	protected $pengajuan_model;
  public function __construct(){
      $this->pengajuan_model = new Pengajuan_Model();
    }

    public function index(){
      //cari halaman berapa di pagination
      $halaman_sekarang = $this->request->getVar('page_tblpengajuandisetujui') ? $this->request->getVar('page_tblpengajuandisetujui') : 1;
      //ambil kata kunci dari pencarian
      $katakunci = $this->request->getVar('katakunci');
      if($katakunci){
        $vidcon_disetujui = $this->pengajuan_model->caritabel($katakunci);
      } else{
        $vidcon_disetujui = $this->pengajuan_model;
      }

      $data = [
        'judul'           =>  'Daftar Pengajuan Bantuan Vidcon Disetujui',
      //kirim data tabel pengajuan ditolak
        'vidcon_disetujui'  =>   $vidcon_disetujui->where('status_vidcon','approved')->orderBy('updated_at','asc')->paginate(10,'tblpengajuandisetujui'),
        'pager'           =>   $vidcon_disetujui->where('status_vidcon','approved')->orderBy('updated_at','asc')->pager,
        'halaman_sekarang'     => $halaman_sekarang

      ];
      if(!isset($_SESSION['logged_in'])){
        return redirect()->to('/');
      }
      else{
        return view('vidcondisetujui',$data);
      }
    }

    public function tabelpengdisetujui(){
    }
}
?>