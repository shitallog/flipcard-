<?php

namespace App\Http\Controllers;


use App\Models\product;
use Illuminate\Http\Request;

class flipcardController extends Controller
{
    public function Product($slug)
    {
       $products = Product::where('slug', $slug)->first();
            //dd($products);
		  if($products == null){
	              abort(404);
		     }
		   $data['products'] = $products;
		   
         return view('product.page_product',$data);
	 
    }
}
