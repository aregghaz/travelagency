@extends('page.indexRu')
@section('title')

@endsection
@section('content')
    <style>
        #google-map, body, html {
            padding: 0;
            height: 400px;
        }
        .support {
            padding-top: 60px;
        }
        .support-inner h4 {
            font-size: 20px;
            font-weight: normal;
            text-align: center;
        }
        .support-inner .support-info {
            position: relative;
            box-shadow: 1px 1px 3px 1px #e3e4e7;
            padding: 20px 80px;
            margin-top: 20px;
            height: 100px;
        }
        .section {
            padding: 60px 0;
        }
        .section-title {
            font-size: 24px;
            letter-spacing: 0.1em;
            padding: 0px 0px 20px;
            text-transform: uppercase;
            font-weight: 700;

        }
        .btn-common {
            background: #fca955;
            position: relative;
        }
        .support-inner .support-info .info-title i {
            color: #fca955;
            font-size: 30px;
            left: 25px;
            position: absolute;
            top: 20px;
            width: 48px;
            height: 48px;
            display: block;
            text-align: center;
            line-height: 48px;

        }
        .support-inner .support-info .info-title {
            color: #333;
            font-size: 15px;
            font-weight: 700;
        }
        .g-recaptcha div {
            width: auto!important;
            height: auto!important;
        }
    </style>
    <div id="google-map" style="position: relative; overflow: hidden;">

    </div>
    <div class="support">
        <div class="container">
            <div class="row">
                <div class="support-inner">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Контактные телефоны</h4>
                        <div class="support-info">
                            <div class="info-title">
                                <i class="volume control phone icon"></i>
                                +7 (958) 401 28 44<br>
                                +374 55 42 54 52<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Адрес</h4>
                        <div class="support-info">
                            <div class="info-title">
                                <i class="location arrow icon"></i>

                                <span>Армения Ереван 0076, пр. Гая 37</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <h4>Электронный адрес</h4>
                        <div class="support-info">
                            <div class="info-title">
                                <i class="mail outline icon"></i>
                                contact@discoverarmenia.tours

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">
                        ОТПРАВИТЬ СООБЩЕНИЕ
                    </h2>
                    <!-- Form -->
                    <form id="contactForm" class="contact-form"  action="{{route('sendEmailRu')  }}" method="post" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Введите Ваше имя" required="" data-error="Введите Ваше имя">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Введите адрес электронной почты" required="" data-error="Введите адрес электронной почты">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="msg_phone" name="phone" placeholder="Введите ваш номер телефона" required="" data-error="Введите ваш номер телефона">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Тема" required="" data-error="Введите свой вопрос">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="сообщение" name="message" rows="10" data-error="Write your message" required=""></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! app('captcha')->display() !!}
                            <div class="col-md-12">
                                <input type="hidden" name="_token" value="{{  Session::token() }}">
                                <button type="submit" id="submit" class="btn btn-common disabled" style="pointer-events: all;cursor: pointer;color: white;opacity: 1;">Отправить сообщение</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>
    <script type="text/javascript">
        var map;
        var defult = new google.maps.LatLng(40.194201, 44.569779,17);
        var mapCoordinates = new google.maps.LatLng(40.194201, 44.569779,17);


        var markers = [];
        var image = new google.maps.MarkerImage(
                'flags/map-marker.png',
                new google.maps.Size(84, 70),
                new google.maps.Point(0, 0),
                new google.maps.Point(60, 60)
        );

        function addMarker() {
            markers.push(new google.maps.Marker({
                        position: defult,
                        raiseOnDrag: false,
                        icon: image,
                        map: map,
                        draggable: false
                    }
            ));

        }

        function initialize() {
            var mapOptions = {
                        backgroundColor: "#ffffff",
                        zoom: 18,
                        disableDefaultUI: true,
                        center: mapCoordinates,
                        zoomControl: true,
                        scaleControl: true,
                        scrollwheel: true,
                        disableDoubleClickZoom: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,



                    }
                    ;
            map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
            addMarker();

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection