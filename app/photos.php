<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_id',
        'image'
    ];
}
