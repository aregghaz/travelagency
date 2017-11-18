@extends('page.index')
@section('title')

@endsection
@section('content')

    <div class="accommodation single excursion">
        <div class="container clear">
            <div class="left_block">
                <h1>  {{ $posts->titleRu }}</h1>
                <div class="excursion_info">
                    <div class="top_block clear">
                        <ul class="left_block">
                            <li> Ticket</li>
                            <li> Transport</li>
                        </ul>
                    </div>
                </div>
                <div class="price">
                    <span>Price: </span>
                    {{ $posts->price }}$
                </div>
                <div class="description">
                    {{ $posts->bodyRu }}
                </div>
                <div class="request_form_block clear">
                    <div class="input_block">
                        <label for="setFrom">Set from</label>
                        <div class="ui calendar" id="setFrom">
                            <input type="text" placeholder="Date/Time">
                        </div>
                    </div>
                    <div class="input_block">
                        <label for="setFrom">Visitors</label>
                        <div class="ui" id="visitors">
                            <input type="number" min="1" name="visitors" title="">
                        </div>
                    </div>
                    <div class="add_cart_block">
                        <button class="add_to_cart" data-type="excursion" data-id="11" data-price="37000"
                                data-name="The history of Armenian Cognac">
                            Add to cart
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
                                <a href="/images/turs/{{ $posts->img1 }}">
                                    <div class="img"
                                         style="background: url('{{  URL::to("/images/turs/$posts->img1") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                </a>
                                @if(!empty($posts->img2))
                                    <a href="/images/turs/{{ $posts->img2 }}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img2") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                @endif
                                @if(!empty($posts->img3))
                                    <a href="/images/turs/{{ $posts->img3 }}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img3") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                @endif
                                @if(!empty($posts->img4))
                                    <a href="/images/turs/{{ $posts->img4 }}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img4") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                @endif
                                @if(!empty($posts->img5))
                                    <a href="/images/turs/{{ $posts->img5 }}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img5") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                @endif
                                @if(!empty($posts->img6))
                                    <a href="/images/turs/{{ $posts->img6 }}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img6") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                @endif
                                @if(!empty($posts->img7))
                                    <a href="/images/turs/{{ $posts->img7 }}">
                                        <div class="img"
                                             style="background: url('{{  URL::to("/images/turs/$posts->img7") }}') no-repeat;background-size: cover;background-position: center;"></div>
                                    </a>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection