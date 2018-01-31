<header>
    <div class="container menuCont clear">
        <div class="logo left_block">
            <a href="{{ route('homeRu') }}">
                <img alt="Discover Aremnia" src="/bundles/damain/images/company_logo.png">
            </a>
        </div>
        <div class="general_menu left_block">
            <menu id="top_menu">
                <li class="dropdown first">
                    <span>
                        <img alt="" src="/bundles/damain/images/accommodation.png" class=""
                             style="margin-left: -15.5px;">
                        <span>Жилье</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1" style="display: none; opacity: 1;">
                        <li class="first">
                            <a href="{{ route('hotelsRu') }}">
                                <span>Отелы</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>Квартиры</span>
                            </a>
                        </li>
                        <li class="last">
                            <a href="">
                                <span>Виллы</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <span>
                        <img alt="" src="/bundles/damain/images/transport.png" class="" style="margin-left: -20px;">
                        <span>Транспорт</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1" style="display: none; opacity: 1;">
                        <li class="first">
                            <a href="{{ route('carRentRu') }}">
                                <span>Автомобиль с водителем</span>
                            </a>
                        </li>
                        <li class="last">
                            <a href="">
                                <span>Аренда автомобиля</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route("allExcursionsRu") }}">
                        <img alt="" src="/bundles/damain/images/excursion.png" class="" style="margin-left: -16px;">
                        <span>Экскурсия</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('allToursRu') }}">
                        <img alt="" src="/bundles/damain/images/tours.png" class="" style="margin-left: 0px;">
                        <span>Туры</span>
                    </a>
                </li>
                <li class="dropdown">

                   <a href="{{ route('servicesRu') }}">
                    <img alt="" src="/bundles/damain/images/services.png" class="" style="margin-left: 0px;">
                        <span>Услуги</span>
                   </a>


                </li>
                <li class="dropdown">
                    <span>
                        <img alt="" src="/bundles/damain/images/armenia.png" class="" style="margin-left: 0px;">
                            <span>Армения</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1" style="display: none; opacity: 1;">
                        <li class="first">
                            <a href="{{ route('armeniaRu') }}">
                                <span>Армения</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('brandingOfArmeniaRu') }}">
                                <span>Брендинг Армении</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('resourcesRu') }}">
                                <span>Знаете ли вы, что ...</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('videoRu') }}">
                                <span>Видео</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="{{ route('aboutUsRu') }}">
                        <img alt="" src="/bundles/damain/images/company.png" class="" style="margin-left: 0px;">
                        <span>Об Компании</span>
                    </a>
                </li>
                <li class="last">
                    <a href="{{route('contacusRu')}}">
                        <img alt="" src="/bundles/damain/images/contact.png" class="" style="margin-left: 0px;">
                        <span>Контакт</span>
                    </a>
                </li>
            </menu>
        </div>
        <div class="right_block">
            <div class="login_block">
                <a href="{{ route('allToursRu', ['hotTours' => true]) }}" id="hotTours">

                    ГОРЯЧИЕ ТУРЫ
                </a>
            </div>
            <div class="group_block clear">
                <div class="currency_block">

                    <select class="current" id="current" title="">

                        <option value="USD" id="changeUsd">USD</option>

                        <option value="RUB" id="changeRub">RUB</option>


                        <option value="EUR" id="changeEur">EUR</option>

                    </select>

                </div>
                <div class="languages_block">
                    <ul>
                        <li class="current">
                            <span>

                                <a href="">
                                    <span class="flag-icon flag-icon-ru"></span>
                                    </a>
                            </span>
                            <ul class="sub_lang">
                                <li>
                                    <a href="{{ route('homeEn') }}"><span class="flag-icon flag-icon-gb"></span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="chart_block">
                    <a href="/en/basket.html">
                        <span class="order_count"></span>

                        <img src="/bundles/damain/images/chart.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="res_menu left_block">
            <div class="burger">
                <span>
                    <i class="fa fa-bars"></i>
                </span>
            </div>
            <menu id="top_menu_res">
                <li class="dropdown first">
                    <span>
                        <img alt="" src="/bundles/damain/images/accommodation.png">
                        <span>Жилье</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1">
                        <li class="first">
                            <a  href="{{ route('hotelsEn') }}">
                                <span>Отелы</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>Квартиры</span>
                            </a>
                        </li>
                        <li class="last">
                            <a href="">
                                <span>Виллы</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <span>
                        <img alt="" src="/bundles/damain/images/transport.png">
                        <span>Транспорт</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1">
                        <li class="first">
                            <a href="">
                                <span>Автомобиль с водителем</span>
                            </a>
                        </li>
                        <li class="last">
                            <a href="">
                                <span>Аренда автомобиля</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route("allExcursionsRu") }}">
                        <img alt="" src="/bundles/damain/images/excursion.png">
                        <span>Экскурсия</span>
                    </a>
                </li>
                <li>
                    <a href=" href="{{ route('allToursRu') }}"">
                        <img alt="" src="/bundles/damain/images/tours.png">
                        <span>Туры</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('servicesRu') }}">
                        <img alt="" src="/bundles/damain/images/services.png" class="" style="margin-left: 0px;">
                        <span>Услуги</span>
                    </a>

                </li>
                <li class="dropdown">
                    <span>
                        <img alt="" src="/bundles/damain/images/armenia.png">
                        <span>Армения</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1" style="display: none; opacity: 1;">
                        <li class="first">
                            <a href="{{ route('armeniaRu') }}">
                                <span>Армения</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('brandingOfArmeniaRu') }}">
                                <span>Брендинг Армении</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('resourcesRu') }}">
                                <span>Знаете ли вы, что ...</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('videoRu') }}">
                                <span>Видео</span>
                            </a>
                        </li>


                    </ul>

                </li>
                <li>
                    <a href="{{ route('aboutUsRu') }}">
                        <img alt="" src="/bundles/damain/images/company.png">
                        <span>Об Компании</span>
                    </a>
                </li>
                <li class="last">
                    <a href="{{route('contacusRu')}}">
                        <img alt="" src="/bundles/damain/images/contact.png">
                        <span>Для туроператора</span>
                    </a>
                </li>
            </menu>
        </div>
    </div>
</header>