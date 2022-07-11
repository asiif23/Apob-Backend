<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    //In Media Model
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
