<?php

namespace App\Controllers;

class Beranda extends BaseController{
    public function index(){
        $data['judul'] = 'Beranda';
        if(!isset($_SESSION['logged_in'])){
        	return redirect()->to('/');
        }
        else{
        	return view('beranda',$data);
        }
    }
}

?>