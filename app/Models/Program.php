<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    // public function siswa(){
    //     return $this->hasMany(Siswa::class);
    // }

    public function student()
    {
        return $this->belongsToMany(Students::class, 'student_program');
    }
}
