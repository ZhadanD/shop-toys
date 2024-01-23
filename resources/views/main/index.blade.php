<?php
$title = 'Главная'
?>
@extends('layouts.main')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Детский мир</h1>
                <p class="lead text-body-secondary">Сеть магазин по продаже мягких игрушек</p>
            </div>
        </div>
    </section>

    <div class="album py-5 border border-success rounded">
        <h3 class="text-center mb-5">Новости</h3>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                $news = [
                    'Завез новых игрушек' => 'Завезли новые игрушки!!!',
                    'Распродажа мишек' => 'Успейте купить медведя по суперской цене!',
                    'Осталось 3-и штуки!!!' => 'Осталось всего 3-и плюшевых собачки, успейте купить!'
                ];
                ?>

                @foreach($news as $key => $value)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Новость" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $key }}</text></svg>
                            <div class="card-body">
                                <p class="card-text">{{ $value }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
