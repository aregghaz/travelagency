@extends('page.index')

@section('title')

@endsection

@section('content')



    @include('script.script')
    @include('include.social')

    <div class="home_slider_block">
        <div class="home_slider clear slick-initialized slick-slider slick-dotted" role="toolbar">
            <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button"
                    style="">Previous
            </button>
            <div aria-live="polite" class="slick-list">
                <div class="slick-track" style="opacity: 1; display: -webkit-box;" role="listbox">
                    <div class="slide slick-slide slick-current slick-active"
                         style="background: url('/uploads/media/3f2264cfdb110fbf5cd00c2befc5cf49ebe65c07.gif') center center / cover no-repeat; width: 100%; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                         data-slick-index="0" aria-hidden="false" tabindex="-1" role="option"
                         aria-describedby="slick-slide00">
                        <div class="container">
                            <div class="description_block">
                                <div class="sldie_title">Tours</div>
                                <div class="description">We are engaged in creating individual and group tours. We offer
                                    you
                                    classical, pilgrim, extreme, cooking tours etc. During the tours you will discover
                                    Armenia from different sides. You will get acquanted with the culture and traditions
                                    of
                                    the country.
                                </div>
                                <div class="link_button">
                                    <a href="{{ route('allToursEn') }}" tabindex="0">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>

    </div>

    <div class="info_block">
        <div class="container clear">
            <div class="left_block image">
                <img src="/bundles/damain/images/info_img.png" alt="Discover Armenia">
            </div>
            <div class="right_block content">
                <h2>Discover the land of mystery with us</h2>

                <div id="post">
                    <p class="collapsed">
                        Armenia is situated at a cultural, historical, and religious intersection and located at the crossroads between Europe and Asia. The
                        <a href="http://google-maps.pro/satellite/Armenia">country</a> spans 29,743 square kilometers of mountainous terrain centered on the Ararat Valley, the heart of the Armenian nation since biblical times. Ancient geographers called the Armenian Highlands the "Island of Mountains" or the "Rooftop of Asia Minor." In fact, the average altitude of the country is over a mile high, at about 1800 meters above sea level. Presently, the country is landlocked and has no navigable waterways, in contrast to
                        <a href="https://en.wikipedia.org/wiki/Armenia">Historic Armenia</a>, which at its height under King Tigran the Great, stretched from the Caspian Sea to the Mediterranean Sea and was more than ten times the current size of the present day Republic. Armenia has borders with Georgia to the north, with Turkey to the west and south, with Azerbaijan to the east and southwest, and with Iran to the south.
                        Armenia's landscapes offer boundless beauty. Seven main landscape types are represented across the different altitudinal zones of Armenia. Across these desert, semi desert, dry steppe, steppe, woodland, sub alpine and alpine zones is geography as diverse as high mountain peaks, fertile valleys, picturesque land formations, basalt columns, rock sculptures, and waterfalls.
                        <a class="read-more" href="javascript:void(0)">READ MORE</a>
                    </p>
<p class="expanded collapsed">
Armenia is situated at a cultural, historical, and religious intersection and located at the crossroads between Europe and Asia. The
                    <a href="http://google-maps.pro/satellite/Armenia">country</a> spans 29,743 square kilometers of mountainous terrain centered on the Ararat Valley, the heart of the Armenian nation since biblical times. Ancient geographers called the Armenian Highlands the "Island of Mountains" or the "Rooftop of Asia Minor." In fact, the average altitude of the country is over a mile high, at about 1800 meters above sea level. Presently, the country is landlocked and has no navigable waterways, in contrast to
                    <a href="https://en.wikipedia.org/wiki/Armenia">Historic Armenia</a>, which at its height under King Tigran the Great, stretched from the Caspian Sea to the Mediterranean Sea and was more than ten times the current size of the present day Republic. Armenia has borders with Georgia to the north, with Turkey to the west and south, with Azerbaijan to the east and southwest, and with Iran to the south.
                    Armenia's landscapes offer boundless beauty. Seven main landscape types are represented across the different altitudinal zones of Armenia. Across these desert, semi desert, dry steppe, steppe, woodland, sub alpine and alpine zones is geography as diverse as high mountain peaks, fertile valleys, picturesque land formations, basalt columns, rock sculptures, and waterfalls. More than 200 rivers and streams traverse Armenia, with steep falls, rapids and swift currents. Armenia has 5 scenic canyons. In addition, there are over 200 therapeutic mineral springs, differing in composition and temperature.
                    The Armenians, an ancient people living on an ancient land, call Armenia "Hayastan" and themselves “Hay." Oral history explains the lineage of the Armenian people as being the direct descendants of Noah's son Habeth. The indigenous people of the land of Ararat, Armenians forged their national identity with the rise of powerful Armenian kingdoms, the adoption of Christianity as Armenia's state religion, and the creation of the Armenian alphabet, which spurred the development of literature, philosophy, and science.

 <a class="read-more" href="javascript:void(0)">Less</a>
</p>

                </div>


            </div>
        </div>
    </div>

    @include('include.tursEn')

    <div class="popular_excursion_block">
        <div class="title">
            Popular excursion
        </div>
        <div class="accommodation_block excursion_block">
            <div class="container clear excursion_slider slick-initialized slick-slider">
                <div aria-live="polite" class="slick-list">
                    <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"
                         role="listbox"></div>
                </div>
            </div>
        </div>
    </div>




    <div class="ui small modal accpetModal">
        <i class="close icon"></i>
        <div class="content modalContent">
            <p>successfully added to cart</p>
            <p><a href="/en/basket.html">cart</a></p>
        </div>
    </div>

    <script>
        // Handle facebook callback
        if (window.location.hash && window.location.hash == '#_=_') {
            // Check if the browser supports history.replaceState.
            if (history.replaceState) {
                var cleanHref = window.location.href.split('#')[0];
                history.replaceState(null, null, cleanHref);
            } else {
                window.location.hash = '';
            }

        }
        $(document).ready(function() {
            $(".expanded").hide();

            $(".expanded a, .collapsed a").click(function(eve) {
                var $container = $(this).parents("div");
                eve.preventDefault();
                $container.children(".expanded, .collapsed").toggle();
            });
        });
    </script>

@endsection