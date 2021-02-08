<?php
namespace App\Controllers;

use App\Models\User_Model;

Class User extends BaseController{
    protected $model_user;

    public function __construct(){
        $this->model_user = new User_Model();
    }

    public function index(){
        $data['judul'] ='Login SILVI';
        if(isset($_SESSION['logged_in'])){
        return redirect()->to('beranda');
        }
        return view('login', $data);
    }

    public function login(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $auth = $this->model_user->login($username,$password);
        if(!empty($auth)){
            session()->set('id',$auth['iduser']);
            session()->set('nama',$auth['nama']);
            session()->set('logged_in',TRUE);
            return redirect()->to('/beranda');
        } else{
            session()->setFlashData('gagal', 'Nama/Password anda salah');
            return redirect()->to('/');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }

    public function pengaturan(){
        $id = session()->get('id');
        $data = [
            'judul'             => 'Ubah Data Akun',
            'validation'        => \Config\Services::validation(),
            'akun'              => $this->model_user->ambil_user($id),
        ];
        return view('pengaturan', $data);
    }

    public function edit_info(){
        //validasi
        if(!$this->validate([
           'username' => [
                'rules' => 'required|alpha_dash|max_length[255]',
                'errors' => ['required'=> 'Username harus diisi',
                             'alpha_dash'=> 'Username harus berisi alfanumerik, dash atau underscore',
                             'max_length'=> "Username tidak boleh melebihi 255 karakter"]   
           ],
           'nama' => [
            'rules' => 'required|max_length[255]',
            'errors' => ['required'=> 'Nama harus diisi',
                        'max_length'=>'Nama tidak boleh melebihi 255 karakter']   
           ],
           'passwordbaru' => [
            'rules' => 'required|max_length[255]',
            'errors' => ['required'=> 'Password baru harus diisi',
                        'max_length'=>'Password tidak boleh melebihi 255 karakter']   
           ],
           'konfirmasipassword' => [
            'rules' => 'required|matches[passwordbaru]|max_length[255]',
            'errors' => ['required'=> 'Konfirmasi password harus diisi',
                        'matches'=> 'Data yang dimasukkan harus sama dengan password baru',
                        'max_length'=>'Password tidak boleh melebihi 255 karakter']   
           ]
       ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/user/pengaturan')->with('validation', $validation);
        }
        else{
             $id = $this->request->getVar('id');
            $datauser = ['username' => $this->request->getVar('username'),
                     'nama' => $this->request->getVar('nama'),
                     'password' => md5(($this->request->getVar('passwordbaru')))];
            $edit = $this->model_user->update($id, $datauser);
            if($edit){
                session()->set('nama',$datauser['nama']);
                session()->setFlashData('sukses', 'Data akun anda berhasil diubah');
            }
            else{
               session()->setFlashData('gagal', 'Data akun anda gagal diubah. Silahkan coba kembali'); 
            }
            return redirect()->to('/user/pengaturan');   
        }
    }
}
?>
