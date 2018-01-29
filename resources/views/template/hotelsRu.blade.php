@extends('page.indexRu')
@section('title')

@endsection
@section('content')
    <div class="row hotels-table">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Звезды</th>
                    <th>Ссылка</th>
                </tr>
                </thead>
                @foreach($hotels as $hotel)

                    <tr>
                        <th>{{$hotel->id}}</th>
                        <th>{{$hotel->name}}</th>
                        <th>{{$hotel->star}}</th>
                        <th><a href="{{ $hotel->description}}" target="_blank">Link</a></th>
                    </tr>


                @endforeach

            </table>
        </div>
        <div class="col-md-3">

        </div>
    </div>

@endsection