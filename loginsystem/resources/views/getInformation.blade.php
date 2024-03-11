@extends('layouts.app')

@section('content')
<body style="background-color: wheat;">
<section  style=" display:none;       font-weight: bold; " class="hero-area hero-slider-3 ">
            
                    <div class="container">
                        <div class="home-content text-center">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <h1>Seize the opportunity now !</h1>
                                    <h2>Choose the book that suits  
                                        <br>you from here</h2>
                                    <a href="shop-grid.html" class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
<div class="row">
      

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

        <div  style="   margin-top: -50px;" class="site-header header-3  d-none d-lg-block">
            
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a  href=" {{ url('index1')}}" class="site-brand">
                                <img src="../images/logo-book.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <form action="/search">
                            <div class="header-search-block">
                                <input type="text" name="query" class="form-control search-box" placeholder="Search entire store here">
                                <button type="submit" class="btn btn-default">Search</button>
                            </div>
                            </form>
                        </div>
                       
                    <div style="margin-left: 200px;  
    margin-top: -150px;
 " class="col-lg-8 flex-lg-right">
                        <ul class="header-top-list">
                            
                           
                            
                           
                        </ul>
                    </div>
                
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Free Support 24/7</p>
                                    <p class="font-weight-bold number">+06-12-34-56-78</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right li-last-0">
                                    <li class="menu-item has-children">
                                        <a  href=" {{ url('index1')}}">Home 
                                               </a>
                                        
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children mega-menu">
                                        <a href=" {{ url('getInformation')}}">shop 
                                               </a>
                                        
                                            
                                           
                                            
                                        
                                    </li>
                                    <!-- Pages -->
                                    
                                    <!-- Blog -->
                                    <li class="menu-item has-children mega-menu">
                                        <a href=" {{ url('blog')}}">Blog 
                                                </a>
                                        
                                           
                                           
                                    </li>
                                    <li class="menu-item">
                                        <a href=" {{ url('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<section class="hero-area hero-slider-3 ">
            
                    <div class="container">
                        <div class="home-content text-center">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <h1>Seize the opportunity now !</h1>
                                    <h2>Choose the book that suits  
                                        <br>you from here</h2>
                                    <a  style="       background-color: yellow;     padding-top: 10px;"  href=" {{ url('getInformation')}}"   class="btn btn--yellow">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

<h2 style="       margin-bottom: 60px;     text-decoration: underline;    color: black;      margin-top: 30px;       margin-left: 650px;   font-weight: bold; "> Travel Books  </h2>
<div style="    display:flex;   flex-wrap: wrap;" class= " margin-tb">

    @foreach ($travelProducts as $product)
    @if ($product->catégorie == 'Travel')
    <div style="     margin-left: 60px;  ">
    <div style="      font-weight: bold;   text-align: center;"><p style="  margin-left: -25px; " >  {{ $product->name }}</p> </div> 
   <a href="{{ route('show',$product->id)}}">    <img  src="{{ asset('storage/' . $product->image) }}" style="          width: 150px;">   </a> 
      
     
      <div style="        margin-left: -40px;    margin-top: 10px;    font-weight: bold;   text-align: center;">   {{ $product->prix }}<strong>$</strong> <del class="price-old">£51.20</del> <span class="price-discount">20%</span> </div> 
      <div style="  margin-left: 20px;" class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div> 
</div>
@endif

@endforeach
</div> 
<div style="       color: brown;    margin-top: 30px;       margin-left: 650px;   font-weight: bold;   "> {!! $travelProducts->links() !!} </div> 
<h2 style="       margin-bottom: 60px;       margin-top: 30px;  text-decoration: underline;    color: black;        margin-left: 640px;  font-weight: bold; "> Education Books  </h2>

<div style="    display:flex;   flex-wrap: wrap;" class= " margin-tb">
    @foreach ($educationProducts as $product)
    @if ($product->catégorie == 'Education')
    <div style="    margin-left: 80px;">
    <div style="      font-weight: bold;   text-align: center;"><p style="  margin-left: -25px; ">{{ $product->name }}</p> </div> 
   <a href="{{ route('show',$product->id)}}">    <img  src="{{ asset('storage/' . $product->image) }}" style="          width: 150px;">   </a> 
      
     
      <div style="      margin-top: 10px;    font-weight: bold;   text-align: center;        margin-left: -50px;">   {{ $product->prix }}<strong>$</strong> <del class="price-old">£51.20</del> <span class="price-discount">20%</span> </div> 
      <div style="  margin-left: 20px;" class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div> 
