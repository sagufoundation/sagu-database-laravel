<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory,SoftDeletes;
    public $guarded = [];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id','id');
    }
    public function category()
    {
        return $this->belongsTo(Catagories::class, 'catagory_id','id');
    }
    public function loan()
    {
        return $this->hasMany(LoanBook::class, 'book_id');
    }
}
