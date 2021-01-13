<?php
namespace App\Controllers;

class VidconDitolak extends BaseController{
    public function index(){
        $data['judul']='Daftar Pengajuan Bantuan Vidcon Ditolak';
        return view('vidconditolak',$data);
    }
}
?>