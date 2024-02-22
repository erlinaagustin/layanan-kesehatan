<?php namespace App\Models;

use CodeIgniter\Model;

class NakesModel extends Model
{
    protected $table      = 'nakes';
    protected $primaryKey = 'id_nakes';

    protected $allowedFields = ['nama','jabatan','spesialisasi','alamat','no_telepon'];

    protected $useTimestamps = false;

}
