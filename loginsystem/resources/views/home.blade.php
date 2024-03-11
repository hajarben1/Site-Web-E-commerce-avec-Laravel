@extends('layouts.app')

@section('content')
<body style="background-color: black; "  >
<div style=" display: flex;">
<div style="background-color: wheat;     margin-bottom: -25px;    margin-top: -24px; margin-right: 290px;            padding-bottom: 157px; " class="container">
    <div style="display: flex; "  class="row justify-content-center">
    <div class="col-md-3 p-0 ">
                <div class="wrap-black">
                    <div class="wrap-black_btn">
                        <div style="  display:flex;    font-size: 18px;  background-color: white;      padding-bottom: 10px;   margin-left: -65px;    margin-top: 40px;      padding-left: 100px;     padding-right: 100px;    padding-top: 10px;    border-radius: 5px; " class="button-close" id="blog">
                            <a style="    color: black;     text-decoration: none;     margin-left: -50px;  " href="{{ url('cart') }}">Cart</a>
                            <a style="     margin-left: 5px;   color: black;     text-decoration: none;  " href="{{ url('cart') }}"> products</a>
                        </div>
                        <div style="  display:flex;    font-size: 18px;   margin-bottom: 300px;   background-color: white;     margin-left: -65px;    margin-top: 40px;      padding-left: 100px;     padding-right: 100px;    padding-top: 10px;    padding-bottom: 10px;border-radius: 5px; " class="button-close" id="user">
                            <a style="    color: black;     text-decoration: none;     margin-left: -50px;  " href="{{ url('getInformation') }}">Shop  </a>
                            <a style="     margin-left: 5px;   color: black;     text-decoration: none;  " href="{{ url('getInformation') }}">  Now</a>
                        </div>
                    </div>
                    <div style="  font-size: 18px;   background-color: white;     margin-left: -65px;    margin-top: 40px;      padding-left: 50px;     padding-right: 50px;        padding-top: 10px;    padding-bottom: 10px;border-radius: 5px; " class="button-close">
                        <a  style="    color: black;     text-decoration: none;  "href="{{ url('index1') }}">Logout</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
<div class="container">
    <div style="display: flex; " class="row justify-content-center">
        <div style="     padding: 30px;     width: 700px;     margin-right: 40px; " class="col-md-8">
            <div style="    margin-left: -190px; " class="card">
                <div style="    background-color:wheat;     color: black;" class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <h3 style=" margin-left: 130px; 
       text-decoration: underline;     font-style: italic;     " >Welcome to the  User Dashboard</h3>
                    {{ __('Welcome, user! You have logged in to the dashboard!') }}
                  
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
