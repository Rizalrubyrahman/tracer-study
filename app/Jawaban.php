<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $fillable = [
        'user_id',
        'jawaban1',
        'jawaban2',
        'jawaban3',
        'jawaban4',
        'jawaban5',
        'jawaban6',
        'jawaban7',
        'jawaban8',
        'jawaban9',
        'jawaban10'];
    protected $table = 'jawaban';
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
}
