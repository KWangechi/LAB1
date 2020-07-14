<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;


class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = ['make', 'model', 'produced_at','image'];

    public function review(){
        return $this->hasMany(Review::class);
    }
}
