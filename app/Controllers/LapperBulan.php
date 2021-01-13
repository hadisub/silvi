<?php
namespace App\Controllers;

class LapperBulan extends BaseController{
    public function index(){
        $data['judul'] = 'Rekapitulasi Pengajuan Bantuan Vidcon per Bulan';
        return view('lapperbulan',$data);
    }
}
?>