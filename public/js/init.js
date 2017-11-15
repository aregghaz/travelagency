$(document).ready(function () {
    var prefix = $("body").attr('data-prefix');
    var locale = $("body").attr('data-locale');
    /* header -------------------------------- */
    var menuLi = $('.general_menu menu li');
    menuLi.each(function () {
        var img = $('img', this);
        var w = $('img', this).width();
        img.css('margin-left', -w / 2);
    });
    menuLi.hover(function () {
        var index = $(this).index();
        var img = $('img', this);
        switch (index) {
            case 1:
                img.addClass('magictime tinLeftIn');
                break;
            case 5:
                img.addClass('magictime foolishIn');
                break;
            default:
                img.addClass('magictime boingInUp');
                break;
        }
    }, function () {
        var index = $(this).index();
        var img = $('img', this);
        switch (index) {
            case 1:
                img.removeClass('magictime tinLeftIn');
                break;
            case 5:
                img.removeClass('magictime foolishIn');
                break;
            default:
                img.removeClass('magictime boingInUp');
                break;
        }
    });

    $('.languages_block ul > li').hover(function () {
        $('.sub_lang').stop().slideDown(400);
    }, function () {
        $('.sub_lang').stop().slideUp(400);
    });
    $('.currency_block ul > li').hover(function () {
        $('.sub_currency').stop().slideDown(400);
    }, function () {
        $('.sub_currency').stop().slideUp(400);
    });

    $('.general_menu li.dropdown').hover(function () {
        $('.sub-menu', this).stop().fadeIn(600);
    }, function () {
        $('.sub-menu', this).stop().fadeOut(600);
    });
    $('.res_menu li.dropdown').hover(function () {
        $('.sub-menu', this).stop().slideDown(600);
    }, function () {
        $('.sub-menu', this).stop().slideUp(600);
    });

    $('.burger span').click(function () {
        $('#top_menu_res').stop().slideToggle(400);
    });
    /* header -------------------------------- */

    /* slider -------------------------------- */
    try {
        $('.home_slider').slick({
            dots: true,
            infinite: true,
            speed: 1500,
            fade: true,
            draggable: false,
            customPaging: function (slider, i) {
                return '<span class="tab">' + $('.slick-thumbs li:nth-child(' + (i + 1) + ')').html() + '</span>';
            }
        });
        $('.excursion_slider').slick({
            dots: true,
            infinite: false,
            speed: 1200,
            draggable: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });


    }
    catch (err) {

    }
    /* slider -------------------------------- */

    /* semantec -------------------------------- */

    /* semantec -------------------------------- */

    /* carousel -------------------------------- */
    setSliderWrapper();
    function setSliderWrapper() {
        var count = 0;
        $('.gallery_carousel .slide').each(function () {
            $('.img', this).each(function () {
                count += $(this).outerWidth() + 10;
            });

            $(this).css('width', count - 10);
            count = 0;
        });
        /*$('.gallery_tour .slide').css('width',count* 230);*/
    }

    if ($('.gallery_carousel').length > 0) {
        $('.gallery_carousel').mCustomScrollbar({
            axis: "x",
            theme: 'inset',
            scrollButtons: {enable: true}
        });
    }

    /* carousel -------------------------------- */

    /* calendar -------------------------------- */
    if ($('.calendar').length > 0) {
        $('.calendar').calendar({
            type: 'date',
            formatter: {
                date: function (date, settings) {
                    if (!date) return '';
                    var day = date.getDate();
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();
                    if (day < 10) {
                        day = '0' + day;
                    }
                    return month + '/' + day + '/' + year;
                }
            }
        });
    }

    /* calendar -------------------------------- */

    $('.edit').click(function () {
        var id = $(this).data('id');
        $(this).css('display', 'none');
        $('.row' + id + ' .ok').css('display', 'inline');
        $('.row' + id + ' .basketCalendar > div').addClass('not_readonly');
        $('.row' + id + ' .basketCalendar > .not_readonly').calendar({
            type: 'date',
            formatter: {
                date: function (date, settings) {
                    if (!date) return '';
                    var day = date.getDate();
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();
                    if (day < 10) {
                        day = '0' + day;
                    }
                    return month + '/' + day + '/' + year;
                }
            }
        });
        $('.row' + id + ' input').removeAttr('readonly');

    });
    $('.ok').click(function () {
        var id = $(this).data('id');
        $(this).css('display', 'none');
        $('.edit').css('display', 'inline');
        $('.row' + id + '.basketCalendar >div').removeClass('not_readonly');
        $('.row' + id + '.ui.calendar').remove();
        $('.row' + id + '.basketCalendar').click(false);
        $('.row' + id + ' input').attr('readonly', 'readonly');
        $('.row' + id + '.basketCalendar > .not_readonly').calendar({
            type: 'date',
            formatter: {
                date: function (date, settings) {
                    if (!date) return '';
                    var day = date.getDate();
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();
                    return month + '/' + day + '/' + year;
                }
            }
        });
    });

    var total = $('.total').data('p');
    var cur = $('.total').data('cur');
    $('.remove').click(function () {
        var id = $(this).data('id');
        var price = $('.row' + id + ' .pp').data('p');
        var currency = $('.row' + id + ' .pp').data('c');

        $('.total span').text(total - price + currency);
        total = total - price;
        $('#totalP').val(total + '' + cur);
        $('.row' + id).remove();

    });

    /* scroll -------------------------------- */
    if ($('#tour_info').length > 0) {
        var top = $('#tour_info').offset().top;
        $(window).scroll(function () {
            var scrollTop = $(this).scrollTop();
            if (scrollTop > top) {
                $('#tour_info').css({
                    position: 'fixed',
                    top: 0,
                    left: 0
                });
            }
            else {
                $('#tour_info').css({
                    position: 'relative',
                    top: 0,
                    left: 0
                });
            }
        });
    }

    /* scroll -------------------------------- */

});