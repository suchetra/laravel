{{-- <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les articles</title>
</head>
<body>
    <p>C'est l'article n° {{ $numero }}</p>

</body>
</html> --}}

@extends('template')

@section('titre')
    La homepage
@endsection

@section('contenu')
{{-- <p>TestHomepage</p> --}}
<p>C'est l'article n° {{ $numero }}</p>
@endsection