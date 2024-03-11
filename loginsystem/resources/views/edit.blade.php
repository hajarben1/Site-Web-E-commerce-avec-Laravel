@extends('layouts.app')

@section('content')
<body style="background-color: wheat;   ">
    <h2 style=" margin-top: 50px;      font-size: 35px;     font-style: italic; 
    text-decoration: underline;     margin-left: 650px;" >Edit Product</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('update', $product->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label  style="          margin-left: 160px;  font-weight: bold;  " for="name">Name:</label>
            <input  style="     margin-left: 80px;        margin-top: 90px;  padding: 10px;     padding-right: 200px;     margin-bottom: 50px;   " type="text" name="name" id="name" value="{{ $product->name }}"  required>
        </div>

        <div class="form-group">
            <label  style="        margin-left: 160px;    font-weight: bold;  " for="category">Category:</label>
            <input style="      margin-left: 60px;  padding: 10px;     padding-right: 200px;     margin-bottom: 50px;   " type="text" name="catégorie" id="catégorie" value="{{ $product->catégorie }}"  required>
        </div>

        <div class="form-group">
            <label  style="        margin-left: 160px;  font-weight: bold;  " for="price">Price:</label>
            <input style="     margin-left: 85px;   padding: 10px;     padding-right: 200px;     margin-bottom: 50px;   " type="number" name="prix" id="prix" value="{{ $product->prix }}"  required>
        </div>

        <div class="form-group">
            <label  style="         margin-left: 160px;   font-weight: bold;  " for="image">Image:</label>
            <input style="      margin-left: 70px;  padding: 10px;     padding-right: 200px;     margin-bottom: 50px;   " type="file" name="image" id="image" class="form-control-file">
            <div  style="    margin-left: 750px;         margin-top: -389px;" class="form-group">
          
           
            <img style="        background-color: white;     padding: 10px; border-radius: 10px;"  src="{{ asset('storage/' . $product->image) }}" width="250px">
            </div>
            
        </div>

        <button style="   border: 1px solid black;  cursor: pointer;       color: black;       margin-left: 160px; padding: 10px; border-radius: 10px;     padding-right: 30px;      background-color: white;   padding-left: 30px;     font-weight: bold;" type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
@endsection