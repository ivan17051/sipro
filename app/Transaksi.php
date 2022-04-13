<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    public $timestamps = false;

    protected $casts = [
        'foto' => 'date:Y-m-d',
        'perkiraanselesai' => 'date:Y-m-d',
   ];

    protected $fillable = [
        'idpegawai',
        'tanggal',
        'lokasi',
        'itempekerjaan',
        'perkiraanselesai',
        'foto',
        'progres',
        'parent',
        'isactive',
        'idc',
        'idm',
    ];

    protected $hidden = [
        'doc', 'dom'
    ];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class, 'idpegawai');
    }

    public function children(){
        return $this->hasMany(Transaksi::class, 'parent', 'id');
    }
}
