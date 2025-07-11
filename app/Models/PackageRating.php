<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(TravelinkPackage::class, 'package_id');
    }
}
