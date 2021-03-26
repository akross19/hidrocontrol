<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('/images/favicon.png') }}">
        <link rel="shortcut icon" sizes="48x48" href="{{ asset('/images/favicon.png') }}">

        <title>Hidrocontrol</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #41b5be;
                color: #636b6f;
                font-family: "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-weight: 400;
                height: 100vh;
                margin: 0;
            }

            .masthead {
                padding-top: 10rem;
                padding-bottom: 8rem;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 34px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                font-size: 32px;
                color: #455a64;
                font-family: Arial;
                text-decoration: none;
                left: 34px;
                top: 6px;
            }

            .content {
                text-align: center;
            }

            .page-section {
                padding: 2.5rem 0;
                width: 1250px;
            }

            .header-section {
                font-size: 2.25rem;
                line-height: 2rem;
            }

            .divider-custom {
                margin: 1.25rem 0 1.5rem;
                width: 100%;
                display: flex;
                -webkit-box-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                align-items: center;
            }

            .divider-custom-line {
                width: 100%;
                max-width: 7rem;
                height: 0.25rem;
                border-radius: 1rem;
            }

            .divider-custom-line:first-child {
                margin-right: 1rem;
            }
            .divider-custom .divider-custom-line:last-child {
                margin-left: 1rem;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                margin-right: auto;
                margin-left: auto;
            }

            .col-div-2 {
                position: relative;
                -webkit-box-flex: 0;
                flex: 0 0 42%;
                max-width: 42%;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
            }

            .col-div-3 {
                position: relative;
                -webkit-box-flex: 0;
                flex: 0 0 33.33333%;
                max-width: 33.33333%;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
            }

            .container {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            .sub-container {
                margin-right: 150px;
                margin-left: 150px;
            }

            .title {
                font-size: 84px;
            }

            .secondary-title {
                text-transform: uppercase;
                display: block;
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
                margin-block-start: 1.33em;
                margin-block-end: 1.33em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
            }

            .text-regular {
                font-size: 1.25rem;
                font-weight: 500;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links-menu > a {
                color: #fff;
                padding: 0 25px;
                font-size: 1rem;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links-menu > a:hover {
                background-color: #f2db55;
                color: #212121;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .topnav {
                background-color: #fff;
                position: absolute;
                width: 100%;
                height: 62px;
                top: 0px;
            }

            .text-center {
                text-align: center;
            }

            .div-center {
                display: flex;
                justify-content: center;
                align-content: center;
                flex-direction: column;
            }

            .btn {
                display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                border: 1px solid transparent;
                padding: .375rem .75rem;
                font-size: 1.5rem;
                line-height: 1.5;
                border-radius: .25rem;
                transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }
            
            .btn:focus, .btn:hover {
                text-decoration:none;
            }
            
            .btn.focus, .btn:focus {
                outline: 0;
                box-shadow: 0 0 0 .2rem rgba(0,123,255,.25);
            }

            .btn.disabled, .btn:disabled {
                opacity: .65;
            }

            .btn-outline-white {
                color: #fff;
                background-color: transparent;
                background-image: none;
                border-color: #fff;
            }
            
            .btn-outline-white:hover {
                color: #41b5be;
                background-color: #fff;
                border-color: #fff;
            }
            
            .btn-outline-white.focus, .btn-outline-white:focus {
                box-shadow: 0 0 0 .2rem rgba(255,193,7,.5);
            }
            
            .btn-outline-white.disabled, .btn-outline-white:disabled {
                color: #fff;
                background-color: transparent;
            }
            
            .btn-outline-white:not(:disabled):not(.disabled).active,.btn-outline-white:not(:disabled):not(.disabled):active,.show>.btn-outline-white.dropdown-toggle{
                color: #41b5be;
                background-color: #fff;
                border-color: #fff;
            }

            .footer {
                padding-top: 5rem;
                padding-bottom: 5rem;
                background-color: #2D2D2D;
                color: #fff;
            }

            .copyright {
                background-color: #191919;
                padding-bottom: 0.5rem;
                padding-top: 0.5rem;
            }

            #map {
                width: 100%;
                height: 180px;
                background-color: rgb(243, 10, 88);
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref">

            <div class="topnav">
            @if (Route::has('login'))
                <a class="navbar-brand top-left" href="{{ url('/') }}">
                    <img style="vertical-align: middle;" src="{{asset('images/favicon.png')}}"><span style="margin-left: 8px">Hidrocontrol</span>
                </a>
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Panel Administrador</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif
            </div>

            <div class="content">

                <!-- Masthead -->
                <header class="masthead">
                    <div class="title m-b-md">
                        <img style="vertical-align: bottom" src="{{asset('images/logo.png')}}" width="128" height="128">
                        <img src="{{asset('images/hidrocontrol_title.png')}}">
                    </div>

                    <div class="links-menu">
                        <a href="#hidrocontrol">¿Qué es Hidrocontrol?</a>
                        <a href="#descargar">Descargar</a>
                        <a href="#nosotros">Nosotros</a>
                        <a href="#contacto">Contacto</a>
                    </div>
                </header>

                <!-- Hidrocontrol Section -->
                <section style="background-color: #fff;" class="page-section" id="hidrocontrol">
                    <div class="container">
                        <h2 style="color: #455a64;" class="header-section">¿Qué es Hidrocontrol?</h2>
                        <div class="divider-custom">
                            <div style="background-color: #455a64;" class="divider-custom-line"></div>
                            <img src="{{asset('images/ic_foco.png')}}" width="42" height="42">
                            <div style="background-color: #455a64;" class="divider-custom-line"></div>
                        </div>
                        <div class="row">
                            <div style="margin-left: 40px;" class="col-div-2">
                                <img src="{{asset('images/hidrocontrol_mockups.png')}}" width="270" height="450">
                            </div>
                            <div style="margin-left: 60px;" class="col-div-2">
                                <p class="text-regular">Hidrocontrol es una aplicación móvil que funciona en conjunto con la tecnología de Arduino UNO para obtener datos sobre el consumo de agua en los tinacos, la cantidad consumida de agua es almacenada en una base de datos, que la aplicación utiliza para el control del flujo de agua con el fin de evitar perdida, regular el consumo y dar sugerencias para ahorrar agua.</p>
                                <p class="text-regular"><b>IMPORTANTE:</b> Esta aplicación es exclusiva para el personal que corresponda perteneciente a la Universidad Tecnológica del Centro de Veracruz (UTCV).</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Descargar Section -->
                <section class="page-section" id="descargar">
                    <div class="container">
                        <h2 style="color: #fff;" class="header-section">Descargar</h2>
                        <div class="divider-custom">
                            <div style="background-color: #fff;" class="divider-custom-line"></div>
                            <img src="{{asset('images/ic_grifo.png')}}" width="42" height="42">
                            <div style="background-color: #fff;" class="divider-custom-line"></div>
                        </div>
                        <div class="sub-container">
                            <p style="color: #fff;" class="text-regular">A continuación puedes descargar la aplicación de Hidrocontrol haciendo clic en el botón de abajo, es necesario estar registrado previamente para acceder a la aplicación móvil (Disponible para sistemas operativos Android y iOS).</p>
                            <form style="padding-top: 24px;" action="https://play.google.com/store">
                                <input type="submit" class="btn btn-outline-white" value="Descargar" />
                            </form>
                        </div>
                    </div>
                </section>

                <!-- Nosotros Section -->
                <section style="background-color: #fff;" class="page-section" id="nosotros">
                    <div class="container">
                        <h2 style="color: #455a64;" class="header-section">Nosotros</h2>
                        <div class="divider-custom">
                            <div style="background-color: #455a64;" class="divider-custom-line"></div>
                            <img src="{{asset('images/ic_grafica.png')}}" width="42" height="42">
                            <div style="background-color: #455a64;" class="divider-custom-line"></div>
                        </div>
                        <div class="row">
                            <div class="col-div-2">
                                <p class="text-regular">La empresa AquaSystems siempre busca estar a la vanguardia de la tecnología en la solución de problemas ambientales de todo tipo, desde lo básico hasta lo complejo.</p>
                                <p class="text-regular">Nuestro objetivo como empresa es brindar a nuestros clientes soluciones satisfactorias y ecológicas, porque en AquaSystems creamos</p>
                                <p class="text-regular"><b>– “Sistemas con calidad de vida”.</b></p>
                            </div>
                            <div style="padding-left: 100px;" class="col-div-2">
                            <img src="{{asset('images/logo_aquasystems.png')}}" width="510" height="300">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contacto Section -->
                <footer class="footer text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-div-3">
                                <h4 class="secondary-title">Redes sociales</h4>
                                <p class="text-regular"><img src="{{asset('images/facebook_icon.png')}}" width="64" height="64"><img style="margin-left: 15px;" src="{{asset('images/twitter_icon.png')}}" width="64" height="64"></p>
                            </div>
                            <div class="col-div-3">
                                <h4 class="secondary-title">Datos de contacto</h4>
                                <p class="text-regular">Correo Electrónico:<br>hidrocontrol@utcv.edu.mx<br>Teléfono:<br>+52 271 224 6139</p>
                            </div>
                            <div class="col-div-3">
                                <h4 class="secondary-title">Dirección</h4>
                                <div id="map"></div>
                                <script>
                                    // Inicializar y agregar el mapa
                                    function initMap() {
                                        // La ubicación de utcv
                                        var utcv = {lat: 18.861040, lng: -96.886470};
                                        // El mapa, centrado en utcv
                                        var map = new google.maps.Map(document.getElementById('map'), {zoom: 17, center: utcv});
                                        // El marcador, posicionado en utcv
                                        var marker = new google.maps.Marker({position: utcv, map: map});
                                    }
                                </script>
                                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8TGJpHOTlttD4I6ZEDbvXuETTpC-i9ps&callback=initMap" type="text/javascript"></script>
                            </div>
                        </div>
                    </div>
                </footer>

                <!-- Copyright Section -->
                <section class="copyright text-center">
                    <div class="container">
                        <small>Copyright © Hidrocontrol 2021</small>
                    </div>
                </section>

            </div>
        </div>
    </body>
</html>
