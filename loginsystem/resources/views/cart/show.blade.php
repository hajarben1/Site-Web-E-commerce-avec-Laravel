@extends('layouts.app')
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<body style="background-color: wheat;">

    <h2 style="margin-bottom: 30px; font-size: 35px; font-style: italic; text-decoration: underline; margin-left: 650px;">Shopping Cart</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($cartProducts->isNotEmpty())
        <table style="border: 2px solid black;" class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach ($cartProducts as $cartProduct)
                    <tr>
                        <td><img style="margin-right: -90px; margin-left: 60px; width: 120px;" src="{{ asset('storage/' . $cartProduct->image) }}" alt="Product Image"></td>
                        <td>{{ $cartProduct->name }}</td>
                       
                        <td class="prix">{{ $cartProduct->prix }}<strong>$<strong> </td>
                       
                        <td>
   <select data-id="{{$cartProduct->productId}}" name="qty" class="qty custom-select">
      @for ($i = 1; $i < 6; $i++)
         <option value="{{$i}}">{{$i}}</option>
      @endfor
   </select>
</td>
                        @php
                            $price = (float) $cartProduct->prix; // Convert to float or numeric type
                            $subtotal = $price * $cartProduct->pivot->quantity;
                            $total += $subtotal;
                        @endphp
                        <td class="subtotal" >{{ $subtotal }}</td>
                        <td>
                            <form method="POST" action="{{ route('cart.remove', $cartProduct->id) }}">
                                @csrf
                                @method('DELETE')
                                <button style="background-color: red; border-radius: 5px; padding: 10px;" type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3 id="total">Total: {{ $total }} <strong>$<strong></h3>

    @else
        <p>Your cart is empty.</p>
    @endif

</body>
@endsection
@section('extra-js')
<script>
  function updateTotal() {
    var subtotalElements = document.getElementsByClassName("subtotal");
    var total = 0;

    for (var i = 0; i < subtotalElements.length; i++) {
      total += parseFloat(subtotalElements[i].innerHTML);
    }

    var totalElement = document.getElementById("total");
    totalElement.innerHTML = "Total: " + total.toFixed(2);
  }

  function change() {
    var prixElements = document.getElementsByClassName("prix");
    var subtotalElements = document.getElementsByClassName("subtotal");
    var selectElements = document.getElementsByClassName("qty");

    for (var i = 0; i < prixElements.length; i++) {
      var prix = parseFloat(prixElements[i].innerHTML);
      var subtotal = subtotalElements[i];
      var selectElement = selectElements[i];
      var selectedValue = selectElement.value;
      var c = prix * selectedValue;
      subtotal.innerHTML = c.toFixed(2);

      localStorage.setItem('subtotal_' + i, c.toFixed(2));
      localStorage.setItem('selectedValue_' + i, selectedValue);
    }

    updateTotal();
  }

  var selectElements = document.getElementsByClassName("qty");
  for (var i = 0; i < selectElements.length; i++) {
    selectElements[i].addEventListener('change', change);

    var storedSelectedValue = localStorage.getItem('selectedValue_' + i);
    if (storedSelectedValue) {
      selectElements[i].value = storedSelectedValue;
    }
  }

  var subtotalElements = document.getElementsByClassName("subtotal");
  for (var i = 0; i < subtotalElements.length; i++) {
    var storedSubtotal = localStorage.getItem('subtotal_' + i);
    subtotalElements[i].innerHTML = storedSubtotal;
  }

  updateTotal();
</script>




@endsection
