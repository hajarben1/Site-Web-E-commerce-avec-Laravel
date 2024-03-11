@extends('layouts.app')

@section('content')
<body style="background-color: wheat;">
<div class="row">


        <div style="   margin-top: -30px;  " class="site-header header-3  d-none d-lg-block">
            
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="{{ url('index1') }}" class="site-brand">
                                <img src="../images/logo-book.png" alt="">
                            </a>
                        </div>
                       
                       
                    <div style="margin-left: 200px;  
    margin-top: -150px;
 " class="col-lg-8 flex-lg-right">
                       
                    </div>
                
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        
                        
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul style="        margin-top: -110px;  margin-right: -490px;" class="main-menu menu-right li-last-0">
                                    <li class="menu-item has-children">
                                        <a href="{{ url('index1') }}">Home 
                                               </a>
                                       
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children mega-menu">
                                        <a href="{{ url('getInformation') }}">shop 
                                               </a>
                                        
                                            
                                           
                                            
                                        
                                    </li>
                                    <!-- Pages -->
                                    
                                    <!-- Blog -->
                                    <li class="menu-item has-children mega-menu">
                                        <a href="{{ url('blog') }}">Blog 
                                                </a>
                                        
                                           
                                           
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 style="       margin-bottom: 60px;     text-decoration: underline;    color: black;      margin-top: 30px;   margin-left: 650px;   font-weight: bold; "> Result of search  </h2>
<div style="    display:flex;   flex-wrap: wrap;" class= " margin-tb">
@foreach ($products as $product)
<div style="     margin-left: 60px;  ">
    <div style="      font-weight: bold;   text-align: center;"> <p style="  margin-left: -25px; " >  {{ $product->name }} </p></div> 
   <a href="{{ route('show',$product->id)}}">    <img  src="{{ asset('storage/' . $product->image) }}" style="          width: 150px;">   </a> 
      
     
      <div style="           margin-left: -90px;    margin-top: 10px;    font-weight: bold;   text-align: center;">   {{ $product->prix }}<strong>$</strong> <del class="price-old">£80.10</del> <span class="price-discount">20%</span> </div> 
      <div style="  margin-left: 20px;" class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div> 
</div>
@endforeach
</body>
@endsection