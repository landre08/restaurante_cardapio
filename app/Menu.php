<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'price'
    ];

    public function Restaurant()
    {
        return $this->belongsTo(Restaurant::class);

        // return $this->belongsTo(Restaurant::class, restaurant_id, id, Restaurante::class);
    }
}
