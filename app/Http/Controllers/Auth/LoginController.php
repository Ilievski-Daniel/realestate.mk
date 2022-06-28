<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email|max:50',
            'password'  => 'required|min:8|max:25',
        ]);
    }
}