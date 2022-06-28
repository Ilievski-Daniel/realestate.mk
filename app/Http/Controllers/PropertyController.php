<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\User;
use App\Models\UserProperty;
use Intervention\Image\Facades\Image;

class PropertyController extends Controller
{
    public function home(){
        $counts = Property::all();
        $countsRent = 0;
        $countsSale = 0;
        foreach ($counts as $count) {
            if($count->agreement == 'Rent'){
                $countsRent++;
            } elseif($count->agreement == 'Sale'){
                $countsSale++;
            }
          }

        $properties = Property::latest()->take(5)->get();
        return view('frontend.index', ['properties' => $properties, 'countsSale' => $countsSale, 'countsRent' => $countsRent]);       
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
            $properties = Property::paginate(6);
        } else if($_GET['agreement'] == 'sale' || $_GET['agreement'] == 'rent') {
            $properties = Property::where('agreement' , $_GET['agreement'])->paginate(6);
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
        if($request->featured_image){
    		$featured_image = $request->file('featured_image');
    		$filename = 'featured' . '.' . time() . '.' . $featured_image->getClientOriginalExtension();
    		Image::make($featured_image)->save( public_path('/img/property_images/' . $filename ) );
    	} elseif(isset(auth()->user()->featured_image)){
            $filename = auth()->user()->featured_image;
        } else {
            $filename = null;
        }

        if($request->second_image){
    		$second_image = $request->file('second_image');
    		$secondImageFilename = 'second' . '.' . time() . '.' . $second_image->getClientOriginalExtension();
    		Image::make($second_image)->save( public_path('/img/property_images/' . $secondImageFilename ) );
    	} elseif(isset(auth()->user()->second_image)){
            $secondImageFilename = auth()->user()->second_image;
        } else {
            $secondImageFilename = null;
        }

        if($request->third_image){
    		$third_image = $request->file('third_image');
    		$thirdImageFilename = 'third' . '.' . time() . '.' . $third_image->getClientOriginalExtension();
    		Image::make($third_image)->save( public_path('/img/property_images/' . $thirdImageFilename ) );
    	} elseif(isset(auth()->user()->third_image)){
            $thirdImageFilename = auth()->user()->third_image;
        } else {
            $thirdImageFilename = null;
        }

        if($request->fourth_image){
    		$fourth_image = $request->file('fourth_image');
    		$fourthImageFilename = 'forth' . '.' . time() . '.' . $fourth_image->getClientOriginalExtension();
    		Image::make($fourth_image)->save( public_path('/img/property_images/' . $fourthImageFilename ) );
    	} elseif(isset(auth()->user()->fourth_image)){
            $fourthImageFilename = auth()->user()->fourth_image;
        } else {
            $fourthImageFilename = null;
        }

        $property = new Property;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->type = $request->type;
        $property->agreement = $request->agreement;
        $property->price = $request->price;
        $property->payment_duration = $request->payment_duration;
        $property->location = $request->location;
        $property->area = $request->area;
        $property->rooms = $request->rooms;
        $property->status = $request->status;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->floor = $request->floor;
        $property->parking = $request->parking;
        $property->balcony = $request->balcony;
        $property->air_conditioning = $request->air_conditioning;
        $property->alarm_system = $request->alarm_system;
        $property->elevator = $request->elevator;
        $property->garden = $request->garden;
        $property->barbeque = $request->barbeque;
        $property->furniture = $request->furniture;
        $property->cable_tv = $request->cable_tv;
        $property->internet = $request->internet;
        $property->central_heating = $request->central_heating;
        $property->pet_friendly = $request->pet_friendly;
        $property->featured_image = $filename;
        $property->second_image = $secondImageFilename;
        $property->third_image  = $thirdImageFilename;
        $property->fourth_image = $fourthImageFilename;
        $property->save();

        $userId = auth()->user()->id;

        $userProperty = new UserProperty();
        $userProperty->user_id = $userId;
        $userProperty->property_id = $property->id;
        $userProperty->save();

        return redirect()->back()->with('message', 'Property has been added succesfully!');
    }

    public function property($id){
        $property =     Property::where('id', $id)->firstOrFail();
        $userProperty = UserProperty::where('property_id', $id)->firstOrFail();
        $user =         User::where('id', $userProperty->user_id)->firstOrFail();
        return view('frontend.property', ['property' => $property, 'user' => $user]);       
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
    public function edit(Property $property, $id)
    {
        $cities = City::all();
        $property = Property::where('id', $id)->first();
        return view('backend.edit_property', ['cities' => $cities, 'property' => $property]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $property = Property::where('id', $request->id)->firstOrFail();;

        if($request->featured_image){
    		$featured_image = $request->file('featured_image');
    		$filename = 'featured' . '.' . time() . '.' . $featured_image->getClientOriginalExtension();
    		Image::make($featured_image)->save( public_path('/img/property_images/' . $filename ) );
        } else {
            $filename = $property->featured_image;
        }

        if($request->second_image){
    		$second_image = $request->file('second_image');
    		$secondImageFilename = 'second' . '.' . time() . '.' . $second_image->getClientOriginalExtension();
    		Image::make($second_image)->save( public_path('/img/property_images/' . $secondImageFilename ) );
    	} else {
            $secondImageFilename = $property->second_image;
        }

        if($request->third_image){
    		$third_image = $request->file('third_image');
    		$thirdImageFilename = 'third' . '.' . time() . '.' . $third_image->getClientOriginalExtension();
    		Image::make($third_image)->save( public_path('/img/property_images/' . $thirdImageFilename ) );
    	} else {
            $thirdImageFilename = $property->third_image;
        }

        if($request->fourth_image){
    		$fourth_image = $request->file('fourth_image');
    		$fourthImageFilename = 'forth' . '.' . time() . '.' . $fourth_image->getClientOriginalExtension();
    		Image::make($fourth_image)->save( public_path('/img/property_images/' . $fourthImageFilename ) );
    	} else {
            $fourthImageFilename = $property->fourth_image;
        }

        $property = Property::findOrFail($request->id);
        $property->update([
            'title'             => $request->title,
            'description'       => $request->description,
            'price'             => $request->price,
            'payment_duration'  => $request->payment_duration,
            'location'          => $request->location,
            'featured_image'    => $filename,
            'second_image'      => $secondImageFilename,
            'third_image'       => $thirdImageFilename,
            'fourth_image'      => $fourthImageFilename,
            'type'              => $request->type,    
            'agreement'         => $request->agreement,
            'status'            => $request->status,
            'area'              => $request->area,
            'rooms'             => $request->rooms ,       
            'bedrooms'          => $request->bedrooms,
            'bathrooms'         => $request->bathrooms,
            'floor'             => $request->floor,
            'parking'           => $request->parking,
            'balcony'           => $request->balcony,
            'air_conditioning'  => $request->air_conditioning,
            'alarm_system'      => $request->alarm_system,
            'elevator'          => $request->elevator,
            'garden'            => $request->garden,
            'barbeque'          => $request->barbeque,
            'furniture'         => $request->furniture,
            'cable_tv'          => $request->cable_tv,
            'internet'          => $request->internet,
            'central_heating'   => $request->central_heating,
            'pet_friendly'      => $request->pet_friendly,
        ]);

        return redirect()->back()->with('message', 'Property has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property, $id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect()->back()->with('message', "Property has been deleted successfully!");
    }
}
