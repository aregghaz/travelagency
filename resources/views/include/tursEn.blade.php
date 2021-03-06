<div class="tours_block">
    <div class="title">
        Popular tours
    </div>
    <div class="tour_block">
        <div class="container clear">
            <?php $count = 1?>
            @if(!empty($data['posts']))
            @foreach($data['posts'] as $post)

                @if($count < 5)
                            <?php $count ++?>
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
                                        {{ number_format($post->price)  }} AMD
                                    </p>
                                    <input type="hidden" name="price" class="price" value="{{$post->price}}">
                                    <input type="hidden" name="price" class="priceRub" value="{{$post->price}}">
                                    <input type="hidden" name="price" class="priceEur" value="{{$post->price}}">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @else
                        <div class="tours_box"
                             style="background: url('{{  URL::to("/images/turs/$post->img1") }}') no-repeat;background-size: cover;background-position: center center;display: none">
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
                                                {{ number_format($post->price)}} AMD
                                            </p>
                                            <input type="hidden" name="price" class="price" value="{{$post->price}}">
                                            <input type="hidden" name="price" class="priceRub" value="{{$post->price}}">
                                            <input type="hidden" name="price" class="priceEur" value="{{$post->price}}">

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
            @endforeach
            @endif
            <div class="link_button">
                <a  class="moreTours">See more tours</a>
            </div>
        </div>
    </div>

</div>