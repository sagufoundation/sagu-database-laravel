<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    // public function program(){
    //     return $this->hasMany(Program::class,'id');
    // }
    public function program()
    {
        return $this->belongsToMany(Program::class, 'siswa_program');
    }

    public function provinces(){
        return $this->belongsTo(Province::class,'province_id', 'id');
    }
}
