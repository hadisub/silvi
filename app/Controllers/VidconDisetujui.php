<?php
namespace App\Controllers;

class VidconDisetujui extends BaseController{
    public function index(){
        $data['judul']='Daftar Pengajuan Bantuan Vidcon Disetujui';
        return view('vidcondisetujui',$data);
    }
}
?>