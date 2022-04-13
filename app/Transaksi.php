<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaian';

    public $timestamps = false;

    protected $casts = [
        'awal' => 'date:Y-m-d',
        'akhir' => 'date:Y-m-d',
   ];

    protected $fillable = [
        "old",
        "sejak",
        "hingga",
        "awal",
        "akhir",
        "masakerja",
        "idpegawai",
        "idjabatan",
        "idgolongan",
        "idpendidikan",
        "idunitkerja",
        "utama",
        "utama_new",
        "pendformal",
        "pendformal_new",
        "diklat",
        "diklat_new",
        "sttpl",
        "sttpl_new",
        "yankes",
        "yankes_new",
        "profesi",
        "profesi_new",
        "pengmas",
        "pengmas_new",
        "penyankes",
        "penyankes_new",
        "pak",
        "idc",
        "idm",
    ];

    protected $hidden = [
        'doc', 'dom'
    ];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'idpegawai');
    }
    public function jabatan(){
        return $this->belongsTo(Jabatan::class, 'idjabatan');
    }
    public function golongan(){
        return $this->belongsTo(Golongan::class, 'idgolongan');
    }
    public function pendidikan(){
        return $this->belongsTo(Pendidikan::class, 'idpendidikan');
    }
    public function unitKerja(){
        return $this->belongsTo(UnitKerja::class, 'idunitkerja')
            ->select('id', 'nama', 'nama_alias', 'alamat');
    }

    public function old(){
        return $this->belongsTo(Penilaian::class, 'old');
    }
}
