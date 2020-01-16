<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $keyType = 'integer';
    protected $fillable = [
        'id',
        'address',
        'phone',
    ];

    protected $casts = [
        'id' => 'integer',
    ];


    protected static function boot() {
        parent::boot();

        static::creating(function ($query) {
            $query->id = Location::max('id')?Location::max('id') + 1:1;
        });
    }

}
