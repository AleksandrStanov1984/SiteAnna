@extends('layout')

@section('title')Контакты@endsection

@section('main_content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Студия Красоты Анны Милишь</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
        <a class="btn btn-warning" href="review">
            <span class="badge badge-light">5</span>
            Отзывы..
        </a>
    </div>

    <style>

        .map-responsive{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>

    <div class="row">
        <div class="col-sm-6">
            <div class="card border-warning mb-3" style="max-width: 150rem; border: solid 2px">
                <div class="card-body">
                    <p class="card-text text-dark" style="font-size: 25px; font-family: 'Harlow Solid Italic';text-align: center">Студия красоты Анны Милиш</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card border-warning mb-3" style="max-width: 150rem;" >
                <div class="card-body">
                    <h5 class="card-title text-dark">Мы всегда рады видить Вас</h5>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2751.4637899237173!2d30.7074193!3d46.3998592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6334567afbfc5%3A0x8583e4b7000e50b0!2zMS8zLCDQk9GA0LDQvdC40YLQvdCw0Y8g0YPQuy4sINCb0LjQvNCw0L3QutCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1607254599470!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align: center">
        <address>
            г. Одесса <br>
            ж/м Радужный <br>
            ул. Гранитная 1/3<br>
            Салон красоты<br>
            Buty Studio Anna Milish<br>
        </address>
    </div>
@endsection
