@extends('layouts.app')

@section('content')
    <h2>Nuestro Menú</h2>
    <ul>
    @foreach($products as $product)
        <li>{{ $product->name }} - ${{ $product->price }}</li>
    @endforeach
    </ul>
@endsection