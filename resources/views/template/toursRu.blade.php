@extends('page.indexRu')
@section('title')

@endsection
@section('content')

    <div class="accommodation single excursion">
        <div class="container clear">
            <div class="left_block">
                <h1>  {{ $posts->titleRu }}</h1>

                <div class="price">
                    <span>Цена: </span>
                    {{ $posts->price }}$
                </div>
                <div class="description">
                    {{ $posts->bodyRu }}
                </div>
                <div class="description">
                    <a href="/images/turs/{{ $posts->linkRu }}">Узнайте больше об этих турах</a>
                </div>
                <div class="request_form_block clear">
                    <div class="input_block">
                        <label for="setFrom">Набор из</label>
                        <div class="ui calendar" id="setFrom">
                            <input type="text" placeholder="Date/Time">
                        </div>
                    </div>
                    <div class="input_block">
                        <label for="setFrom">Посетители</label>
                        <div class="ui" id="visitors">
                            <input type="number" min="1" name="visitors" title="">
                        </div>
                    </div>
                    <div class="add_cart_block">
                        <button class="add_to_cart" data-type="excursion" data-id="11" data-price="37000"
                                data-name="The history of Armenian Cognac">
                            Добавить в корзину
                        </button>
                    </div>
                </div>
                <div class="gallery_block">
                    <div class="general_image">
                        <img src="/images/turs/{{ $posts->img1 }}" alt="">
                    </div>
                    <div class="image_thumb_block">
                        <div class="gallery_carousel clear">
                            <div class="slide" style="width: 1910px;">
                                <a data-toggle="modal" data-target=".{{$posts->img1}}" >

                                    <div class="img" style="background: url('{{  URL::to("/images/turs/$posts->img1") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                </a>
                                <div class="modal fade {{$posts->img1}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">

                                        <img src="{{  URL::to("/images/turs/$posts->img1") }}" alt="">

                                    </div>
                                </div>
                                @if(!empty($posts->img2))
                                    <a data-toggle="modal" data-target=".{{$posts->img2}}" >
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img2") }}') no-repeat;background-size: cover;background-position: center;">

                                        </div>
                                    </a>
                                    <div class="modal fade {{$posts->img2}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">

                                            <img src="{{  URL::to("/images/turs/$posts->img2") }}" alt="">

                                        </div>
                                    </div>
                                @endif
                                @if(!empty($posts->img3))
                                    <a data-toggle="modal" data-target=".{{$posts->img3}}" >
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img3") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                    <div class="modal fade {{$posts->img3}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">

                                            <img src="{{  URL::to("/images/turs/$posts->img3") }}" alt="">

                                        </div>
                                    </div>
                                @endif
                                @if(!empty($posts->img4))
                                    <a data-toggle="modal" data-target=".{{$posts->img4}}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img4") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                    <div class="modal fade {{$posts->img4}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">

                                            <img src="{{  URL::to("/images/turs/$posts->img4") }}" alt="">

                                        </div>
                                    </div>
                                @endif

                                @if(!empty($posts->img5))
                                    <a data-toggle="modal" data-target=".{{$posts->img5}}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img5") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                    <div class="modal fade {{$posts->img5}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">

                                            <img src="{{  URL::to("/images/turs/$posts->img5") }}" alt="">

                                        </div>
                                    </div>
                                @endif
                                @if(!empty($posts->img6))
                                    <a data-toggle="modal" data-target=".{{$posts->img6}}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img6") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                    <div class="modal fade {{$posts->img6}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">

                                            <img src="{{  URL::to("/images/turs/$posts->img6") }}" alt="">

                                        </div>
                                    </div>
                                @endif
                                @if(!empty($posts->img7))
                                    <a data-toggle="modal" data-target=".{{$posts->img7}}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img7") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                    <div class="modal fade {{$posts->img7}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-lg" role="document">

                                            <img src="{{  URL::to("/images/turs/$posts->img7") }}" alt="">

                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection