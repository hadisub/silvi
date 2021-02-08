<?php
namespace App\Models;
use CodeIgniter\Model;

class User_Model extends Model{
    protected $table = 'user';
    protected $primaryKey = 'iduser';
    protected $allowedFields = ['username','password','nama'];
    
    public function login($username,$password){
        return $this->db->table('user')
        ->where(array('username'=>$username,'password'=>md5($password)))
        ->get()->getRowArray();
    }

    public function ambil_user($id){
    	return $this->db->table('user')
        ->where(array('iduser'=>$id))
        ->get()->getRowArray();
    }
}
?>