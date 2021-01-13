<?php
namespace App\Controllers;

class VidconDipending extends BaseController{
    public function index(){
        $data['judul']='Daftar Pengajuan Bantuan Vidcon Dipending';
        return view('vidcondipending',$data);
    }
}
?>