<?php
namespace App\Models;
use Codeigniter\Model;

class Pengajuan_Model extends Model{
    protected $table = 'vidcon';
    protected $primaryKey = 'id_vidcon';
    protected $useTimestamps = true;
    protected $allowedFields = ['nomorsurat','namalembaga','perihal','tgl_vidcon','tempat','jmlpeserta',
    'keterangan','kebutuhan','namacp','nomorcp','filesurat'];

    public function simpanpengajuan(){
        
    }
}

?>