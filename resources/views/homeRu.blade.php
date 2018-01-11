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
            f
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

        }
        .read-more-state ~ .read-more-trigger:before {
            content: 'Показать больше';
        }

        .read-more-state:checked ~ .read-more-trigger:before {
            content: 'Показать меньше';
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
        .discover-Armenia {
         color: #0d71bb;
            font-size: x-large;
            font-weight: bolder;
        }
    </style>

    @include('script.script')
    @include('include.social')

    <div class="home_slider_block">
        <div class="home_slider clear slick-initialized slick-slider slick-dotted" role="toolbar">
            <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button"
                    style="">Previous
            </button>
            <div aria-live="polite" class="slick-list" >
                <div class="slick-track" style="opacity: 1; display: -webkit-box; height: 460px" role="listbox">
                    <div class="slide slick-slide slick-current slick-active"
                         style="background: url('/uploads/{{ $data['img'] }}') center center / cover no-repeat fixed; width: 100%; position: relative; height: 450px;position: fixed"
                         data-slick-index="0" aria-hidden="false" tabindex="-1" role="option"
                         aria-describedby="slick-slide00">

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

                <div class="right_block content block-style" id = "block-style">
                    <h2>Команда DISCOVER ARMENIA приглашает вас</h2>
                    <br>

                    <input type="checkbox" class="read-more-state" id="post-1"/>
                    <div class="read-more-wrap">
                        совершить незабываемое и полное приключений путешествие по древнейшей <a href="https://ru.wikipedia.org/wiki/%D0%90%D1%80%D0%BC%D0%B5%D0%BD%D0%B8%D1%8F" target="_blank">горной стране</a>, одной из самых древних на Земле.<br><br>
                        К гостям мы относимся с теплом и большой любовью. В любом армянском доме вам будут рады, как члену своей семьи. Ведь вы Гость! А у нас каждый хочет показать, что именно его дом самый гостеприимный, а его еда самая вкусная.<br><br>
                        А теперь окунемся в историю, традиции и быт нашего народа.<br><br>
                        История Армении-уникальная, это мировая сокровищница. Армения претерпевала множество иноземных нашествий, но смогла сохранить свою веру и язык. Не раз казалось, что имя Армения будет стерто с карты мира, но армянский народ, как птица Феникс,  вновь возрождался из пепла.
                        <br>
                        <div class="read-more-target ">
                            <br><br>Тридцать тысяч квадратных километров, которые занимает сегодня  Армения, составляют лишь крохотную часть той огромной
                            <a href="https://ru.wikipedia.org/wiki/%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F_%D0%90%D1%80%D0%BC%D0%B5%D0%BD%D0%B8%D0%B8" target="_blank">исторической Армении</a>, хроники которой стали отдельной главой в мировой истории и культуре.<br><br>
                            Через Армянское нагорье проходили важнейшие торговые и военные пути древнего мира, связывающие восток и запад.Столь выгодное географическое положение Армении привлекало к ней многочисленных завоевателей. Поэтому границы древней Армении часто изменялись. История Армении богата и бесконечна.<br><br>
                            Но не только историей и <a href="https://www.tourister.ru/world/asia/armenia/placeofinterest" target="_blank">древними архитектурными достопримечательностями</a> манит к себе Армения, это страна с удивительной и чрезвычайно разнообразной природой. Снежные вершины, скалистые ущелья, высокогорные плато, долины бурных рек и голубая гладь озера Севан. Невозможно передать словами всю красоту природы Армении. Как говориться, лучше один раз увидеть...<br><br>
                            А еще важно познать уникальную местную <a href="https://ru.wikipedia.org/wiki/%D0%90%D1%80%D0%BC%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F_%D0%BA%D1%83%D1%85%D0%BD%D1%8F" target="_blank">кухню!</a> Знаменитый коньяк «Арарат», с библейской горой на этикетке, по праву считается визитной карточкой Армении. Традиции приготовления многих национальных блюд остаются неизменными с древнейших времен. Бастурма, суджух, поджаренный на углях хоровац, долма (мясной фарш в виноградных листьях), ароматный чанах, пити и хаш, гордость армянской кухни-кюфта, разнообразные горные травы и зелень, натуральный овечий сыр и, конечно, сладости. Устоять перед кулинарным искушением просто невозможно!<br><br>
                            Здесь вы услышите нежные звуки дудука. Вас встретит на лоне природы чабан и угостит «чабан-шашлыком» из мяса ягненка, овечьим сыром, мацуном.На озере Севан мы, вместе с вами, организуем обед на пароме. Вы побываете в традиционной сельской семье и познакомитесь с бытом обычного селянина, а посетив озеро Севан, сможете там же переночевать в палатках.<br><br>
                            Мы предлагаем множество других туров: экстремальный, эко-туристический, кулинарный, уикенд, экскурсионно-оздоровительный, горнолыжный тур на прекрасном курорте Цахкадзора, экстремальное катание на горе Арагац, комбинированные туры Армения-Грузия и многое другое, а также мероприятия, с которыми вы познакомитесь, путешествуя только с нами.<br><br>
                            Путешествуя с командой <span class="discover-Armenia">Discover Armenia</span> вы мгновенно окажетесь в другом мире. Увидите много нового и интересного. Узнаете местные традиции и познакомитесь с удивительной армянской культурой. Обретете новых друзей и увезете с собой незабываемые впечатления. Поверьте, вам захочется еще не раз посетить Армению.<br><br>
                            Мы любим нашу страну и готовы поделиться нашими традициями, обычаями, и всем тем, что унаследовали от наших предков. <br>


                        </div>
                    </div>
                    <label for="post-1" class="read-more-trigger read-more button-style" id="deletStyle" ></label>



                </div>
        </div>
    </div>

    @include('include.tursRu')

    <div class="popular_excursion_block">
        @include('include.excursionRu')
    </div>




    <div class="ui small modal accpetModal">
        <i class="close icon"></i>
        <div class="content modalContent">
            <p>successfully added to cart</p>
            <p><a href="/en/basket.html">cart</a></p>
        </div>
    </div>


@endsection