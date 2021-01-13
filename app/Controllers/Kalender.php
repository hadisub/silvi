<?php
namespace App\Controllers;

class Kalender extends BaseController{
    public function index(){
        $data['judul']='Kalender Kegiatan Vidcon';
        return view('kalender',$data);
    }
}
?> 