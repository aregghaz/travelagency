@extends('page.indexRu')
@section('title')

@endsection
@section('content')
    <style>
        .portfolio-item .content h3 {
            color: white;!important;
        }
    </style>
    <section id="contnet">
        <div class="container">
            <div class="row">
                <!-- Start Heading -->
                <div class="heading">
                    <div class="section-title text-center" style="font-size: 60px">Туры по категориям</div>
                </div>
                <!-- End Heading -->
                <!-- Portfolio controls -->
                <div class="controls text-center">
                    <a class="filter active" data-filter="all">All</a>
                    <a class="filter" data-filter=".heal">Целебный</a>
                    <a class="filter" data-filter=".extreme">Экстрим</a>
                    <a class="filter" data-filter=".culture">Культура</a>
                    <a class="filter" data-filter=".gastronomy">Гастрономия</a>
                    <a class="filter" data-filter=".weekend">Выходные</a>
                    <a class="filter" data-filter=".hotTours">ГОРЯЧИЕ ТУРЫ</a>
                </div>
                <!-- End Portfolio Controls -->
            </div>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio-list">
            @foreach($posts as $post)
                <div class="col-md-3 col-sm-6 col-xs-12 mix {{ $post->role }}" style="display: inline-block;">
                    <div class="portfolio-item">

                        <img src="{{  URL::to("/images/turs/".$post->img1) }}" height="250px" alt="">
                        <div class="overlay">
                            <div class="icon">
                                <a href="/images/turs/{{ $post->linkRu }}" target="_blank"></a>
                            </div>
                        </div>
                        <a href="/images/turs/{{ $post->linkRu }}">
                            <div class="content">
                                <h3>{{ $post->titleRu }}</h3><br>
                                <p>{{  $post->days  }} / {{  $post->night   }}</p>
                                <p class="USD"> Цена: {{ $post->price }} AMD</p>
                            </div>
                        </a>

                    </div>

                </div>

                <input type="hidden" name="price" class="price" value="{{$post->price}}">
                <input type="hidden" name="price" class="priceRub" value="{{$post->price}}">
                <input type="hidden" name="price" class="priceEur" value="{{$post->price}}">


            @endforeach
        </div>
        <!-- End Portfolio  -->
        <div class="clearfix"></div>

    </section>

    <script type="text/javascript" src="{{ URL::to('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap-select.min.js') }}"></script>
@endsection