@extends('page.index')
@section('title')

@endsection
@section('content')

    <section id="contnet">
        <div class="container">
            <div class="row">
                <!-- Start Heading -->
                <div class="heading">
                    <div class="section-title text-center" style="font-size: 60px">All tours</div>
                </div>
                <!-- End Heading -->
                <!-- Portfolio controls -->
                <div class="controls text-center">
                    <a class="filter active" data-filter="all">All</a>
                    <a class="filter" data-filter=".heal">Healing</a>
                    <a class="filter" data-filter=".extreme">Extreme</a>
                    <a class="filter" data-filter=".culture">Culture</a>
                    <a class="filter" data-filter=".gastronomy">Gastronomy</a>
                    <a class="filter" data-filter=".weekend">Weekend</a>
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
                            <a href="/images/turs/{{ $post->linkEn }}" target="_blank"><i class="icon-link left"></i></a>
                            <a  data-toggle="modal" data-target=".{{$post->id}}" ><i class="icon-eye right"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3><a href="#">{{ $post->titleEn }}</a></h3>
                        <p>{{$post->days}} days / {{$post->night}} nights <br> Price: {{ $post->price }} AMD</p>
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