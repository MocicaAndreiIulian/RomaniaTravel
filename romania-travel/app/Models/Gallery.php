<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;


    protected $fillable = [
        'locationId',
        'image',
    ];

    public function setFilenamesAttribute($value)
     {
         $this->attributes['filenames'] = json_encode($value);
     }

}
