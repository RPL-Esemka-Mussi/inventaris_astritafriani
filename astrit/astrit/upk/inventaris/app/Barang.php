<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';

    protected $fillable = [
        'nama_barang', 'satuan', 'jumlah', 'keterangan', 'lokasi'
    ];
}
