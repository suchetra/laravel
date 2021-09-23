@extends('template')

@section('titre')
    Produit n° {{ $product->id }} du template
@endsection

@section('contenu')
{{-- <p>TestHomepage</p> --}}
<p>Fiche du produit n° {{ $product->id }} grâce au template</p>
{{$product}}
@endsection

{{-- route controller (bdd) vue --}}