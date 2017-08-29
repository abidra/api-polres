<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tilang extends Model
{
    protected $fillable = [
        'no_tilang', 'nama', 'alamat', 'ttl', 'no_ktp', 'umur', 'pendidikan', 'pekerjaan', 'status', 'created_at', 'updated_at'
    ];
}
