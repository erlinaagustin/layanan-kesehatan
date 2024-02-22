<?php namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'ID_riwayat';

    // protected $returnType = 'object';
    protected $allowedFields = ['ID_Pasien', 'riwayat_kesehatan', 'rekomendasi_gizi', 'created_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = ''; // Jika Anda memiliki kolom updated_at, isi nama kolomnya di sini

    // Method untuk mengambil data gizi dan kesehatan beserta nama pasien
    public function getRiwayatWithNamaPasien()
    {
        return $this->select('riwayat.*, pasien.Nama as NamaPasien')
                    ->join('pasien', 'pasien.ID_Pasien = riwayat.ID_Pasien', 'left')
                    ->findAll();
    }
}
