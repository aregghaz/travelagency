@extends('page.index')
@section('title')

@endsection
@section('content')

    <div class="row hotels-table" style="height: auto">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-bottom: 50px">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Stars</th>
                    <th>Link</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $count = 1;
                ?>
                @foreach($hotels as $hotel)

                    <tr>
                        <td><?php echo $count; $count++ ?></td>
                        <td>{{$hotel->name}}</td>
                        <td>{{$hotel->star}}</td>
                        <td><a href="{{ $hotel->description}}" target="_blank">Link</a></td>
                    </tr>


                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "order": [[3, "desc"]]
            });
        });
    </script>
@endsection