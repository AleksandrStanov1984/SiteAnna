<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/app.scss">
    <title>@yield('title')</title>
</head>

<body class="bg-dark text-white">

<div style="font-family:Verdana, Arial, Helvetica, sans-serif;" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal " data-toggle="tooltip" data-placement="top" title="Студия Красоты Анны Милишь">Студия Красоты Анны Милишь</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="home" data-toggle="tooltip" data-placement="top" title="Главная">Главная</a>
        <a class="p-2 text-white" href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Enterprise</a>
        <a class="p-2 text-white" href="ourContacts" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Контакты</a>
        <a class="p-2 text-white" href="about" data-toggle="tooltip" data-placement="top" title="Про нас">Про нас</a>
    </nav>
    <a class="btn btn-warning" href="review" data-toggle="tooltip" data-placement="top" title="Отзывы">Отзывы</a>
</div>

{{--<div class="embed-responsive embed-responsive-21by9">--}}
{{--    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>--}}
{{--</div>--}}




{{--<div class="container">--}}
{{--    <!-- Trigger the modal with a button -->--}}
{{--    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}

{{--    <!-- Modal -->--}}
{{--    <div class="modal show" id="myModal" role="dialog">--}}
{{--        <div class="modal-dialog">--}}

{{--            <!-- Modal content-->--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                    <h4 class="modal-title">Modal Header</h4>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <p>Some text in the modal.</p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

<div class="container">
    @yield('main_content')
</div>
<div class="footer">
    @yield('footer_content')
</div>
<div>
    <div>
        <a class="btn btn-social-icon btn-sm btn-instagram">
            <span class="fa fa-facebook"></span>
        </a>
    </div>

<div id="footer" style="margin-bottom: 50px; margin-top: 50px"> &copy; Stanov A.</div>
</div>

</body>
</html>
