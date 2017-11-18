﻿@extends('page.index')
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

            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button"
                    style="">
                Next
            </button>

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
    </script>

@endsection