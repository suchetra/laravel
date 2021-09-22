@extends('template')

@section('titre')
    Liste des produits de template
@endsection

@section('contenu')
<!-- {{-- <p>TestHomepage</p> --}} -->

@foreach($productssss as $product)
<div>
    {{ $product->name }}
</div>
@endforeach

@endsection

