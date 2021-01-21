<?php
namespace App\Controllers;

class LapperBulan extends BaseController{
    public function index(){
        $data['judul'] = 'Rekapitulasi Pengajuan Bantuan Vidcon per Bulan';
        if(!isset($_SESSION['logged_in'])){
        	return redirect()->to('/');
        }
        else{
        	return view('lapperbulan',$data);
        }
    }
}
?>