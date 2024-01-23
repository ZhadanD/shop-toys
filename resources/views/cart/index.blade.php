<?php
$title = 'Корзина'
?>
@extends('layouts.main')
@section('content')
    @if(count($products) == 0)
        <h3 class="text-danger">Корзина пуста</h3>
    @endif

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($products as $product)
                <div class="col">
                    <div class="card shadow-sm p-3">
                        <img width="300" src="{{ $product->img  }}" alt="Фото товара">

                        <h3 class="text-center">Цена: {{ $product->price  }} руб.</h3>

                        <div class="card-body">
                            <p class="card-text">{{ $product->description  }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
