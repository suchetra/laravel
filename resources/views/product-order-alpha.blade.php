@extends('template')

@section('titre')
    Produits ordre alphabétique
@endsection

@section('contenu')
{{-- <p>TestHomepage</p> --}}
<p>Liste des produits par ordre alphabétique</p>
@foreach($products as $product)
<div>
    <h3>{{ $product->name }}</h3>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p></br>
</div>
@endforeach
@endsection

{{-- route controller (bdd) vue --}}