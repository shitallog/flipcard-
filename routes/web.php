<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\flipcardController;

use App\Http\Controllers\StudentController;
 
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});


Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});

//category
Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/index', CategoryController::class .'@store')->name('category.store');
// returns a page that shows a full post
Route::get('/category/{id}', CategoryController::class .'@show')->name('category.show');
// returns the form for editing a post
Route::get('/category/{id}/edit', CategoryController::class .'@edit')->name('category.edit');
// updates a post
Route::put('/category/{id}', CategoryController::class .'@update')->name('category.update');
// deletes a post
Route::delete('/category/{id}', CategoryController::class .'@destroy')->name('category.destroy');
//product
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/index',ProductController::class .'@store')->name('product.store');
// returns a page that shows a full post
Route::get('/product/{id}',ProductController::class .'@show')->name('product.show');
// returns the form for editing a post
Route::get('/product/{id}/edit', ProductController::class .'@edit')->name('product.edit');
// updates a post
Route::put('/product/{id}', ProductController::class .'@update')->name('product.update');
// deletes a post
Route::delete('/product/{id}', ProductController::class .'@destroy')->name('product.destroy');




//pages
Route::get('/pages/online-admission', StudentController::class .'@index')->name('pages.online-admission');
Route::post('/pages/online-admission', [StudentController::class, 'store']);

//
//Route::get('/', EnquiryController::class .'@index')->name('welcome');
Route::get('/pages/contact-us', ContactFormController::class .'@one')->name('pages.contact-us');
Route::post('/pages/contact-us', [ContactFormController::class, 'store']);

///productpage
//Route::get('/product-page/{id}', [ProductController::class, 'Product'])->name('Product.page_product');
Route::get('/page_product/{slug}', [flipcardController::class, 'Product'])->name('Product.page_product');

//Route::get('/product/{id}', [ProductController::class, 'product'])->name('product.page_product');

