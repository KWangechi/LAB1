<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index(){
        return view('newcarForm');
    }

    
    //function for getting a new car
public function newCar(Request $request){


    $this->validate($request, [
        'make' => 'required',
        'model' => 'required|unique:cars',
        'produced_at' => 'required',
        'image' => 'required'
        
    ]);


    $car = Car::create([
        'make' => $request->make,
        'model' => $request->model,
        'produced_at' => $request->produced_at,
        'image' => $request->file('image')->store('public/images')
    ]);

    $car->save();

    request()->session()->flash("form_submit", "The data was successfully saved");
    return ("Car successfully added");

}

//function for showing a specific car
public function particularCar($id){
$car = Car::find($id);

return view('particularCar', ['cars' => $car]);
}

//fuction for viewing all the cars
public function allCars(){
$car = Car::all();

return view('car', ['cars' => $car]);
}



}
