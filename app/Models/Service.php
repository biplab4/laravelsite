<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'type', 'description',
    ];
    protected $casts = [
        'deleted_at'
    ];

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
