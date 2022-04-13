<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'mbarang';

    public $timestamps = false;

    protected $fillable = [
        "nama",
    ];
}
