<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'mpegawai';

    public $timestamps = false;

    protected $fillable = [
        "nik",
        "nip",
        "nama",
        "nokartu",
        "tempatlahir",
        "tanggallahir",
        "jeniskelamin",
        "alamat",
        "nohp",
        "status",
    ];

    public function penilaian(){
        return $this->hasOne(Penilaian::class, 'idpegawai')
            ->select('id', 'idjabatan', 'idpegawai', 'idgolongan', 'idpendidikan', 'idunitkerja', 'doc')
            ->latest('doc');
    }
    
}
