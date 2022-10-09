<?php

namespace App\Models;
use App\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostPrescription extends Model
{
    use HasFactory;

    protected $fillable=[
        'note',
        'delivery_address',
        'delivery_time',
        'images',
        'user_name',
        'user_id',

    ];

//    public function images(){
//        return $this->hasMany(Image::class);
//    }

}
