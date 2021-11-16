<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantPhotos extends Model
{
    protected $table = 'restaurant_photos';

    protected $fillable = [
        'photo'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
