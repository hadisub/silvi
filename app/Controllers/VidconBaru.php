<?php
namespace App\Controllers;

class VidconBaru extends BaseController{
    public function index(){
        $data['judul']='Daftar Pengajuan Bantuan Vidcon Baru';
        return view('vidconbaru',$data);
    }
}
?>