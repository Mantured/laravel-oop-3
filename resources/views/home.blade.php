@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
<main>
    test main prova
    @php
        var_dump($product -> getPrice());
        echo $product -> getPrice() . ' $'
    @endphp
</main>
@endsection
