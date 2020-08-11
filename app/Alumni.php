<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'alumni';
    protected $fillable = [
        'user_id',
        'nama',
        'jurusan',
        'alamat',
        'jenis_kelamin',
        'status',
        'no_telepon',
        'gambar',
    ];
}
