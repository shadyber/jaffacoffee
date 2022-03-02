<?php

use App\Http\Controllers;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ReviewController;

use App\Models\Address;

use Illuminate\Support\Facades\Route;

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


Auth::routes(['verify' => true]);



Route::group(['middleware' => ['auth']], function() {
        Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('/items', App\Http\Controllers\AdminItemController::class);
    Route::resource('/order', App\Http\Controllers\OrderController::class);
    Route::post('/orderstatus', [Controllers\OrderController::class, 'updateStatus'])->name('order.status');
    Route::post('/photoupdate', [App\Http\Controllers\AdminItemController::class, 'photoupdate'])->name('photoupdate');
    Route::resource('/itemsphoto', App\Http\Controllers\ItemPhotosController::class);
    Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::get('/about/create', [AboutUsController::class, 'create']);
    Route::get('/about/edit', [AboutUsController::class, 'create']);
    Route::post('/about', [AboutUsController::class, 'store']);

});




Route::resource('/item',App\Http\Controllers\ItemController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/shipping',App\Http\Controllers\ShippingInfoController::class);
Route::get('/myorders',[App\Http\Controllers\OrderController::class,'myorders'])->name('myorders');


Route::resource('/cat',App\Http\Controllers\ItemCategoryController::class);

Route::resource('/blog',App\Http\Controllers\BlogController::class);
Route::resource('/blogs',App\Http\Controllers\AdminBlogController::class);
Route::resource('/blogcategory',App\Http\Controllers\BlogCategoryController::class);

Route::get('/about', function(){
    return view('about');
});

Route::get('/terms', function(){
    return view('terms')->with('terms',App\Models\StaticPages::TermsAndConditions());
});
Route::get('/privacy', function(){
    return view('privacy')->with('terms',App\Models\StaticPages::PrivacyPolicy());
});

Route::get('/refundpolicy', function(){
    return view('refund')->with('terms',App\Models\StaticPages::RefundPolicy());
});

Route::get('/shippingorder', function(){
    return view('shippingorder')->with('terms',App\Models\StaticPages::ShippingAndOrder());
});

Route::get('/static',[App\Http\Controllers\StaticPagesController::class,'show']);
Route::post('/static',[App\Http\Controllers\StaticPagesController::class,'update']);

Route::resource('/address',AddressController::class);


Route::get('/contact', function(){
    return view('contact')->with('address', Address::all()->last());
});

Route::get('/addtocart/{id}',[CartController::class,'addToCart'])->name('addtocart');
Route::get('/multipleaddtocart/{id}/{qnt}',[CartController::class,'addMultipleToCart'])->name('addmultipletocart');
Route::get('/removecart/{id}/',[CartController::class,'removeCart'])->name('removeCart');
Route::get('/destroyCart',[CartController::class,'destroyCart'])->name('destroyCartm');

Route::get('/mycart',[CartController::class,'myCart'])->name('mycart');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');


Route::get('/search',[\App\Http\Controllers\SearchController::class,'search'])->name('search');

Route::get('/payments',[\App\Http\Controllers\PaymentController::class,'index'])->name('payments');


Route::get('stripe',  [\App\Http\Controllers\StripePaymentController::class,'stripe'])->name('stripe');
Route::post('stripe',  [\App\Http\Controllers\StripePaymentController::class,'stripePost'])->name('stripe.post');



Route::get('payment',[\App\Http\Controllers\PaymentController::class,'index']);
Route::post('charge', [\App\Http\Controllers\PaymentController::class,'charge']);
Route::get('paymentsuccess',[\App\Http\Controllers\PaymentController::class,'payment_success']);
Route::get('paymenterror', [\App\Http\Controllers\PaymentController::class,'payment_error']);





Route::get('/restart-server',function (){

    $exitCode = Artisan::call('route:clear');

    echo  $exitCode;
    $exitCode1 = Artisan::call('view:clear');

    echo  $exitCode1;
    $exitCode2 = Artisan::call('config:clear');

    echo  $exitCode2;
    $exitCode3 = Artisan::call('cache:clear');

    echo  $exitCode3;
    $exitCode3 = Artisan::call('config:cache');

    echo  $exitCode3;
});

