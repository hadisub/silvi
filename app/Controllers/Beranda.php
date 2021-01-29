<?php

namespace App\Controllers;
use App\Models\Pengajuan_Model;

class Beranda extends BaseController{
	protected $pengajuan_model;

	public function __construct(){
		$this->pengajuan_model = new Pengajuan_Model();
	}
    public function index(){
        $data = [
        	'judul'					=> 'Beranda',
        	'pengajuanbaru'			=> $this->pengajuan_model->where('status_vidcon','new')->countAllResults(),
        	'pengajuandisetujui'	=> $this->pengajuan_model->where('status_vidcon','approved')->countAllResults(),
        	'pengajuandipending'	=> $this->pengajuan_model->where('status_vidcon','pending')->countAllResults(),
        	'pengajuanditolak'		=> $this->pengajuan_model->where('status_vidcon','rejected')->countAllResults()
        ];

        if(!isset($_SESSION['logged_in'])){
        	return redirect()->to('/');
        }
        else{
        	return view('beranda',$data);
        }
    }
}

?>