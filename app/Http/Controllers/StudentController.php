<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
	   public function index(){
		 return view('pages.online-admission');
	   
   }
   
   public function store(Request $request)
    {
        $validatedData = $request->validate([
            'student_name'   => 'required|string|max:255',
            'father_name'    => 'required|string|max:255',
            'mother_name'    => 'required|string|max:255',
            'last_name'      => 'required|string|max:255',
            'mobile_number'  => 'required|string|max:15',
            'email'          => 'required|email|max:255',
            'nationality'    => 'required|string|max:255',
            'date_of_birth'  => 'required|date',
            'gender'         => 'required|in:male,female,other',
            'marital_status' => 'required|in:married,unmarried',
            'adhar_number'   => 'required|string|max:20',
            'category'       => 'required|in:open,obc,sc_st',
            'course'         => 'required|in:fashion_design,interior_design',
            'address'        => 'required|string',
        ]);

        $student = Student::create($validatedData);

        return redirect()->back()->with('success', 'Student created successfully');
    }
	
	
	 
}
