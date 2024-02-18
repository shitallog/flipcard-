<?php

namespace App\Http\Controllers;
use App\Models\Category;

use App\Models\product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index(Request $request){
	 
	  $products= product::all();
        return view('product.index', compact('products'));
	   
   }
     public function create(Request $request){
		 
		  $categories = Category::all();
		   $products = product::orderBy('name','ASC')->get();
		   $data['products'] = $products;
           
		 return view('product.create', compact('categories'));
	   
   }
   
   public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
           
           
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
		
         $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
		
         Product::create($input);
     
        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    } 
   
    public function show($id)
    {
        $product= product::findOrFail($id);
        return view('product.show', compact('product'));
    }
     public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('product.edit', compact('product'));
    }
   
      public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
           
           
           

        ]);
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $product = product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'product updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
  public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'product deleted successfully!');
    }

	//public function pageProduct($id)
   // {
    //  $categories = Category::all();
		//   $products = product::orderBy('name','ASC')->get();
		//  $products= product::all();
    //   $Product = Product::where('id',$id)->with('image')->first();
	 //  if($product == null){
	//	   abort(404);
		//}
	//	 return view('product.page_product', compact('products'));
	  // dd($product);
	 // echo $slug;
	     //return view('product.page_product');
   // 
   

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
}
