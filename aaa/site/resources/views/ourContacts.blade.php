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

{{--<div id="map">My map will go here</div>--}}
{{--<div id="map" style="width:100%;height:400px;"></div>--}}

{{--<script>--}}
{{--    function myMap() {--}}
{{--        var mapCanvas = document.getElementById("map");--}}
{{--        var mapOptions = {--}}
{{--            center: new google.maps.LatLng(51.5, -0.2), zoom: 10--}}
{{--        };--}}
{{--        var map = new google.maps.Map(mapCanvas, mapOptions);--}}
{{--    }--}}
{{--</script>--}}

{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR8P72HMX3zllKeeZt8X89dJWMEu0LSX8&callback=myMap" async defer></script>--}}


{{--    <div class="card text-white bg-warning mb-3" style="max-width: 180rem;">--}}
{{--        <div class="card-header">Как нас найти</div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="map-responsive">--}}
{{--                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2751.4637899237173!2d30.7074193!3d46.3998592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6334567afbfc5%3A0x8583e4b7000e50b0!2zMS8zLCDQk9GA0LDQvdC40YLQvdCw0Y8g0YPQuy4sINCb0LjQvNCw0L3QutCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1607254599470!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row">
        <div class="col-sm-6">
            <div class="card border-warning mb-3" style="max-width: 150rem; border: solid 2px">
                <div class="card-body">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card border-warning mb-3" style="max-width: 150rem;" >
                <div class="card-body">
                    <h5 class="card-title">Специальный заголовок</h5>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2751.4637899237173!2d30.7074193!3d46.3998592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6334567afbfc5%3A0x8583e4b7000e50b0!2zMS8zLCDQk9GA0LDQvdC40YLQvdCw0Y8g0YPQuy4sINCb0LjQvNCw0L3QutCwLCDQntC00LXRgdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2NTAwMA!5e0!3m2!1sru!2sua!4v1607254599470!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
