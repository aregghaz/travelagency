@extends('page.app')

@section('title')
    {{$title}}
@endsection

@section('content')

    @if ( !$posts->count() )
        There is no post till now. Login and write a new post now!!!
    @else
        <div class="">
            @foreach( $posts as $post )
                <div class="list-group">
                    <div class="list-group-item">
                        <h3><a href="{{ url('/'.$post->slug) }}">{{ $post->titleEn }}</a><br>
                            <a href="{{ url('/'.$post->slug) }}">{{ $post->titleRu }}</a>
                            @if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
                                @if($post->active == '1')
                                    <a class="btn" style="float: right" href="{{ url('/edit', ['id' => $post->id])}}">Edit
                                        Post</a>
                                @else
                                    <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->id)}}">Edit
                                            Draft</a>
                                    </button>
                                @endif
                            @endif
                        </h3>


                    </div>

                    <div class="list-group-item">
                        <article>
                            {!! str_limit($post->bodyEn, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
                        </article>
                        <article>
                            {!! str_limit($post->bodyRu, $limit = 1500, $end = '....... <
                            a href='.url("/".$post->slug).'>Read More</a>') !!}
                        </article>
                    </div>
                </div>

            @endforeach

            {!! $posts->render() !!}
        </div>
    @endif
    <div class="panel-body">
        <form method="post" action="{{ route('new-post') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <input required="required" value="{{ old('titleRu') }}" placeholder="Enter title in Russian" type="text"
                       name="titleRu" class="form-control"/>
            </div>
            <div class="form-group">
                <input required="required" value="{{ old('titleEn') }}" placeholder="Enter title in English" type="text"
                       name="titleEn" class="form-control"/>
            </div>
            <div class="form-group">
                <input required="required" value="{{ old('days') }}" placeholder="days" type="text" name="days"
                       class="form-control"/>
            </div>
            <div class="form-group">
                <input required="required" value="{{ old('night') }}" placeholder="night" type="text" name="night"
                       class="form-control"/>
            </div>
            <div class="form-group">
                <input required="required" value="{{ old('price') }}" placeholder="price" type="text" name="price"
                       class="form-control"/>
            </div>

            <div class="form-group">
                <label for="img1">upload image 1</label>
                <input type="file" required="required" multiple="multiple" placeholder="image 1" id="img1" name="img1"
                       class="form-control">
            </div>

            <div class="form-group">
                <label for="fileEn">upload PDF file in English</label>
                <input type="file" multiple="multiple" placeholder="pdf file in ENglish" id="fileEn" name="fileEn"
                       class="form-control">
            </div>
            <div class="form-group">
                <label for="fileRu">upload PDF file in Russian</label>
                <input type="file" id="fileRu" multiple="multiple" placeholder="pdf file in Russian" name="fileRu"
                       class="form-control">
            </div>
            <input type="submit" name='post_comment' class="btn btn-success" value="Post"/>
        </form>
    </div>
@endsection