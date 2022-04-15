<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'imageable_id',
        'imageable_type',
        'path',
        'created_by'
    ];

    protected $casts =[
        'deleted_at' => 'datetime'
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
