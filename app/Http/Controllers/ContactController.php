<?php
  
namespace App\Http\Controllers;
  
use App\Http\Requests\ContactRequest;
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
    public function store(ContactRequest $request)
    {
        Contact::create($request->all());
  
        return redirect()->back()->with(['success' => 'Your message has been sent successfully!']);
    }
}