@extends('page.index')
@section('title')

@endsection
@section('content')

    <script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-88757478-1', 'auto');
        ga('send', 'pageview');


        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter41512739 = new Ya.Metrika({
                        id: 41512739,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    });
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>&lt;div&gt;&lt;img src="https://mc.yandex.ru/watch/41512739" style="position:absolute; left:-9999px;"
        alt="" /&gt;&lt;/div&gt;
    </noscript>
    <!-- /Yandex.Metrika counter -->

    @include('include.social')

    <div class="home_slider_block">
        <div class="home_slider clear slick-initialized slick-slider slick-dotted" role="toolbar">
            <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button"
                    style="">Previous
            </button>
            <div aria-live="polite" class="slick-list">
                <div class="slick-track" style="opacity: 1; width: 5380px;" role="listbox">
                    <div class="slide slick-slide slick-current slick-active"
                         style="background: url(&quot;/uploads/media/3f2264cfdb110fbf5cd00c2befc5cf49ebe65c07.gif&quot;) center center / cover no-repeat; width: 30%; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
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
                                    <a href="http://discoverarmenia.tours/en/tours.html" tabindex="0">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slick-slide"
                         style="background: url(&quot;/uploads/media/736e8ed8adba0d7d66ef8b600a74e7a896817314.gif&quot;) center center / cover no-repeat; width: 30%; position: relative; left: -1345px; top: 0px; z-index: 998; opacity: 0;"
                         data-slick-index="1" aria-hidden="true" tabindex="-1" role="option"
                         aria-describedby="slick-slide01">
                        <div class="container">
                            <div class="description_block">
                                <div class="sldie_title">Armenia</div>
                                <div class="description">Armenia is a country rich of cultural and natural monuments.
                                    That’s
                                    why Armenia is called an “open-air museum. A pagan temple of Garni, monastery
                                    complex
                                    Gegard, ancient Tatev historical Khor Virap, Noravanq - all these are alive history
                                    of
                                    one of the oldest countries in the world.
                                </div>
                                <div class="link_button">
                                    <a href="http://discoverarmenia.tours/en/armenia/armenia.html"
                                       tabindex="-1">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slick-slide"
                         style="background: url('uploads/media/f8f4c5a552a9b17879e95070348e771a4d73a2bd.gif') center center / cover no-repeat; width: 30%; position: relative; left: -2690px; top: 0px; z-index: 998; opacity: 0;"
                         data-slick-index="2" aria-hidden="true" tabindex="-1" role="option"
                         aria-describedby="slick-slide02">
                        <div class="container">
                            <div class="description_block">
                                <div class="sldie_title">CAR RENT</div>
                                <div class="description">The company Discover Armenia provides an opportunity to rent a
                                    car
                                    of different classes in different periods at favorable prices.
                                </div>
                                <div class="link_button">
                                    <a href="http://discoverarmenia.tours/en/transport/car-rent.html" tabindex="-1">For
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide slick-slide"
                         style="background: url(&quot;/uploads/media/93a3b697462def3a1a0e5839087bf209f8761149.gif&quot;) center center / cover no-repeat; width: 30%; position: relative; left: -4035px; top: 0px; z-index: 998; opacity: 0;"
                         data-slick-index="3" aria-hidden="true" tabindex="-1" role="option"
                         aria-describedby="slick-slide03">
                        <div class="container">
                            <div class="description_block">
                                <div class="sldie_title">Armenia</div>
                                <div class="description">Moving to Armenia can be your lifetime opportunity for an
                                    exciting
                                    and much-needed change in your life.
                                </div>
                                <div class="link_button">
                                    <a href="http://discoverarmenia.tours/en/armenia/armenia.html" tabindex="-1">Learn
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button"
                    style="">
                Next
            </button>
            <ul class="slick-dots" style="" role="tablist">
                <li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true"
                    aria-controls="navigation00" id="slick-slide00"><span class="tab">
                        <p>Tours</p>
                        <span><img src="/uploads/media/1345e1b6d8d52dcf2c1572b36db64c9e89ab2357.png"></span>
                    </span></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01"
                    id="slick-slide01"><span class="tab">
                        <p>Armenia</p>
                        <span><img src="/uploads/media/eecc1696cca1e8bbbf45bbdb98e623c44852c23f.png"></span>
                    </span></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02"
                    id="slick-slide02"><span class="tab">
                        <p>CAR RENT</p>
                        <span><img src="/uploads/media/3b02f7de026870f725ab17dab2e53c5f335d1a78.png"></span>
                    </span></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation03"
                    id="slick-slide03"><span class="tab">
                        <p>Armenia</p>
                        <span><img src="/uploads/media/be758cbac3331febec87c5aaa9ac781469735464.png"></span>
                    </span></li>
            </ul>
        </div>
        <div class="slick-thumbs">
            <ul>
                <li>
                    <p>Tours</p>
                    <span><img src="/uploads/media/1345e1b6d8d52dcf2c1572b36db64c9e89ab2357.png"></span>
                </li>
                <li>
                    <p>Armenia</p>
                    <span><img src="/uploads/media/eecc1696cca1e8bbbf45bbdb98e623c44852c23f.png"></span>
                </li>
                <li>
                    <p>CAR RENT</p>
                    <span><img src="/uploads/media/3b02f7de026870f725ab17dab2e53c5f335d1a78.png"></span>
                </li>
                <li>
                    <p>Armenia</p>
                    <span><img src="/uploads/media/be758cbac3331febec87c5aaa9ac781469735464.png"></span>
                </li>
            </ul>
        </div>
    </div>

    <div class="info_block">
        <div class="container clear">
            <div class="left_block image">
                <img src="/bundles/damain/images/info_img.png" alt="Discover Armenia">
            </div>
            <div class="right_block content">
                <h2>Discover the land of mystery with us</h2>
                <p>Armenia is pleased to welcome you. Armenia is a cultural developed and hospitable country known for
                    its
                    extraordinary and individual culinary products. You will nowhere find such kind of dolma, khashlama,
                    khorovats (barbeque) and khash like in Armenia.
                    Due to the mountainous relief of Armenia, the air is crystally clear which allows you to feel the
                    breath
                    of nature. Visiting Armenia, it is impossible not to notice all the charm, as well as historical and
                    cultural attractions of Yerevan - one of the oldest cities in the world, the capital of the first
                    Christian country.
                    Armenia is a country rich of cultural and natural monuments. That’s why Armenia is called an
                    “open-air
                    museum. A pagan temple of Garni, monastery complex Gegard, ancient Tatev historical Khor Virap,
                    Noravanq
                    - all these are alive history of one of the oldest countries in the world.
                    Armenia is especially rich of monuments belonging to the Christian architecture. Among the natural
                    monuments we should differentiate the ski resort Tsaghkadzor, wooded Dilijan, unique lake Sevan,
                    waterfall in Jermuk, lake Parz, rocks of Khndzoresk. For the true connoisseurs of alcoholic drinks,
                    Armenia provides an opportunity to enjoy the legendary Armenian cognac.</p>
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
                    <div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);display: -webkit-box;"
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
    </script>

@endsection