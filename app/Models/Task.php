<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title','category_id','is_done'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
