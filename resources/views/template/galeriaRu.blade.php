@extends('page.indexRu')
@section('title')

@endsection
@section('content')
    <style>


        .gallery {
            width: 100%;

            border-radius: 3px;
            overflow: hidden;

        }
        .img-c {

            height: 200px;
            float: left;
            position: relative;
            overflow: hidden;
        }

        .img-w {
            position: relative;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            cursor: pointer;
            transition: transform ease-in-out 300ms;
        }

        .img-w img {
            display: none;
            position: fixed;
        }

        .img-c {
            transition: width ease 400ms, height ease 350ms, left cubic-bezier(0.4, 0, 0.2, 1) 420ms, top cubic-bezier(0.4, 0, 0.2, 1) 420ms;
        }

        .img-c:hover .img-w {
            transform: scale(1.08);
            transition: transform cubic-bezier(0.4, 0, 0.2, 1) 450ms;
        }

        .img-c.active {
            width: 100% !important;
            height: 100% !important;
            position: absolute;
            z-index: 2;
        //transform: translateX(-50%);
        }

        .img-c.postactive {
            position: absolute;
            z-index: 2;
            pointer-events: none;
        }

        .img-c.active.positioned {
            left: 0 !important;
            top: 0 !important;
            transition-delay: 50ms;
        }
        .col-md-1 {
            margin: 0!important;
            padding: 0!important;
        }

    </style>


    <div class="gallery">
        @foreach($images as $image)

            <div class=" img-w"><img class="" src="/uploads/media/{{ $image }}" alt="" /></div>

        @endforeach


    </div>

    <script>
        $(function() {
            $(".img-w").each(function() {
                $(this).wrap("<div class='img-c col-md-1 col-lg-1 col-xs-1' ></div>")
                var imgSrc = $(this).find("img").attr("src");
                $(this).css('background-image', 'url(' + imgSrc + ')');
            })


            $(".img-c").click(function() {
                var w = $(this).outerWidth()
                var h = $(this).outerHeight()
                var x = $(this).offset().left
                var y = $(this).offset().top


                $(".active").not($(this)).remove()
                var copy = $(this).clone();
                copy.insertAfter($(this)).height(h).width(w).delay(500).addClass("active")
                $(".active").css('top', y - 8);
                $(".active").css('left', x - 8);
                $(".gallery").css('height','100%')
                $("header").css('display','none');
                $("footer").css('display','none');
                setTimeout(function() {
                    copy.addClass("positioned")
                }, 0)

            })




        })

        $(document).on("click", ".img-c.active", function() {
            var copy = $(this)
            copy.removeClass("positioned active").addClass("postactive");
            $(".gallery").css('height','auto');
            $("header").css('display','block');
            $("footer").css('display','block');
            setTimeout(function() {
                copy.remove();
            }, 500)
        })
    </script>
@endsection