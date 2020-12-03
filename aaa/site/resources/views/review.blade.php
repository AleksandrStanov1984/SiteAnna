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

    <input type="text" name="subject" id="subject" placeholder="Ваш отзыв"class="form-control"><br>

    <textarea name="message" id="message" placeholder="Введите Ваш отзых, мы надеимся Вам все понравилось"
              class="form-control"></textarea><br>
    <button type="submit"class="btn btn-success">Отправить</button>
</form>
@endsection
