<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Trip;

use Illuminate\Http\Request;

class TripsDetailsController extends Controller
{
    public function index($id)
    {
        // $employees = Employees::findOrFail($id);

        $trips = Trip::where('id',$id)->get();
        // dd($trips);

        $data = [];
        foreach ($trips as $trip) {
            $data[] = [
                'id' => $trip->id,
                'name' => $trip->name,
                'short_description' => $trip->short_description,
                'long_description' => $trip->long_description,
                'guest_number' => $trip->guest_number,
                'price' => $trip->price,
                'image' => $trip->image,
                'image2' => $trip->image2,
                'category' => isset($trip->category) ? $trip->category->name : "",


            ];
        }
        // return view('publicUser.details',compact('data'));
        return view('publicUser.details',['data'=>$data]);

    }
}
