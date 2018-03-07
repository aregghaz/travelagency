@extends('page.indexRu')
@section('title')

@endsection
@section('content')
    <div class="row hotels-table" style="height: auto">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-bottom: 50px">
            <table id="dataRussian" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Звезды</th>
                    <th>Ссылка</th>
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
                        <td><a href="{{ $hotel->description}}" target="_blank">Ссылка</a></td>
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
            $('#dataRussian').DataTable({
                "language": {
                    "search": "Поиск",

                    "lengthMenu": "Показывать  _MENU_ записи",
                    "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                    "paginate": {
                        "next": "Следущая",
                        "previous": "Предыдущий"
                    }

                },
                "order": [[3, "desc"]]
            });

        });
    </script>
@endsection