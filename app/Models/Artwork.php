<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'category_id', 'location'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
