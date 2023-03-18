<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use App\Models\Category;

use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::with('category')->get();
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
                'category' => isset($trip->category) ? $trip->category->name : "",


            ];
        }


        return view('admin.tripsTable.show',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();

        return view('admin.tripsTable.create',['category'=>$category]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photoName = $request->file('trip_image')->getClientOriginalName();
        $request->file('trip_image')->storeAs('public/image', $photoName);

        Trip::create([

            'name' => $request->trip_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'guest_number' => $request->guest_number,
            'price' => $request->trip_price,
            'category_id' => $request->select,
            'image' => $photoName,

        ]);

        return redirect()->route('admin.trips.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Trip::findOrfail($id);
        $category=Category::all();

        return view('admin.tripsTable.edit', ['data' => $data,'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photoName = $request->file('trip_image')->getClientOriginalName();
        $request->file('trip_image')->storeAs('public/image', $photoName);


        $data = Trip::findOrfail($id);
        $data->name = $request->trip_name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->guest_number = $request->guest_number;
        $data->price = $request->trip_price;
        $data->category_id = $request->select;
        $data->image = $photoName;
        $data->save();
        //-------------------------------

        return redirect()->route('admin.trips.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trip::findOrfail($id)->delete();
        return redirect()->route('admin.trips.index');
    }
}
