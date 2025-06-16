<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelinkPackage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['name', 'region', 'price', 'promo_price', 'hashtag', 'max_quota', 'images', 'category', 'expired_at'];

    protected $casts = [
        'images' => 'array',
        'expired_at' => 'date',
    ];

    // Define relationships for comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
