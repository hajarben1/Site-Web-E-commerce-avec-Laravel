@extends('app')

@section('content')

<div class="row">
    <div class= "col-lg-12 margin-tb">
        <div style="       margin-left: 420px;     font-style: italic;     margin-top: 40px;    "  class="pull-left">
            <h2 style="        font-weight: bold; "> Add New Product </h2>
        </div>
        <div class="pull-right" >
        <a style="    background-color: black; " class="btn btn-primary" href="{{ url('index')}}"> Back</a>
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
<form action="{{ route('store')}}" method=" POST" enctype="multipart/form-data">
    @csrf 
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div style="    margin-top: 30px; " class="form-group">
                <strong>Catégorie:</strong>
               
            
                <input type="text" name="catégorie" class="form-control" placeholder="Catégorie">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
               
                <textarea class="form-control" name="name" placeholder="Name"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Prix:</strong>
                 <input type="text" name="prix" class="form-control" placeholder="Prix">
                 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Image:</strong>
            <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button style="    background-color: black; " type="submit" class="btn btn-primary">Submit </button>
        </div>
</div>
</form>   
@endsection