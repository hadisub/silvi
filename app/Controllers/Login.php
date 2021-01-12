<?php
namespace App\Controllers;

Class Login extends BaseController{
    public function index(){
        $data['judul'] ='Login SILVI';
        return view('login', $data);
    }
}
?>
