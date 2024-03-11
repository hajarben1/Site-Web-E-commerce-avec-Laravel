<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;

use App\Http\Middleware\AddToCartMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('index1');
});
Route::get('/index', [ProductController::class,'index'])->name('index');
Route::get('/create', [ProductController::class,'create'])->name('create');





Route::get('/contact', [ContactController::class,'contact']);
Route::post('contact', [ContactController::class,'sendEmail'])->name('contact.us');



Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('update');



Route::get('show/{product}', [ProductController::class,'show'])->name('show');

Route::get('search', [ProductController::class,'search'])->name('search');


Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('destroy');


Route::get('/getInformation', [ProductController::class,'getInformation'])->name('getInformation');

Route::get('/new_create', [ProductController::class,'create'])->name('new_create');
Route::post('store/', [ProductController::class,'store'])->name('store');


Route::post('/cart/{productId}', [CartController::class, 'addToCart'])
    ->name('cart.add')
    ->middleware([AddToCartMiddleware::class, 'auth']);

Route::get('/cart', [CartController::class, 'showCart'])
    ->name('cart.show')
    ->middleware('auth');
    Route::delete('/cart/{productId}', [CartController::class, 'removeFromCart'])
    ->name('cart.remove')
    ->middleware('auth');
    


 



Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('/checkout',[CustomAuthController::class,'checkout']);
Route::get('/compare',[CustomAuthController::class,'compare']);

Route::get('/contact',[CustomAuthController::class,'contact']);
Route::get('/faq',[CustomAuthController::class,'faq']);
Route::get('/index3',[CustomAuthController::class,'index3']);
Route::get('/index1',[CustomAuthController::class,'index1']);
Route::get('/myaccount',[CustomAuthController::class,'myaccount']);
Route::get('/ordercomplete',[CustomAuthController::class,'ordercomplete']);
Route::get('/productdetailsgroup',[CustomAuthController::class,'productdetailsgroup']);
Route::get('/productdetails',[CustomAuthController::class,'productdetails']);
Route::get('/shopgrid',[CustomAuthController::class,'shopgrid']);
Route::get('/shoplist',[CustomAuthController::class,'shoplist']);
Route::get('/wishlist',[CustomAuthController::class,'wishlist']);

Route::get('/blog',[CustomAuthController::class,'blog']);


Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
