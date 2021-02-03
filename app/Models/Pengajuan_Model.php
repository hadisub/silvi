<?php
namespace App\Models;
use CodeIgniter\Model;

class Pengajuan_Model extends Model{
    protected $table = 'vidcon';
    protected $primaryKey = 'id_vidcon';
    protected $useTimestamps = true;
    protected $allowedFields = ['nomorsurat','namalembaga','perihal','tglvidcon','tempat','jmlpeserta',
    'keterangan','kebutuhan','namacp','nomorcp','filesurat','status_vidcon'];

    public function caritabel($katakunci){
        return $this->table('vidcon')->
        groupStart()->
        like('namalembaga',$katakunci)
        ->orLike('perihal',$katakunci)->orLike('keterangan',$katakunci)->orLike('tempat',$katakunci)->
        groupEnd();
    }

    public function cari_laporan($tanggalawal,$tanggalakhir){
        $laporan = $this->table('vidcon')->where('DATE(created_at) >=', $tanggalawal)
        ->where('DATE(created_at) <=', $tanggalakhir)->orderBy('created_at','asc');
        return $laporan;
    }
}

?>