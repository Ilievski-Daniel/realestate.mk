<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\UserProperty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::all();
        $userProperties = UserProperty::all();
        return view('backend.home', ['properties' => $properties, 'userProperties' => $userProperties]);    
    }
}
