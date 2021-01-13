<?php
namespace App\Controllers;

class LapperTahun extends BaseController{
    public function index(){
        $data['judul'] = 'Rekapitulasi Pengajuan Bantuan Vidcon per Tahun';
        return view('lapperbulan',$data);
    }
}
?>