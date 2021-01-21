<?php
namespace App\Controllers;
use App\Models\Pengajuan_Model;

class VidconDitolak extends BaseController{
	protected $pengajuan_model;
	public function __construct(){
		$this->pengajuan_model= new Pengajuan_Model();
	}

    public function index(){
        $data['judul']='Daftar Pengajuan Bantuan Vidcon Ditolak';
        if(!isset($_SESSION['logged_in'])){
          return redirect()->to('/');
        }
        else{
          return view('vidconditolak',$data);
        }
    }

    public function tabelpengditolak(){
    $daftar = $this->pengajuan_model->where('status_vidcon','rejected')->orderBy('updated_at','asc')->findAll();

    $no = 1;
    foreach($daftar as $index => &$key){
      $key['no'] = $index + $no;
      $key['tglvidcon'] = date("d-m-Y", strtotime($key['tglvidcon']));
    }
    $output = array(
      "draw" => $_GET['draw'],
      "data" => $daftar
    );
    echo json_encode($output);
    }
}
?>