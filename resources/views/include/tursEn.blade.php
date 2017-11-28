<div class="tours_block">
    <div class="title">
        Popular author tours
    </div>
    <div class="tour_block">
        <div class="container clear">
            @if(!empty($posts))
            @foreach($posts as $post)
                <div class="tours_box"
                     style="background: url('{{  URL::to("/images/turs/$post->img1") }}') no-repeat;background-size: cover;background-position: center center;">
                    <a href="{{ route('toursEn', ['id'=> $post->id]) }}">
                        <div class="overlay">
                            <div class="see_more home">
                                <p>{{$post->titleEn}}</p>
                                <p>{{$post->days}} days / {{$post->night}} nights</p>

                            </div>
                            <div class="tours_title_block clear">
                                <div class="left_block">
                                    <p>{{$post->titleEn}}</p>
                                    <p>{{$post->days}} days / {{$post->night}} nights</p>

                                </div>
                                <div class="right_block">
                                    <p class="USD">{{$post->price}} amd</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            @endif
            <div class="link_button">
                <a href="{{ route('allToursEn') }}">See all tours</a>
            </div>
        </div>
    </div>

</div>