@extends('layouts.app')

@section('content')
<body style="background-color: wheat;">
<div  class="container">
<div class="row">
    <div class= "col-lg-12 margin-tb">
        <div style="margin-left: 600px; font-size: 25px; font-style: italic; " class="pull-left">
            <h2 style="        font-weight: bold; ">  Product details </h2>
        </div>
        <div style="    background-color: black;     display: inline;     padding: 15px;    padding-right: 30px;    padding-left: 30px;    border-radius: 9px;margin-left: 100px; " class="pull-right" >
        <a style="    text-decoration: none; color: white; "  href="{{ url('index')}}"> Back</a>
        </div>
    </div>   
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
            <div style="    margin-left: 200px;     margin-top: 90px;       color: red;  font-size: 26px; " class="form-group1">
                <strong style="text-decoration: underline;      color: black;       font-size: 26px; ">Catégorie:</strong>
                {{ $product->catégorie}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div style="    margin-left: 200px;     margin-top: 90px;   
    margin-right: 700px;  color: red;  font-size: 26px; " class="form-group1">
                <strong style="text-decoration: underline;      color: black;       font-size: 26px; ">Name:</strong>
                {{ $product->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div  style="    margin-left: 200px;    margin-top: 100px;      color: red;   font-size: 26px;  " class="form-group2">
                 <strong style="text-decoration: underline;     color: black;  ">Prix:</strong>
                 {{ $product->prix}}<strong style="    color: black; ">$</strong>
            </div>

        </div>
       
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div style="    margin-left: 410px;" class="form-group">
            
        <img style="    margin-left: 280px;        margin-top: -356px;       margin-bottom: 50px;  background-color: white;     padding: 10px; border-radius: 10px;" src="{{ asset('storage/' . $product->image) }}" width="250px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
           
        <div class="add-cart-btn">

           <form method="POST" action="{{ route('cart.add', $product->id) }}">
            @csrf
           
            <button style="        background-color: yellow;     padding: 10px;     margin-left: 200px;" type="submit">Add to Cart</button>
        </form>
                                    
                                    
        </div>
     
        </div>
    </div>
    </div>
</body>
    @endsection