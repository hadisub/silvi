<?php 
namespace App\Controllers;

class Pengajuan extends BaseController{
    public function index(){
        $data['judul'] = 'Form Pengajuan Bantuan Video Conference';
        return view('pengajuan', $data);
    }
}
?>