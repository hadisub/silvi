<?php
namespace App\Controllers;

use App\Models\User_Model;

Class User extends BaseController{
    public function index(){
        $data['judul'] ='Login SILVI';
        return view('login', $data);
    }

    public function login(){
        $model_user = new User_model();
        $nama = $this->request->getPost('nama');
        $password = $this->request->getPost('password');
        $auth = $model_user->login($nama,$password);
        if(!empty($auth)){
            session()->set('nama',$auth['nama']);
            session()->set('password',$auth['password']);
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

    // public function ceklogin(){
    //     if(!session()->get('logged_in')){
    //         return redirect()->to('/');
    //     }
    // }
}
?>
