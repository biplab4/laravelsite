<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'deleted_at'
    ];

    protected $fillable = [
        'description'
    ];

    public function images(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
