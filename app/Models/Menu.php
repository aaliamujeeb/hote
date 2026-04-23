<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'category_id',
        'is_veg'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}