<?php 
namespace App\Controllers;

class Pengajuan extends BaseController{
    public function index(){
        $data = [
            'judul'         => 'Form Pengajuan Banrtuan Video Conference',
            'validation'    => \Config\Services::validation()
            ];
        return view('pengajuan', $data);
    }

    public function tambahpengajuan(){
       //validasi
       if(!$this->validate([
           'nomorsurat' => [
                'rules' => 'required|max_length[45]',
                'errors' => ['required'=> 'Nomor surat harus diisi',
                            'max_length'=> "Nomor surat tidak boleh melebihi 45 karakter"]   
           ],
           'namalembaga' => [
            'rules' => 'required|alpha_numeric_space|max_length[255]',
            'errors' => ['required'=> 'Nama SKPD/Kecamatan harus diisi',
                        'alpha_numeric_space'=>'Nama lembaga tidak valid',
                        'max_length'=>'Nama SKPD/Kecamatan melebihi batas 255 karakter']   
           ],
           'perihal' => [
            'rules' => 'required|max_length[255]',
            'errors' => ['required'=> 'Perihal surat harus diisi',
                        'max_length'=>'Perihal surat melebihi batas 255 karakter']   
           ],
           'tglvidcon' => [
            'rules' => 'required',
            'errors' => ['required'=>'Tanggal vidcon harus diisi'] 
           ],
           'tempat' => [
            'rules' => 'required|max_length[255]',
            'errors' => ['required'=> 'Tempat vidcon harus diisi',
                        'max_length'=>'Tempat vidcon melebihi batas 255 karakter']   
           ],
           'jmlpeserta' => [
            'rules' => 'required|numeric|less_than[1000]',
            'errors' => ['required'=> 'Jumlah peserta harus diisi',
                        'numeric'=>'Jumlah peserta vidcon harus berupa angka',
                        'less_than'=>'Jumlah peserta vidcon tidak bisa melebihi 1000 orang']   
           ],
           'keterangan' => [
            'rules' => 'required|max_length[255]',
            'errors' => ['required'=> 'Keterangan vidcon harus diisi',
                        'max_length'=>'Keterangan vidcon melebihi batas 255 karakter']   
           ],
           'kebutuhan' => [
            'rules' => 'required|max_length[255]',
            'errors' => ['required'=> 'Kebutuhan vidcon harus diisi',
                        'max_length'=>'Kebutuhan vidcon melebihi batas 255 karakter']   
           ],
           'namacp' => [
            'rules' => 'required|max_length[255]',
            'errors' => ['required'=> 'Nama contact person harus diisi',
                        'max_length'=>'Nama contact person melebihi batas 255 karakter']   
           ],
           'nomorcp' => [
            'rules' => 'required|max_length[12]|numeric|regex_match[^0]',
            'errors' => ['required'=> 'Nomor HP contact person harus diisi',
                        'max_length'=>'Nomor HP melebihi batas 12 karakter',
                        'numeric'=>'Nomor HP harus berupa angka',
                        'regex_match'=>'Nomor HP tidak valid'],
            'nomorcp' => [
            'rules' => 'required|max_length[12]|numeric|regex_match[^0]',
            'errors' => ['required'=> 'Nomor HP contact person harus diisi',
                        'max_length'=>'Nomor HP melebihi batas 12 karakter',
                        'numeric'=>'Nomor HP harus berupa angka',
                        'regex_match'=>'Nomor HP tidak valid'],   
           ],
       ])){
           $validation= \Config\Services::validation();
            return redirect()->to('/pengajuan')->withInput()->with('validation',$validation);
       }
       else{
            return view('notification/pengajuanterkirim');
       } 
    }

    public function pengajuanterkirim(){
        return view('notification/pengajuanterkirim');
    }
}
?>