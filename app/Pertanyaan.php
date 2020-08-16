<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = ['pertanyaan','jawaban_a','jawaban_b','jawaban_c','jawaban_d'];
    protected $table = 'pertanyaan';
}
