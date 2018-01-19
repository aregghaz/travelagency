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
        var h1 = content.substr(showChar2, content.length - showChar2);

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


$(document).ready(function () {

    var usd = $("#tab_buy_content tbody tr td:last-child").first().text();
    var rub = $("#tab_buy_content tbody tr td:last-child").eq(2).text();
    var eur = $("#tab_buy_content tbody tr td:last-child").eq(1).text();



    var change = $('.price');

    change.each(function () {
        this.value = this.value / usd
    });

    var changeRub = $('.priceRub');

    changeRub.each(function () {
        this.value = this.value / rub
    });
    var changeEur = $('.priceEur');

    changeEur.each(function () {
        this.value = this.value / eur
    });


    var amdPrice = $('.USD');

    for (var i = 0; i < change.length; i++) {
        var amdPriceTours = change[i].value;
        var usdPrice = parseInt(amdPriceTours).toFixed();
        amdPrice.eq(i).text(usdPrice + ' $');
    }



var current = $('.current');
    current.on('change', function () {
      var selectedVal = $('#current').val()
        if(selectedVal == 'USD'){
            for (var i = 0; i < change.length; i++) {
                var amdPriceTours = change[i].value;
                var usdPrice = parseInt(amdPriceTours).toFixed();
                amdPrice.eq(i).text(usdPrice + ' $');
            }


        } else if(selectedVal == 'RUB') {

            for (var j = 0; j < changeRub.length; j++) {
                var amdPriceTours = changeRub[j].value;
                var rubPrice = parseInt(amdPriceTours).toFixed();
                amdPrice.eq(j).text(rubPrice + ' ₽');
            }


        } else if(selectedVal == 'EUR') {


            for (var a = 0; a < changeEur.length; a++) {
                var amdPriceTours = changeEur[a].value;
                var usdPrice = parseInt(amdPriceTours).toFixed();
                amdPrice.eq(a).text(usdPrice + ' €');
            }


        }









    });





    $('.link_button').on('click', function () {
        var count = 4;
        var toursBlock = $('.tours_box');
        for (var i = 0; i < change.length; i++) {

            console.log(toursBlock.eq(i).css('display'));
            if (toursBlock.eq(i).css('display') !== 'none') {

                toursBlock.eq(count).css('display', 'block');
                count++

            }

        }
        $('.link_button').html('<a href="\allToursEn" class=\'moreTours\'>See all tours</a>')
    })
});