@extends('page.index')
@section('title')

@endsection
@section('content')

    <div class="accommodation single excursion">
        <div class="container clear">
            <div class="left_block">
                <h1>  {{ $posts->titleEn }}</h1>
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
                    {{ $posts->bodyEn }}
                </div>
                <div class="description">
                    <a href="/images/turs/{{ $posts->linkEn }}">Read more about this tours</a>
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
            <div class="right_block" ng-controller="aMapCtr" id="singleID" data-id="65">

                <div class="best_price">
                    <div class="price_title">
                        Best price in month
                    </div>
                </div>
                <div class="best_price_block">
                    <div class="accommodation_block">
                        <div class="container clear">
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/abaa0478aee98f2dc6ceac40b894f6d882a22c84.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/garni-temple.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Garni Temple</p>
                                                    <p>Garni</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block"></span>

                                    </div>
                                    <div class="bottom_block">
                                        86,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/31e2cd3b90dfeeca828f349c9ca087273256b737.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/historical-oshakan.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Historical Oshakan</p>
                                                    <p>Oshakan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>3 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        86,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/ec7017a4a719a127b7f216ce373ecb199bbfbaf8.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/astronomical-byurakan.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Astronomical Byurakan</p>
                                                    <p>Byurakan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>3 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        94,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/f9979975aa348ba571f593f88ee1cf12e22f515d.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/the-history-of-armenian-cognac.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>The history of Armenian Cognac</p>
                                                    <p>Yerevan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>2 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        37,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/30ddb76b8d4e19b04ef353ac68b190448fdfed0c.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/the-cultural-heritage-of-erebuni.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>The cultural heritage of Erebuni</p>
                                                    <p>Erebuni Museum</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>3 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        52,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/2fa6fddbf21bb96f52c8f126abc9b04821a73475.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/acquaintance-with-yerevan.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Acquaintance with Yerevan</p>
                                                    <p>Yerevan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>1 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        21,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/ea455f4286c3184525283ab1598479dd8fa18d47.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/the-history-of-armenian-national.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>The history of armenian national</p>
                                                    <p>Yerevan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>2 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        31,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/764d0336daf4db25e9eae964eb8b0e88db7b5081.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/sevan-lake.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Sevan Lake</p>
                                                    <p>Sevan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>4 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        94,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/1fb2409643e0380d8b10813f9f06244ad82d8348.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/remember-and-demand.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Remember and Demand</p>
                                                    <p>Memorial complex Tsitsernakaberd</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>2 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        51,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/f1a308b71e6611ccba9879beba1d7e2934204ca5.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/haghartsin-george.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Haghartsin george</p>
                                                    <p>Haghartsin</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>4 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        87,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/e6dc449ae90d7836a3bc30b5e1c610ea0d42c81f.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/ancient-armenian-architecture.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Ancient armenian architecture</p>
                                                    <p>Goshavank</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>3 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        87,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/df458deda8b84b8b2510136033beeb31a893549b.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/monuments-of-medieval-armenia.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Monuments of medieval Armenia</p>
                                                    <p>Makaravank</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>5 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        62,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/cd446ee259a24ae56e954f5dc59ce6352d801740.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/world-heritage-of-unesco.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>World Heritage of UNESCO</p>
                                                    <p>Haghpat</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>7 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        178,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/2de8de3ae9bca51c1a09d86480e631a659f46f73.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/botanic-garden-of-armenia.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Botanic garden of Armenia</p>
                                                    <p>Stepanavan Dendropark</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>6 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        178,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/ea1846ce17ac856918b2697781324e32f8c3ca57.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/ancient-armenia.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Ancient Armenia</p>
                                                    <p>Khor Virap</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>3 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        81,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/5add6ee8ec9da817dedf5221700a29132f4ff7a7.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/kingdom-of-gorges.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Kingdom of gorges</p>
                                                    <p>Noravanq-Areni</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>4 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        79,000
                                    </div>
                                </div>
                            </div>
                            <div class="excursion_box">
                                <div class="accommodation_box"
                                     style="background: url('/uploads/media/6b012d6baa129f243ef5c02d03ef9889c0803bfd.jpeg') no-repeat;background-size: cover;background-position: center center;">
                                    <a href="/en/excursion/masterpiece-of-armenian-architecture.html">
                                        <div class="overlay">
                                            <div class="see_more">
                                                See more
                                            </div>
                                            <div class="accommodation_title_block clear">
                                                <div class="left_block">
                                                    <p>Masterpiece of armenian architecture</p>
                                                    <p>Qarahunj- Tatev</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="excursion_info">
                                    <div class="top_block clear">
                                        <ul class="left_block">
                                            <li> Guide</li>
                                            <li> Ticket</li>
                                            <li> Transport</li>
                                        </ul>
                                        <span class="right_block">
                                                                                                <i class="fa fa-clock-o"></i>9 h. 0 m.
                            </span>
                                    </div>
                                    <div class="bottom_block">
                                        145,000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection