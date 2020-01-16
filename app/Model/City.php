<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'integer';
    protected $fillable = [
        'id',
    ];

    protected $casts = [
        'id' => 'integer',
    ];


    protected static function boot() {
        parent::boot();

        static::creating(function ($query) {
            $query->id = City::max('id')?City::max('id') + 1:1;
        });
    }

}
