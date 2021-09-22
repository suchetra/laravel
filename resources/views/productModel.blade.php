@extends('template')

@section('titre')
    Liste des productModel
@endsection

@section('contenu')
<!-- {{-- <p>TestHomepage</p> --}} -->

@foreach($products as $product)
<div>
    <h3>{{ $product->name }}</h3>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p></br>
</div>
@endforeach

@endsection

