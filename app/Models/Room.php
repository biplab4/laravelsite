<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type', 'description', 'charge', 'facility'
    ];

    protected $casts = [
        'deleted_at'
    ];

    public function setFacilityAttribute($value){
        $this->attributes['facility'] = json_encode($value);
    }

    public function getFacilityAttribute($value){
        return $this->attributes['facility'] = json_decode($value);
    }



    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
