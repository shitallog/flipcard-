<?php

namespace App\Http\Controllers;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
	
	  public function index(){
		 return view('welcome');
	   
   }
	
	
public function store(Request $request)
    {
    $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'mobile'  => 'required|string|max:15',
            'email'   => 'required|email|max:255',
            'city'    => 'required|string|max:255',
            'course'  => 'required|array',
        ]);

        $enquiry = Enquiry::create($validatedData);

        return redirect()->back()->with('success', 'Enquiry submitted successfully');
    }
}
