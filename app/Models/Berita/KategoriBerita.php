<?php

namespace App\Models\Berita;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriBerita extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'author',);
    }

    public function berita(){
        return $this->hasMany(Berita::class);
    }
}
