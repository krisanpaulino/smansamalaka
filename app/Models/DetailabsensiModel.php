<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailabsensiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'detailabsensi';
    protected $primaryKey       = 'detailabsensi_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'siswa_id',
        'absensi_id',
        'detailabsensi_kehadiran'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'siswa_id' => 'required',
        'absensi_id' => 'required',
        'detailabsensi_kehadiran' => 'required'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getDetail($absensi_id, $kelas_id)
    {
        $this->where('detailabsensi.absensi_id', $absensi_id);
        $this->join('siswa', 'siswa.siswa_id = detailabsensi.siswa_id');
        $this->join('kelas', 'kelas.kelas_id = siswa.kelas_id');
        $this->where('siswa.kelas_id', $kelas_id);
        return $this->find();
    }
}
