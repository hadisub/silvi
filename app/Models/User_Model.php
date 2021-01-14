<?php
namespace App\Models;
use CodeIgniter\Model;

class User_Model extends Model{
    public function login($nama,$password){
        return $this->db->table('user')
        ->where(array('nama'=>$nama,'password'=>md5($password)))
        ->get()->getRowArray();
    }
}
?>