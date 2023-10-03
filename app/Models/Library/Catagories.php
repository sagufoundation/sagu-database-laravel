<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catagories extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function books()
    {
        return $this->hasMany(Book::class,'catagory_id','id');
    }
}
