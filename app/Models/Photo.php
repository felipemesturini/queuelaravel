<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'alt', 'image',
    ];

    public function getImageAttribute($value) {
        return "data:image/jpeg;base64,$value";
    }
}
