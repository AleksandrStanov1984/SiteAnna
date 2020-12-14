@extends('layout')

@section('title')Отзывы@endsection

@section('main_content')
    <h1>Форма добавления отзыва</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $er)
                    <li>{{$er}}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="post" action="review/check">
    @csrf
    <input type="name" name="name" id="name" placeholder="Введите Ваше имя"
           class="form-control"><br>

    <input type="email" name="email" id="email" placeholder="Введите Вашу почту"
           class="form-control"><br>

    <input type="text" name="subject" id="subject" placeholder="Тема отзыва"class="form-control"><br>

    <textarea type="text" name="message" id="message" maxlength="255" placeholder="Введите Ваш отзыв. Мы надеимся Вам все понравилось"
              class="form-control"></textarea><br>
    <button type="submit"class="btn btn-success">Отправить</button>
</form>

    <br><br>

    <div style="margin-left: 50px; margin-right: 50px; border: solid 1px yellow"></div>
    <br>

    <h1>Все отзывы</h1>

    @foreach($reviews as $el)
<div class="card bg-info text-white">
    <h3 class="text-dark">{{$el->subject}}</h3>
    <b>{{$el->name}}</b>
    <p>{{$el->message}}</p>
</div>
<br><br>
    @endforeach

@endsection

@section('footer_content')


@endsection
