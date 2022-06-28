<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\UserProperty;
use App\Models\MessageUser;

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

        $messageUsers = MessageUser::where('user_id', auth()->user()->id)->get();
        $messageUsersCount = 0;
        foreach ($messageUsers as $messageUser) {
            $messageUsersCount++;
        }

        $userProperties = UserProperty::where('user_id', auth()->user()->id)->get();
        $propertyCount = 0;
        foreach ($userProperties as $userProperty) {
            $propertyCount++;
        }

        return view('backend.home', ['properties' => $properties, 'userProperties' => $userProperties, 'messageUsersCount' => $messageUsersCount, 'propertyCount' => $propertyCount]);    
    }
}
