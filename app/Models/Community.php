<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Community extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'goals',
        'category',
        'description',
        'location',
        'profile_photo',
        'cover_photo',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'community_user');
    }
}
