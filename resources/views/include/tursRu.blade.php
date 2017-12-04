<div class="tours_block">
    <div class="title">
        Популярные авторские туры
    </div>
    <div class="tour_block">
        <div class="container clear">
            @if(!empty($data['posts']))
                @foreach($data['posts'] as $post)
                <div class="tours_box"
                     style="background: url('{{  URL::to("/images/turs/$post->img1") }}') no-repeat;background-size: cover;background-position: center center;">
                    <a href="/images/turs/{{ $post->linkRu }}" target="_blank">
                        <div class="overlay">
                            <div class="see_more home">
                                <p>{{$post->titleRu}}</p>
                                <p>{{$post->days}} / {{$post->night}}</p>

                            </div>
                            <div class="tours_title_block clear">
                                <div class="left_block">
                                    <p>{{$post->titleRu}}</p>
                                    <p>{{$post->days}} / {{$post->night}}</p>

                                </div>
                                <div class="right_block">
                                    <p class="USD">{{$post->price}} AMD</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            @endif
                <div class="link_button">
                <a href="{{ route('allToursRu') }}">Посмотреть все туры</a>
            </div>
        </div>
    </div>

</div>