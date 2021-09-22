@extends('template')

@section('titre')
    Produits ordre prix
@endsection

@section('contenu')
{{-- <p>TestHomepage</p> --}}
<p>Liste des produits par ordre de prix croissant</p>
@for($products as $product)
<div>
    <h3>{{ $name }}</h3>
    <p>{{ $description }}</p>
    <p>{{ $price }} €</p></br>
</div>
@endfor
@endsection

{{-- route controller (bdd) vue --}}