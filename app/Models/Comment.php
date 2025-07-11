<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['travelink_package_id', 'user_id', 'content', 'rating'];

    public function travelinkPackage()
    {
        return $this->belongsTo(TravelinkPackage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
