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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/app.scss">
    <link rel="stylesheet" href="../css/iconButtons.scss">

    <style>
        ul.social-network {
            list-style: none;
            display: inline;
            margin-left:0 !important;
            padding: 0;
        }
        ul.social-network li {
            display: inline;
            margin: 0 5px;
        }

        .social-network a.icoRss:hover {
            background-color: #F56505;
        }
        .social-network a.icoInstagram:hover {
            background-color: orangered;
        }
        .social-network a.icoFacebook:hover {
            background-color:#3B5998;
        }
        .social-network a.icoTwitter:hover {
            background-color:#33ccff;
        }
        .social-network a.icoGoogle:hover {
            background-color:#BD3518;
        }
        .social-network a.icoVimeo:hover {
            background-color:#0590B8;
        }
        .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
            color:#fff;
        }
        a.socialIcon:hover, .socialHoverClass {
            color:#44BCDD;
        }

        .social-circle li a {
            display:inline-block;
            position:relative;
            margin:0 auto 0 auto;
            -moz-border-radius:30%;
            -webkit-border-radius:30%;
            border-radius:30%;
            text-align:center;
            width: 30px;
            height: 30px;
            font-size:20px;
            background-color: #D3D3D3;
        }
        .social-circle li i {
            margin:0;
            line-height:50px;
            text-align: center;
        }

        .social-circle li a:hover i, .triggeredHover {
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -ms--transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            -ms-transition: all 0.2s;
            transition: all 0.2s;
        }
        .social-circle i {
            color: #fff;
            -webkit-transition: all 0.8s;
            -moz-transition: all 0.8s;
            -o-transition: all 0.8s;
            -ms-transition: all 0.8s;
            transition: all 0.8s;
        }

    </style>
    <title>@yield('title')</title>
</head>

<body class="bg-dark text-white">

<div style="font-family:Verdana, Arial, 'Harlow Solid Italic', sans-serif; font-style: italic; font-size: 15px"
     class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal " data-toggle="tooltip" data-placement="top"
        title="Студия Красоты Анны Милишь">Студия Красоты Анны Милиш</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="home" data-toggle="tooltip" data-placement="top" title="Главная">Главная</a>
        <a class="p-2 text-white" href="#" data-toggle="tooltip" data-placement="top"
           title="Tooltip on top">Enterprise</a>
        <a class="p-2 text-white" href="ourContacts" data-toggle="tooltip" data-placement="top" title="Контакты">Контакты</a>
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

<footer style="margin-top: 50px">
    <div class="container">
        <div class="row">
            <div>
                <ul class="social-network social-circle">
                    <li>
                        <a href="https://www.instagram.com/anna_colorist_stilist/?hl=ru" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/odessasvadba" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="icoGoogle" title="YouTube"><i class="fa fa-youtube" title="YouTube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div  class="text-white" style="text-align: center; margin-top: 50px">
            <p>Copyright &copy;2020 by Aleksandr A. Stanov</p>
        </div>
    </div>
</footer>


</body>
</html>
