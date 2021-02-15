<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;

class Kalender extends BaseController{
	protected $pengajuan_model;

    public function index(){
        $data=['judul'		=> 'Kalender Kegiatan Vidcon'
    		  ];
        if(!isset($_SESSION['logged_in'])){
        	return redirect()->to('/');
        }
        else{
        	return view('kalender',$data);
        }
    }

    public function eventkalender(){
    	$this->pengajuan_model = new Pengajuan_Model();
    	$query = $this->pengajuan_model->where('status_vidcon','approved')->orderBy('tglvidcon','asc')->findAll();
    	foreach($query as $row){
			$event[] = array(
			'id'   			=> $row["id_vidcon"],
			'title'   		=> $row["namalembaga"],
			'description'	=> $row["keterangan"],
			'start'   		=> $row["tglvidcon"],
			'end'   		=> $row["tglvidcon"],
			'allDay'		=> true
		 	);
		}
		echo json_encode ($event);
		exit();
	}
}
?> 