<?php

namespace App\Http\Controllers;
use App\Review;
use App\Car;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //function for showing all the reviews
    public function index(){
        $review = Review::all();

        return response()->json([
            'success' => true,
            'message' => 'Request successful',
            'review' => $review
        ]);
    }

    //method fo creating a new review for a particular car model
    public function create(Request $request){
        $review = Review::create([
            'car_id' => $request->car_id,
            'review_text' => $request->review_text
        ]);
    
        $review->save();
    
        return response()->json([
            'message' => 'Creation of the review successful',
            'review' => $review
        ]);

        }

        public function review(Request $request){

             $review= Review::all()->where('car_id',$request->car_id);
            
             return response()->json([
                 'success' =>true,
                 'message' => 'Request Successful',
                 'review' => $review
             ]);

             
     
    

}
}