<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory, SoftDeletes;
    public $guarded = [];

    public function program()
    {
        return $this->belongsToMany(Program::class, 'student_program');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        // user_id = untuk forigens keynya
        // id = local id/primary key
    }

    public function provinsi()
    {
        return $this->belongsTo(Province::class,'province_id', 'id');
    }


    // public function loan_logs(){
    //     return $this->belongsToMany(Loan_logs::class,'loan_student');
    // }

    public function programs()
    {
        return $this->belongsToMany(ProgramStudent::class, 'student_program', 'students_id', 'program_id');
    }
}
