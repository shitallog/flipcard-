<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
	protected $fillable=['name','description','slug','category_id','image','selling_price', 'offer_price','quantity','price','mrp','status'];
	
	 public function category()
    {
      return $this->belongsTo(Category::class);
   }
	 public function image()
    {
      return $this->hasMany(Product::class);
   }
	
}
