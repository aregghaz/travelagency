@extends('page.index')
@section('title')

@endsection
@section('content')
   
    <style>

        .property-highlights {
            background: url("../img/bg/home-back-1.jpg");
            background-position: cover;
            padding: 60px 0;
            color: #fff;
        }
        .property-highlights .title-hl {
            font-size: 42px;
            margin-bottom: 26px;
        }
        .property-highlights .content-hl {
            margin-bottom: 10px;
        }
        .property-highlights .btn {
            margin-top: 20px;
        }
        .features-box {
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .features-box .features-icon {
            float: left;
            padding: 2px;
        }
        .features-box .features-icon i {
            color: #4caf50;
            font-size: 30px;
        }
        .features-box .features-content {
            padding-left: 50px;
        }
        .features-box .features-content h4 {
            color: #fff;
            font-size: 15px;
            margin-bottom: 5px;
            transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -webkit-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
        }
        #portfolio {
            display: inline-block;
            margin-top: 60px;
        }
        #contnet {
            padding: 60px 0;
            display: inline-block;
        }
        .controls {
            margin: 25px 0;
        }
        .controls a {
            display: inline-block;
            border-radius: 2px;
            cursor: pointer;
            margin: 0px 5px;
            color: #666;
            text-transform: uppercase;
            border: 1px solid #4caf50;
            padding: 10px 15px;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -ms-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        .controls a:hover,
        .controls .active {
            background: #4caf50;
            color: #fff;
        }
        #portfolio-list .mix {
            display: none;
        }
        #products .mix {
            display: none;
        }
        #portfolio-list .mix {
            padding-left: 0;
            padding-right: 0;
        }
        .portfolio-item {
            overflow: hidden;
            display: block;
            position: relative;
        }
        .portfolio-item img {
            zoom: 1;
            width: 100%;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -ms-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }
        .portfolio-item:hover img {
            -webkit-transform: scale(1.4);
            -moz-transform: scale(1.4);
            -ms-transform: scale(1.4);
            -o-transform: scale(1.4);
            transform: scale(1.4);
        }
        .portfolio-item .overlay {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            background-color: rgba(43, 44, 48, 0.8);
            opacity: 0;
            filter: alpha(opacity=0);
            padding: 30px;
            -webkit-transition: all 600ms ease-out 0s;
            -moz-transition: all 600ms ease-out 0s;
            -o-transition: all 600ms ease-out 0s;
            transition: all 600ms ease-out 0s;
        }
        .portfolio-item .icon {
            left: 0px;
            right: 0px;
            width: 42%;
            top: 40%;
            text-align: center;
            position: absolute;
            opacity: 0;
            margin: 0px auto;
            -webkit-transition: all 600ms ease-out 0s;
            -moz-transition: all 600ms ease-out 0s;
            -o-transition: all 600ms ease-out 0s;
            transition: all 600ms ease-out 0s;
        }
        .portfolio-item .icon i {
            width: 48px;
            height: 48px;
            font-size: 18px;
            text-align: center;
            margin-right: 5px;
            display: inline-block;
            margin-left: 5px;
            border: 1px solid #fff;
            color: #fff;
            line-height: 48px;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }
        .portfolio-item .icon i:hover {
            color: #4caf50;
            border-color: #4caf50;
        }
        .portfolio-item .icon .left {
            -webkit-transform: translateY(25px);
            -moz-transform: translateY(25px);
            transform: translateY(25px);
        }
        .portfolio-item .icon .right {
            -webkit-transform: translateY(-25px);
            -moz-transform: translateY(-25px);
            transform: translateY(-25px);
        }
        .portfolio-item .content {
            width: 100%;
            position: absolute;
            bottom: 30px;
            left: 0;
            opacity: 1;
            margin: 0px auto;
            padding: 10px 22px;
            text-align: center;
            -webkit-transform: translateY(90px);
            -moz-transform: translateY(90px);
            transform: translateY(90px);
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            -ms-transition: all 0.4s ease-in-out 0s;
            -o-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }
        .portfolio-item .content h3 {
            color: #31302C;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 400;
            line-height: 33px;
        }
        .portfolio-item .content h3 a {
            color: #fff;
        }
        .portfolio-item .content p {
            color: #fff;
            font-size: 16px;
        }
        .portfolio-item:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
            visibility: visible;
        }
        .portfolio-item:hover .icon {
            opacity: 1;
            filter: alpha(opacity=100);
            visibility: visible;
        }
        .portfolio-item:hover .left {
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            transform: translateY(0px);
        }
        .portfolio-item:hover .right {
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            transform: translateY(0px);
        }
        .portfolio-item:hover .content {
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            transform: translateY(0px);
        }
        .features .desc {
            margin-bottom: 20px;
        }
        .features .features-box .features-content {
            padding: 0;
        }
        .features .features-box .features-content h4 {
            color: #2d2d2d;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 15px;
        }
        .features .features-box .features-content h4 i {
            margin-right: 10px;
            color: #4caf50;
            font-size: 26px;
            vertical-align: middle;
        }
        .features .thum-ft {
            margin-top: 54px;
            box-shadow: 8px 8px 0px rgba(52, 152, 219, 0.7);
            border: 6px solid #4caf50;
        }

    </style>
    <section id="contnet">
        <div class="container">
            <div class="row">
                <!-- Start Heading -->
                <div class="heading">
                    <div class="section-title text-center">All tours</div>
                </div>
                <!-- End Heading -->
                <!-- Portfolio controls -->
                <div class="controls text-center">
                    <a class="filter active" data-filter="all">All</a>
                    <a class="filter" data-filter=".living">Living Room</a>
                    <a class="filter" data-filter=".driveway">Driveway</a>
                    <a class="filter" data-filter=".bedroom">Bedroom</a>
                    <a class="filter" data-filter=".garage">Garage</a>
                    <a class="filter" data-filter=".kitchen">Kitchen</a>
                </div>
                <!-- End Portfolio Controls -->
            </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio-list">
            @foreach($posts as $post)
            <div class="col-md-3 col-sm-6 col-xs-12 mix living bedroom" style="display: inline-block;">
                <div class="portfolio-item">
                    <img src="{{  URL::to("/images/turs/".$post->img1) }}" alt="">
                    <div class="overlay">
                        <div class="icon">
                            <a href="{{ route('toursEn',['id' => $post->id]) }}"><i class="icon-link left"></i></a>
                            <a  data-toggle="modal" data-target=".{{$post->id}}" ><i class="icon-eye right"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3><a href="#">{{ $post->titleEn }}</a></h3>
                        <p>Apartment, cottage, Retail</p>
                    </div>
                </div>
            </div>

                <div class="modal fade {{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">

                        <img src="{{  URL::to("/images/turs/$post->img1") }}" alt="">

                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Portfolio  -->



    </section>

    <script type="text/javascript" src="{{ URL::to('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap-select.min.js') }}"></script>
@endsection