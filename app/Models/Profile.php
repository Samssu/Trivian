<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * Nama tabel dalam database
     */
    protected $table = 'profiles';

    /**
     * Kolom yang dapat diisi (mass assignable)
     */
    protected $fillable = [
        'user_id',
        'photo',
        'name',
        'job_title',
        'about',
        'location',
        'community',
        'website',
    ];

    /**
     * Relasi dengan model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
