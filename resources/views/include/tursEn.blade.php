<div class="tours_block">
    <div class="title">
        Popular tours
    </div>
    <div class="tour_block">
        <div class="container clear">
            @if(!empty($data['posts']))
            @foreach($data['posts'] as $post)
                <div class="tours_box"
                     style="background: url('{{  URL::to("/images/turs/$post->img1") }}') no-repeat;background-size: cover;background-position: center center;">
                    <a href="/images/turs/{{ $post->linkEn }}" target="_blank">
                        <div class="overlay">
                            <div class="see_more home">
                                <p>{{$post->titleEn}}</p>
                                <p>{{ floatval($post->days)}} days / {{ floatval($post->night)}} nights</p>

                            </div>
                            <div class="tours_title_block clear">
                                <div class="left_block">
                                    <p>{{$post->titleEn}}</p>
                                    <p>{{ floatval($post->days)}} days / {{ floatval($post->night)}} nights</p>

                                </div>
                                <div class="right_block">
                                    <p class="USD">
                                        <script></script>{{ number_format($post->price)}} AMD</p>
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