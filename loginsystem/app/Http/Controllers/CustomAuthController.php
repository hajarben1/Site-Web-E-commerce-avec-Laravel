<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
class CustomAuthController extends Controller
{
    public function login ()
  {
    return view("auth.login");
  }
  public function registration ()
  {
    return view("auth.registration");
  }
  public function blog()
  {
    return view("blog");
  }
  public function cart()
  {
    return view("cart");
  }
  public function checkout()
  {
    return view("checkout");
  }
  public function compare()
  {
    return view("compare");
  }
  public function contact2()
  {
    return view("contact2");
  }
  public function contact()
  {
    return view("contact");
  }
  public function faq()
  {
    return view("faq");
  }
  public function index3()
  {
    return view("index3");
  }
  public function index1()
  {
    return view("index1");
  }
  public function myaccount()
  {
    return view("myaccount");
  }
  public function ordercomplete()
  {
    return view("ordercomplete");
  }
  public function productdetailsgroup()
  {
    return view("productdetailsgroup");
  }
  public function productdetails()
  {
    return view("productdetails");
  }
  public function shopgrid()
  {
    return view("shopgrid");
  }
  public function shoplist()
  {
    return view("shoplist");
  }
  public function wishlist()
  {
    return view("wishlist");
  }
  public function registerUser(Request $request)
  {
    $request->validate ([
       'name'=>'required',
       'email'=>'required|email|unique:users',
       'password'=>'required|min:5|max:12'
    ]

    );
  
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email->default('');
    $user->password = Hash::make($request->password);
    $res = $user->save();
    if ($res){
      return back()->with('success', 'You have registered successfuly');
    }
    else {
      return back()->with('fail', 'Something wrong');
    }
  }
  public function loginUser(Request $request)
  {
      $request->validate([
          'email' => 'required|email',
          'password' => 'required|min:5|max:12'
      ]);
      
      $user = User::where('email', $request->email)->first();
      
  
      if ($user ) {
          if (Hash::check($request->password, $user->password)) {
              $request->session()->put('loginId', $user->id);
              return redirect('dashboard');
          } else {
              return back()->with('fail', 'Password does not match.');
          }
      } else {
          return back()->with('fail', 'This email is not registered.');
      }
  }
  
  public function dashboard()
  {
    $data = array();
    if(Session::has('loginId')){
    
      $data = User::where('id', Session::get('loginId'))->first();
    }
      return view('dashboard', compact('data'));
  }
   public function logout()
   {
    if(Session::has('loginId')){
      Session::pull('loginId');
      return redirect('login');
    }
   }
  
   

  }


