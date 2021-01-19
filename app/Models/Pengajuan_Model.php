<?php
namespace App\Models;
use CodeIgniter\Model;

class Pengajuan_Model extends Model{
    protected $table = 'vidcon';
    protected $primaryKey = 'id_vidcon';
    protected $useTimestamps = true;
    protected $allowedFields = ['nomorsurat','namalembaga','perihal','tglvidcon','tempat','jmlpeserta',
    'keterangan','kebutuhan','namacp','nomorcp','filesurat','status_vidcon'];

    public function lihatpengajuan(){
        
    }
}

?>