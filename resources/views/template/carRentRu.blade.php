@extends('page.indexRu')
@section('title')

@endsection
@section('content')
    <style>
        table.blueTable {
            border: 1px solid #1C6EA4;
            background-color: #EEEEEE;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        table.blueTable td, table.blueTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }
        table.blueTable tbody td {
            font-size: 13px;
        }
        table.blueTable tr:nth-child(even) {
            background: #D0E4F5;
        }
        table.blueTable thead {
            background: #1C6EA4;
            background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            border-bottom: 2px solid #444444;
        }
        table.blueTable thead th {
            font-size: 15px;
            font-weight: bold;
            color: #FFFFFF;
            border-left: 2px solid #D0E4F5;
        }
        table.blueTable thead th:first-child {
            border-left: none;
        }

        table.blueTable tfoot {
            font-size: 14px;
            font-weight: bold;
            color: #FFFFFF;
            background: #D0E4F5;
            background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            border-top: 2px solid #444444;
        }
        table.blueTable tfoot td {
            font-size: 14px;
        }
        table.blueTable tfoot .links {
            text-align: right;
        }
        table.blueTable tfoot .links a{
            display: inline-block;
            background: #1C6EA4;
            color: #FFFFFF;
            padding: 2px 8px;
            border-radius: 5px;
        }
    </style>
    <div class="row">
        <script>
            var string = '{{ $carsRent }}';



            var pass = string.replace(',',':');
            var arr = pass.split(':');
            var empty = {};
            arr.forEach(function(el,i){
                var b = i + 1, c = b/2, e = c.toString();
                if(e.indexOf('.') != -1 ) {
                    empty[el] = arr[i+1];
                }
            });

        </script>
        <?php die; ?>
        <div class="col-md-3">

        </div>
        <div class="col-md-6" >
            <table class="blueTable" style="height: 262px;">
                <thead>
                <tr>
                    <th>head1</th>
                    <th>head2</th>
                    <th>head2</th>
                    <th>transmission</th>
                    <th>motor</th>
                </tr>
                </thead>

                <tbody>
                @foreach($carsRent as $carRent)
                    <tr>
                        <td>{{ $carRent->name }}</td>
                        <td>{{ $carRent->type }}</td>
                        <td>{{ $carRent->transmission }}</td>
                        <td>{{ $carRent->motor }}</td>
                        <td>{{ $carRent->door }}</td>
                        <td>{{ $carRent->price_list }}</td>

                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-3">

    </div>
@endsection