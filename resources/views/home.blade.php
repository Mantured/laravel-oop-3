@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
<main>
    test main prova
    @dump ($product1)
    @php
        echo $product1 -> getPrice() . ' $';
    @endphp
</main>
@endsection
