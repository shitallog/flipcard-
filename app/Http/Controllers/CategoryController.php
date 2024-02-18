<?php

namespace App\Http\Controllers;
use App\Models\category;
//use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
     public function index(Request $request){
		 
		 $categories = Category::withCount('products')->get();
          //$categories= category::all();
        return view('category.index', compact('categories'));
	   
   }
   
   
   public function create(Request $request){
		 return view('category.create');
	   
   }
   
    public function store(Request $request)
    {
         $request->validate([
            'categoryname' => 'required',
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
		
          $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
		
        category::create($request->all());
      //  $category->save();
        return redirect()->route('category.index');
		
		
		
    }
	
	
	 public function show($id)
    {
        $category = category::findOrFail($id);
        return view('category.show', compact('category'));
    }
     
	 
	  public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('category.edit', compact('category'));
    }
   
      public function update(Request $request, $id)
    {
       $request->validate([
            'categoryname' => 'required',
              'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
		
          $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $category = category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('category.index')->with('success', 'category updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
  public function destroy($id)
    {
        $category = category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'category deleted successfully!');
    }




















   
   
}
