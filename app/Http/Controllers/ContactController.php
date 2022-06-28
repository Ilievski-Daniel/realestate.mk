<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact;
  
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('contactForm');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required|max:80',
            'message'   => 'required|max:255'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()->with(['success' => 'Your message has been sent successfully!']);
    }
}