@extends('template')

@section('titre')
    Produits ordre prix
@endsection

@section('contenu')
{{-- <p>TestHomepage</p> --}}
<p>Liste des produits par ordre de prix croissant</p>
{{$product}}

@endsection

{{-- route controller (bdd) vue --}}