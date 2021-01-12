<?php

namespace App\Controllers;

class Beranda extends BaseController{
    public function index(){
        $data['judul'] = 'Beranda';
        return view('beranda',$data);
    }
}

?>