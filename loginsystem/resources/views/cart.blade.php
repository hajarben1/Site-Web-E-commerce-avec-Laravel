@extends('layouts.app')

@section('content')
    <h1>Cart</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

     @if (isset($cartProducts) && count($cartProducts) > 0)


        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cartProducts as $cartProduct)
    @if ($cartProduct && $cartProduct->product)
        <tr>
            <td>{{ $cartProduct->product->name }}</td>
            <td>{{ $cartProduct->product->prix }}</td>
            <td>{{ $cartProduct->quantity }}</td>
            <td>{{ $cartProduct->product->prix * $cartProduct->quantity }}</td>
            <td>
                <form method="POST" action="{{ route('cart.remove', $cartProduct->id) }}">
                    @csrf
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    @endif
@endforeach

@endforeach
            </tbody>
        </table>
        @php
    $total = 0;
@endphp
@foreach ($cartProducts as $cartProduct)
    @php
        $subtotal = $cartProduct->product->prix * $cartProduct->quantity;
        $total += $subtotal;
    @endphp
@endforeach

        <h3>Total: {{ $total }}</h3>

        <form method="POST" action="{{ route('cart.checkout') }}">
            @csrf
            <button type="submit">Checkout</button>
        </form>
    @else
        <p>Your cart is empty.</p>
    @endif
@endsection
