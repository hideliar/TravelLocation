<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'categories';
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
            $query->id = Category::max('id')?Category::max('id') + 1:1;
        });
    }
}
