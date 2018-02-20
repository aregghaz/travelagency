<header>
    <div class="container menuCont clear">
        <div class="logo left_block ">
            <a href="/">
                <img alt="Discover Aremnia" src="/bundles/damain/images/company_logo.png">
            </a>
        </div>
        <div class="general_menu left_block">
            <menu id="top_menu">
                <li class="dropdown first">
                    <span>
                        <img alt="" src="/bundles/damain/images/accommodation.png" class=""
                             style="margin-left: -15.5px;">
                        <span>Accommodation</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1" style="display: none; opacity: 1;">
                        <li class="first">
                            <a href="{{ route('hotelsEn') }}">
                                <span>Hotels</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>Apartments</span>
                            </a>
                        </li>
                        <li class="last">
                            <a href="">
                                <span>Houses</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <span>
                        <img alt="" src="/bundles/damain/images/transport.png" class="" style="margin-left: -20px;">
                        <span>Transport</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1" style="display: none; opacity: 1;">
                        <li class="first">
                            <a href="">
                                <span>Vehicles with driver</span>
                            </a>
                        </li>
                        <li class="last">
                            <a href="{{ route('carRentEn') }}">
                                <span>Car rent</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route("allExcursionsEn") }}">
                        <img alt="" src="/bundles/damain/images/excursion.png" class="" style="margin-left: -16px;">
                        <span>Excursions</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('allToursEn') }}">
                        <img alt="" src="/bundles/damain/images/tours.png" class="" style="margin-left: 0px;">
                        <span>Tours</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('servicesEn') }}">
                        <img alt="" src="/bundles/damain/images/services.png" class="" style="margin-left: 0px;">
                        <span>Services</span>
                    </a>

                </li>
                <li class="dropdown">
                    <span>
                        <img alt="" src="/bundles/damain/images/armenia.png" class="" style="margin-left: 0px;">
                            <span>Armenia</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1" style="display: none; opacity: 1;">
                        <li class="first">
                            <a href="{{ route('armeniaEn') }}">
                                <span>Armenia</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('brandingOfArmeniaEn') }}">
                                <span>Branding of Armenia</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('resourcesEn') }}">
                                <span>Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('videoEn') }}">
                                <span>Video</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('galeriaEn') }}">
                                <span>Gallery</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('aboutUsEn') }}">
                        <img alt="" src="/bundles/damain/images/company.png" class="" style="margin-left: 0px;">
                        <span>About us</span>
                    </a>
                </li>
                <li class="last">
                    <a href="{{route('contacusEn')}}">
                        <img alt="" src="/bundles/damain/images/contact.png" class="" style="margin-left: 0px;">
                        <span>Contact</span>
                    </a>
                </li>
            </menu>
        </div>
        <div class="right_block">
            <div class="login_block">
                <a href="{{ route('allToursEn', ['hotTours' => true]) }}" id="hotTours">
                    HOT TOURS
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
                                <span class="flag-icon flag-icon-gb"></span>
                            </span>
                            <ul class="sub_lang">
                                <li>
                                    <a href="{{ route('homeRu') }}"><span class="flag-icon flag-icon-ru"></span>
                                    </a>
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
                        <span>Accommodation</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1">
                        <li class="first">
                            <a  href="{{ route('hotelsEn') }}">
                                <span>Hotels</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>Apartment</span>
                            </a>
                        </li>
                        <li class="last">
                            <a href="">
                                <span>Villa</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <span>
                        <img alt="" src="/bundles/damain/images/transport.png">
                        <span>Transport</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1">
                        <li class="first">
                            <a href="/en/transport/car-with-driver.html">
                                <span>Car with driver</span>
                            </a>
                        </li>
                        <li class="last">
                            <a href="{{ route('carRentEn') }}">
                                <span>Car rent</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route("allExcursionsEn") }}">
                        <img alt="" src="/bundles/damain/images/excursion.png">
                        <span>Excursion</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('allToursEn') }}">
                        <img alt="" src="/bundles/damain/images/tours.png">
                        <span>Tours</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('servicesEn') }}">
                        <img alt="" src="/bundles/damain/images/services.png" class="" style="margin-left: 0px;">
                        <span>Services</span>
                    </a>

                </li>
                <li class="dropdown">
                    <span>
                        <img alt="" src="/bundles/damain/images/armenia.png">
                        <span>Armenia</span>
                    </span>
                    <ul class="sub-menu clear menu_level_1" style="display: none; opacity: 1;">
                        <li class="first">
                            <a href="{{ route('armeniaEn') }}">
                                <span>Armenia</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('brandingOfArmeniaEn') }}">
                                <span>Branding of Armenia</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('resourcesEn') }}">
                                <span>Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('videoEn') }}">
                                <span>Video</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('contacusEn')}}">
                        <img alt="" src="/bundles/damain/images/company.png">
                        <span>Company</span>
                    </a>
                </li>
                <li class="last">
                    <a href="{{ route('contacusEn') }}">
                        <img alt="" src="/bundles/damain/images/contact.png">
                        <span>Contact</span>
                    </a>
                </li>
            </menu>
        </div>
    </div>
</header>
