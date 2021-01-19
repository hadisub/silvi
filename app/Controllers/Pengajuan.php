<?php 
namespace App\Controllers;
use App\Models\Pengajuan_Model;

class Pengajuan extends BaseController{

    protected $pengajuan_model;
    public function __construct(){
        $this->pengajuan_model = new Pengajuan_Model();
    }

    public function index(){
        $data = [
            'judul'         => 'Form Pengajuan Bantuan Video Conference',
            'validation'    => \Config\Services::validation()
            ];
        return view('pengajuan', $data);
    }

    public function kirimpengajuan(){
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
            'rules' => 'required|max_length[255]|numeric|regex_match[^0]',
            'errors' => ['required'=> 'Nomor HP contact person harus diisi',
                        'max_length'=>'Nomor HP melebihi batas 12 karakter',
                        'numeric'=>'Nomor HP harus berupa angka',
                        'regex_match'=>'Nomor HP tidak valid']   
           ],
           'filesurat' => [
            'rules' => 'uploaded[filesurat]|max_size[filesurat,2048]|is_image[filesurat]|mime_in[filesurat,image/jpg,image/jpeg,image/png]',
            'errors' => ['uploaded'=> 'File surat harus diunggah',
                        'max_size'=>'File melebihi batas maksimum unggah (2 Mb)',
                        'is_image'=>'File surat harus berupa gambar',
                        'mime_in'=>'File surat harus berupa gambar']   
           ]
       ])){
            return redirect()->to('/pengajuan')->withInput();
       }
       else{

        //ambil file surat
        $file_surat = $this->request->getFile('filesurat');
        //bikin nama file surat random
        $namasurat = $file_surat->getRandomName();
        $file_surat->move('assets/img', $namasurat);

       //jika sudah tervalidasi semua maka simpan
       $this->pengajuan_model->save([
           'nomorsurat'     => $this->request->getVar('nomorsurat'),
           'namalembaga'    => $this->request->getVar('namalembaga'),
           'perihal'        => $this->request->getVar('perihal'),
           'tglvidcon'      => $this->request->getVar('tglvidcon'),
           'tempat'         => $this->request->getVar('tempat'),
           'jmlpeserta'     => $this->request->getVar('jmlpeserta'),
           'keterangan'     => $this->request->getVar('keterangan'),
           'kebutuhan'      => $this->request->getVar('kebutuhan'),
           'namacp'         => $this->request->getVar('namacp'),
           'nomorcp'        => $this->request->getVar('nomorcp'),
           'filesurat'      => $namasurat,
           'status_vidcon'  => 'new'
       ]);     
       return redirect()->to('pengajuanterkirim');
       } 
    }

    public function pengajuanterkirim(){
        return view('notification/pengajuanterkirim');
    }
}
?>