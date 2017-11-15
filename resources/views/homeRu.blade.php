@extends('page.indexRu')

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
                                <div class="sldie_title">Туры</div>
                                <div class="description">Мы занимаемся индивидуальными и групповыми турами. Мы предлагаем вы классический, паломнический, экстремальный, кулинарные туры и т. д. Во время туров вы обнаружите Армения с разных сторон. Вы приобретете культуру и традиции из страны.
                                </div>
                                <div class="link_button">
                                    <a href="{{ route('allToursRu') }}" tabindex="0">Читать дальше</a>
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
                <h2>Откройте для себя землю тайны с нами</h2>
                <p>Армения рада приветствовать вас. Армения - культурно развитая и гостеприимная страна, известная ег экстраординарные и индивидуальные кулинарные изделия. Вы больше не найдете такой дольмы, хэшламы хоровац (барбекю) и хаш, как в Армении. Из-за горного рельефа Армении воздух кристально чистый, что позволяет вам почувствовать дыхани природы. Посещая Армению, невозможно заметить все очарование, а также исторические культурные достопримечательности Еревана - один из старейших городов мира, столица первог Христианская страна. Армения - страна, богатая культурными и природными памятниками. Вот почему Армения называетс «Под открытым небом музей. Языческий храм Гарни, монастырский комплекс Гегард, древний Тартевский исторический Хор Вирап, Нораван - все это живая история одной из старейших стран мира. Армения особенно богата памятниками христианской архитектуры. Среди естественны памятники Мы бы разделили горнолыжный курорт Цахкадзор, лесистый Дилижан, уникальное озеро Севан водопад в Джермуке, озеро Парз, скалы Хндзореска. Для настоящих ценителей алкогольных напитков Армения предоставляет возможность насладиться легендарным армянским коньяком.</p>
            </div>
        </div>
    </div>

    @include('include.tursRu')

    <div class="popular_excursion_block">
        <div class="title">
            Популярная экскурсия
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