<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    protected $table = 'foods'; // ✅ FIX

    protected $fillable = ['name', 'description', 'price'];
}
