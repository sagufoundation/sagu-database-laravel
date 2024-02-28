<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public $guarded = [];

    public function student(){
        return $this->hasMany(Students::class,'id');
    }

    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
