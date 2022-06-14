<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PropertyRequest;
class PropertyController extends Controller
{
    public function home(){
        $properties = Property::latest()->take(5)->get();
        return view('frontend.index', ['properties' => $properties]);       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(empty($_GET['agreement'])){
            return view('frontend.index');
        } else if($_GET['agreement'] == 'any'){
            $properties = Property::all();
        } else if($_GET['agreement'] == 'sale' || $_GET['agreement'] == 'rent') {
            $properties = Property::where('agreement', $_GET['agreement'])
            ->orderBy('created_at')
            ->get();
        }
        return view('frontend.properties', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('backend.create_property', ['cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        $property = new Property;
        $property->title = $request->title;
        $property->type = $request->type;
        $property->agreement = $request->agreement;
        $property->price = $request->price;
        $property->payment_duration = $request->payment_duration;
        $property->location = $request->location;
        $property->area = $request->area;
        $property->rooms = $request->rooms;
        $property->status = $request->status;
        $property->save();
        return redirect()->back()->with('message', 'Property has been added succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
