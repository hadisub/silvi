<?php
namespace App\Controllers;

class VidconDisetujui extends BaseController{
    public function index(){
        $data['judul']='Daftar Vidcon Disetujui';
        return view('vidcondisetujui',$data);
    }
}
?>