@extends('layouts.app')
@section('content')
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <h2>Checkout</h2>
    <form action="{{ route('checkout.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Address:</label>
        <input type="text" name="address" required><br>

        <label>Proof of Payment:</label>
        <input type="file" name="paymentProof" accept="image/*" required><br>

        <button type="submit">Submit Order</button>
    </form>

@endsection