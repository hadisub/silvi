<?php
namespace App\Controllers;

class Kalender extends BaseController{
    public function index(){
        $data['judul']='Kalender Kegiatan Vidcon';
        if(!isset($_SESSION['logged_in'])){
        	return redirect()->to('/');
        }
        else{
        	return view('kalender',$data);
        }
    }
}
?> 