</div>
@endif
@endforeach
</div> 
<div style="       color: brown;    margin-top: 30px;       margin-left: 650px;    font-weight: bold;   ">{!! $educationProducts->links() !!}</div>
<h2 style="      margin-top: 30px;     margin-bottom: 60px;     text-decoration: underline;    color: black;         margin-left: 650px;   font-weight: bold; "> Children Books  </h2>

<div style="    display:flex;   flex-wrap: wrap;" class= " margin-tb">
    @foreach ($childrenProducts as $product)
    @if ($product->catégorie == 'Children')
    <div style="     margin-left: 60px;">
    <div style="      font-weight: bold;   text-align: center;"> <p style="  margin-left: -25px; "> {{ $product->name }} </p> </div> 
   <a href="{{ route('show',$product->id)}}">    <img  src="{{ asset('storage/' . $product->image) }}" style="          width: 150px;">   </a> 
      
     
      <div style="      margin-top: 10px;    font-weight: bold;     margin-left: -110px;  text-align: center;">   {{ $product->prix }}<strong>$</strong> <del class="price-old">£51.20</del> <span class="price-discount">20%</span> </div> 
      <div style="  margin-left: 20px;" class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div> 
</div>
@endif
@endforeach
</div> 
<div style="       color: brown;    margin-top: 30px;       margin-left: 650px;    font-weight: bold;   ">{!! $childrenProducts->links() !!}</div>
<h2 style="        margin-top: 30px;   margin-bottom: 60px;     text-decoration: underline;    color: black;         margin-left: 650px;   font-weight: bold; "> Business Books  </h2>

<div style="    display:flex;   flex-wrap: wrap;" class= " margin-tb">
    @foreach ($businessProducts as $product)
    @if ($product->catégorie == 'Business')
    <div style="     margin-left: 60px;">
    <div style="      font-weight: bold;   text-align: center;"> <p style="  margin-left: -25px; ">  {{ $product->name }} </p> </div> 
   <a href="{{ route('show',$product->id)}}">    <img src="{{ asset('storage/' . $product->image) }}" style="          width: 150px;">   </a> 
      
     
      <div style="      margin-top: 10px;    font-weight: bold;         margin-left: -70px;  text-align: center;">   {{ $product->prix }} <strong>$</strong><del class="price-old">£51.20</del> <span class="price-discount">20%</span> </div> 
      <div style="  margin-left: 20px;" class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div> 
</div>
@endif
@endforeach
</div> 
<div style="       color: brown;    margin-top: 30px;       margin-left: 650px;    font-weight: bold;   ">{!! $businessProducts->links() !!}</div>

<section class="mb--30 space-dt--30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="text">
                                <h5>Free Shipping Item</h5>
                                <p> Orders over $500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Money Back Guarantee</h5>
                                <p>100% money back</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Cash On Delivery</h5>
                                <p>Lorem ipsum dolor amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Help & Support</h5>
                                <p>Call us : + 0123.4567.89</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="site-footer">
        <div class="container">
            <div class="row justify-content-between  section-padding">
                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-footer pb--50">
                       
                        
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    
                </div>
                
            </div>
        </div>
        <div style="   display:flex ; "  class="footer-bottom">
        <div  style="       margin-left: 170px; "  class="social-block">
                        <h3 style="   color:white; " class="title">STAY CONNECTED</h3>
                        <ul class="social-list list-inline">
                            <li style=" background-color: black;"    class="single-social facebook"><a ><i class="ion ion-social-facebook"></i></a>
                            </li>
                            <li style=" background-color: black;" class="single-social twitter"><a href=""><i class="ion ion-social-twitter"></i></a></li>
                            <li style=" background-color: black;" class="single-social google"><a href=""><i
                                        class="ion ion-social-googleplus-outline"></i></a></li>
                            <li style=" background-color: black;" class="single-social youtube"><a href=""><i   class="ion ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
            <div style="       margin-right: -30px; "  class="container">
                
                  
                <a class="payment-block">
                    <img src="image/icon/payment.png" alt="">
                </a>
                <p class="copyright-text">Copyright © 2022 . All Right Reserved.
                    </p>
            </div>
            <div style="   color:white; " class="single-footer pb--50">
                       
                        <div style="       margin-right: 150px; " class="footer-contact">
                            <p><span style="   color:white; " class="label">Address:</span><span class="text">Appt N°35, Avenue Bir Anzarane, Immeuble Al Krar <br> Eljadida
                                 
                                  </span></p>
                            <p><span style="   color:white; " class="label">Phone:</span><span class="text">080-8562295</span></p>
                            <p><span style="   color:white; " class="label">Email:</span><span class="text">info@grandecharte.co</span></p>
                        </div>
                    </div>
        </div>
        
    </footer>

</body>
@endsection