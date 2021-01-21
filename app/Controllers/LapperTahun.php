<?php
namespace App\Controllers;

class LapperTahun extends BaseController{
    public function index(){
        $data['judul'] = 'Rekapitulasi Pengajuan Bantuan Vidcon per Tahun';
        if(!isset($_SESSION['logged_in'])){
        	return redirect()->to('/');
        }
        else{
        	return view('lappertahun',$data);
        }
    }
}
?>