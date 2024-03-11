@extends('layouts.app')

@section('content')
<body style="background-color: wheat;">
<div class="row">
    <div class= "col-lg-12 margin-tb">
        <div  style="margin-left: 500px; font-size: 25px; font-style: italic;    margin-top: 40px;    color: black;    text-decoration: underline; " class="pull-left">
            <h2 style="  margin-left: 150px;      font-weight: bold; "> Books list </h2>
        </div>
        <div class="pull-right" style="margin-bottom:10px;">
        <a style="         padding-top: 12px;     margin-left: 20px;  background-color: black; " class="btn btn-success" href="{{ url('create')}}"> Create new product</a>
        </div>
    </div>   
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif
<table style="    border: 2px solid black; " class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Image </th>
        <th>Catégorie:</th>
        <th>Name </th>
        <th> prix</th>
        <th with="280px"> Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
 </td>
        <td>{{ $product->catégorie }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->prix }} <strong>$</strong></td>
        <td>
            <form action="{{ route('destroy', $product) }}" method="post">
                
                <a style="        padding-top: 13px; " class="btn btn-info" href="{{ route('show',$product->id)}}">Show</a>
                <a style="        padding-top: 13px; " class="btn btn-primary" href="{{ route('edit',$product->id)}}">Edit</a>
                @csrf
           
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>
</tr>
@endforeach
</table>
 {!! $products->links() !!}
</body>
@endsection