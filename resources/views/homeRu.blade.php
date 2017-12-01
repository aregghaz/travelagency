@extends('page.indexRu')

@section('title')

@endsection

@section('content')



    <style>
        .read-more-state {
            display: none;
        }

        .read-more-target {
            opacity: 0;
            max-height: 0;
            font-size: 0;
            transition: .25s ease;
        }

        .read-more-state:checked ~ .read-more-wrap .read-more-target {
            opacity: 1;
            font-size: inherit;
            max-height: 999em;
        }
        .gastronomy
        {

            text-align: center;
            display: list-item;
            /* text-decoration: none; */
            list-style-type: none;

            line-height: 23px;
            font-size: 32px;
            font-family: 'AvantGardeCTT-Bold';
            color: #fca955;
            margin-bottom: 13px;
        }
        .read-more-wrap {
            font-size: 20px;
            text-align: justify;

            color: #878787;

            font-family: system-ui;
            font-weight: 250;
        }
        .read-more-state ~ .read-more-trigger:before {
            content: 'Show more';
        }

        .read-more-state:checked ~ .read-more-trigger:before {
            content: 'Show less';
        }

        .read-more-trigger {
            cursor: pointer;
            display: inline-block;
            padding: 0 .5em;
            /* color: #666; */
            /* font-size: .9em; */
            line-height: 2;
            /* border: 1px solid #ddd; */
            border-radius: .25em;
        }

        .morecontent span {
            display: none;
        }

        .morelink {
            display: block;
        }
        .button-style {
            position: relative;

        }
        .block-style{

            height: 235px;
        }
    </style>

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

                <div class="right_block content block-style" id = "block-style">
                    <h2>Команда DISCOVER ARMENIA приглашает вас</h2>

                    <input type="checkbox" class="read-more-state" id="post-1"/>
                    <div class="read-more-wrap">
                        совершить незабываемое и полное приключений путешествие по древнейшей горной стране, одной из самых древних на Земле.
                        К гостям мы относимся с теплом и большой любовью. В любом армянском доме вам будут рады, как члену своей семьи. Ведь вы Гость! А у нас каждый хочет показать, что именно его дом самый гостеприимный, а его еда самая вкусная.
                        А теперь окунемся в историю, традиции и быт нашего народа.
                        История Армении-уникальная, это мировая сокровищница. Армения претерпевала множество иноземных нашествий, но смогла сохранить свою веру и язык. Не раз казалось, что имя Армения будет стерто с карты мира, но армянский народ, как птица Феникс,  вновь возрождался из пепла.
                        Тридцать тысяч квадратных километров, которые занимает сегодня  Армения, составляют лишь крохотную часть той огромной исторической Армении, хроники которой стали отдельной главой в мировой истории и культуре.
                        Через Армянское нагорье проходили важнейшие торговые и военные пути древнего мира, связывающие восток и запад. <br>
                        <div class="read-more-target ">Столь выгодное географическое положение Армении привлекало к ней многочисленных завоевателей. Поэтому границы древней Армении часто изменялись. История Армении богата и бесконечна.
                            Но не только историей и древними архитектурными достопримечательностями манит к себе Армения, это страна с удивительной и чрезвычайно разнообразной природой. Снежные вершины, скалистые ущелья, высокогорные плато, долины бурных рек и голубая гладь озера Севан. Невозможно передать словами всю красоту природы Армении. Как говориться, лучше один раз увидеть...
                            А еще важно познать уникальную местную кухню! Знаменитый коньяк «Арарат», с библейской горой на этикетке, по праву считается визитной карточкой Армении. Традиции приготовления многих национальных блюд остаются неизменными с древнейших времен. Бастурма, суджух, поджаренный на углях хоровац, долма (мясной фарш в виноградных листьях), ароматный чанах, пити и хаш, гордость армянской кухни-кюфта, разнообразные горные травы и зелень, натуральный овечий сыр и, конечно, сладости. Устоять перед кулинарным искушением просто невозможно!
                            Здесь вы услышите нежные звуки дудука. Вас встретит на лоне природы чабан и угостит «чабан-шашлыком» из мяса ягненка, овечьим сыром, мацуном.На озере Севан мы, вместе с вами, организуем обед на пароме. Вы побываете в традиционной сельской семье и познакомитесь с бытом обычного селянина, а посетив озеро Севан, сможете там же переночевать в палатках.
                            Мы предлагаем множество других туров: экстремальный, эко-туристический, кулинарный, уикенд, экскурсионно-оздоровительный, горнолыжный тур на прекрасном курорте Цахкадзора, экстремальное катание на горе Арагац, комбинированные туры Армения-Грузия и многое другое, а также мероприятия, с которыми вы познакомитесь, путешествуя только с нами.
                            Путешествуя с командой Discover Armenia вы мгновенно окажетесь в другом мире. Увидите много нового и интересного. Узнаете местные традиции и познакомитесь с удивительной армянской культурой. Обретете новых друзей и увезете с собой незабываемые впечатления. Поверьте, вам захочется еще не раз посетить Армению.
                            Мы любим нашу страну и готовы поделиться нашими традициями, обычаями, и всем тем, что унаследовали от наших предков. <br>


                        </div>
                    </div>
                    <label for="post-1" class="read-more-trigger read-more button-style" id="deletStyle" ></label>



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
        $(document).ready(function () {

            var deletStyle = $("#deletStyle");
            deletStyle.click(function () {
                $('#block-style').removeClass('block-style');
                deletStyle.removeClass('deletStyle');
                deletStyle.removeClass('button-style');

            });




            $('.more').each(function () {
                // Configure/customize these variables.
                var showChar = 15;  // How many characters are shown by default
                var ellipsestext = "<br>";
                var moretext = "History of Armenia...";

                var content = $(this).html();

                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<div class="moreellipses">' + ellipsestext + '&nbsp;</div><div class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></div>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function () {
                var moretext = "History of Armenia...";
                var lesstext = "Show History of Armenia less";

                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });


        // Configure/customize these variables.
        var showChar1 = 15;  // How many characters are shown by default
        var ellipsestext1 = "<br>";
        var moretext1 = "What to do in Armenia...";
        var lesstext1 = " less";


        $('.more1').each(function () {

            var content = $(this).html();

            if (content.length > showChar1) {

                var c = content.substr(0, showChar1);
                var h = content.substr(showChar1, content.length - showChar1);

                var html = c + '<div class="moreellipses">' + ellipsestext1 + '&nbsp;</div><div class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink1">' + moretext1 + '</a></div>';

                $(this).html(html);
            }



            $(".morelink1").on('click', function () {

                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext1);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext1);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });

        // Configure/customize these variables.
        var showChar2 = 15;  // How many characters are shown by default
        var ellipsestext2 = "<br>";
        var moretext2 = "Gastronomy...";
        var lesstext2 = "Gastronomy less";


        $('.more2').each(function () {
            var content = $(this).html();

            if (content.length > showChar2) {

                var c1 = content.substr(0, showChar2);
                var h1= content.substr(showChar2, content.length - showChar2);

                var html = c1 + '<div class="moreellipses">' + ellipsestext2 + '&nbsp;</div><div class="morecontent"><span>' + h1 + '</span>&nbsp;&nbsp;<a href="" class="morelink2">' + moretext2 + '</a></div>';

                $(this).html(html);
            }



            $(".morelink2").on('click', function () {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext2);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext2);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>

@endsection