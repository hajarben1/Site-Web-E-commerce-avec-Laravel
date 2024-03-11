@extends('layouts.app')

@section('content')
<body style="background-color: wheat;">
<div class="row">
    <div class= "col-lg-12 margin-tb">
        <div style="           margin-left: 620px;     font-style: italic;     margin-top: 40px;    "  class="pull-left">
            <h2 style="         margin-top: -40px;   font-weight: bold; "> Add New Product </h2>
        </div>
        <div    style=" margin-left: 30px;" class="pull-right" >
        <a style="     padding-right: 16px;padding-top: 13px; padding-left: 16px;  background-color: black;     margin-top: -20px;" class="btn btn-primary" href="{{ url('index')}}"> Back</a>
        </div>
    </div>   
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach 
    </ul> 
</div>
@endif


<form  style="       margin-top: 60px;     font-size: 18px;     display: grid;"   action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label style="      margin-top: -50px;    margin-left: 30px;    margin-bottom: 10px;   font-weight: bold;" for="name">Name:</label>
    <input  style="     margin-right: 90px; margin-left: 30px; margin-bottom: 30px;   padding: 10px;"     type="text" name="name" id="name">

    <label  style="    margin-left: 30px;    margin-bottom: 10px;    font-weight: bold;" for="category">catégorie:  <strong>(Travel,Education,Children,Business)</strong></label>
    <input    style="   margin-right: 90px; margin-left: 30px;  padding: 10px; margin-bottom: 30px;" type="text" name="catégorie" id="catégorie">
 

    <label  style="    margin-left: 30px;    margin-bottom: 10px;    font-weight: bold;" for="price">Price:</label>
    <input  style="  margin-right: 90px; margin-left: 30px;   padding: 10px;  margin-bottom: 30px;" type="number" name="prix" id="prix" step="0.01">


    <label  style="    margin-left: 30px;    margin-bottom: 10px;    font-weight: bold;" for="image">Image:</label>
    <input  style=" margin-right: 90px; margin-left: 30px;    padding: 10px; margin-bottom: 30px;" type="file" name="image" id="image">


    <button   style=" 
    background-color: black   ;  color: white; font-weight: bold;    margin-right: 400px;     margin-left: 400px;      padding: 10px;      border-radius: 10px;"  type="submit">Create Product</button>
</form>
</body>
@endsection