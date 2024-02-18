<?php

namespace App\Http\Controllers;
use App\Models\ContactFormSubmission;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
	
	 public function one(){
		 return view('pages.contact-us');
	   
   }
      public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name'      => 'required|string|max:255',
            'contact_number' => 'required|string|max:15',
            'email'          => 'required|email|max:255',
            'message'        => 'required|string',
        ]);

        ContactFormSubmission::create($validatedData);

        return redirect()->back()->with('success', 'Form submitted successfully');
    }
}
