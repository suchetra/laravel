@extends('template')

@section('titre')
    Produit n° {{ $numero }} du template
@endsection

@section('contenu')
{{-- <p>TestHomepage</p> --}}
<p>Fiche du produit n° {{ $numero }} grâce au template</p>
@endsection

{{-- route controller (bdd) vue --}}