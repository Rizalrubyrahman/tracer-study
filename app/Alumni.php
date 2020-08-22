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
    public function getGambar()
    {
        if(!$this->gambar){
            if($this->jenis_kelamin == 'Laki-Laki'){
                return asset('images/default-laki2.jpg');
            }else{
                return asset('images/default-perempuan.jpg');
            }
        }
        return asset('images/'.$this->gambar);
    }
}
