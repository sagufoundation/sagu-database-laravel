<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudent extends Model
{
    use HasFactory;
    protected $table = 'student_program';


    public function students()
    {
        return $this->belongsToMany(Students::class, 'student_programs', 'program_id', 'students_id');
    }
}
