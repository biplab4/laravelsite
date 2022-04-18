<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'type','description', 'charge'
    ];

protected $casts =[
    'deleted_at'
];
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
