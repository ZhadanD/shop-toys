<?php
$title = 'Контакты'
?>
@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <img class="border border-success rounded" width="700" src="{{ asset('images/address.png') }}" alt="Карта">
    </div>

    <div class="mt-5 border border-success rounded p-3">
        <ul>
            <li>
                <p class="fs-4">Адрес: ТРЦ "Максимир", Ленинский пр-т., 174Г, Воронеж</p>
            </li>
            <li>
                <p class="fs-4">Телефон: 8 (800) 250-00-00</p>
            </li>
            <li>
                <p class="fs-4">Почта: detmir@mail.ru</p>
            </li>
        </ul>
    </div>

    <div class="mt-5 border border-success rounded p-3">
        <h4>Остались вопросы? Свяжитесь с нами!</h4>

        <form>
            <label for="email">Ваша почта</label>
            <input type="text" name="email" id="email" class="form-control">

            <br/>

            <label for="name">Ваше имя</label>
            <input type="text" name="name" id="name" class="form-control">

            <br/>

            <label for="message">Текст сообщения</label>
            <textarea name="message" id="message" class="form-control"></textarea>

            <br/>

            <button type="button" class="btn btn-success">Связаться</button>
        </form>
    </div>
@endsection
