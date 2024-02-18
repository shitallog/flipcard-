<?php

use App\Models\category;
use App\Models\product;

  function getcategories(){
	 return category::orderBy('categoryname','ASC')->get();
} 
	
  function getproducts(){
	  return product::orderBy('name','ASC')->get();
	
    }  	
	

  
  
 ?>