<?php

namespace App;

use App\Car;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    

    public $timestamps = true;
    public $table = "reviews";

    public $fillable = ['car_id', 'review_text'];

    
    //review belongs to a car
public function car(){
    return $this->belongsTo(Car::class);

}

}
