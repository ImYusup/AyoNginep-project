<?php

namespace App\TableData;

use Illuminate\Database\Eloquent\Model;
use Cerbero\QueryFilters\FiltersRecords;

class Rooms extends Model
{
    use FiltersRecords;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'rooms';
    protected $fillable = [
        'name',
        'district',
        'city',
        'coordinate',
        'address_detail',
        'category_id',
        'rent',
        'desc',
        'user_id',
        'house_rules',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo('App\TableData\User', 'user_id');
    }

    public function favorites()
    {
        return $this->hasMany('App\TableData\Favorites', 'room_id');
    }

    public function categories()
    {
        return $this->belongsTo('App\TableData\Categories', 'category_id');
    }

    public function photos()
    {
        return $this->hasMany('App\TableData\Photos', 'room_id');
    }

    public function order_details()
    {
        return $this->hasMany('App\TableData\Order_details', 'room_id');
    }

    public function room_capacities()
    {
        return $this->hasOne('App\TableData\Room_capacities', 'room_id');
    }

    public function amenities()
    {
        return $this->hasMany('App\TableData\Amenities', 'room_id');
    }
}