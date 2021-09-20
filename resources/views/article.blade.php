@extends('template')

@section('titre')
    L'article de template
@endsection

@section('contenu')
{{-- <p>TestHomepage</p> --}}
<p>C'est l'article n° {{ $numero }}</p>
@endsection

{{-- route controller (bdd) vue --}}