@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
<main>
    test main prova
    @dump ($product1)
    @php
        echo $product1 -> getPrice() . ' $';
        $customer -> getCart() -> addProductToCart($product1);
        $customer -> getCart() -> addProductToCart($product1);
        echo $customer -> getAmountCart();
        echo $product1 ->getSerialNumber();
    @endphp
</main>
@endsection
