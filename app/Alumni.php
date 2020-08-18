<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
    protected $fillable = [
        'user_id',
        'nama',
        'jurusan',
        'alamat',
        'jenis_kelamin',
        'no_telepon',
        'gambar',
    ];
    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
}
