@extends('page.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 120px; margin-bottom: 120px">
                <div class="panel panel-default">
                    <div class="panel-heading ">Login to admin panel</div>
                    <div class="panel-body">
                        @if (!empty($errors))
                            @foreach ($errors as $error)
                                <div class="alert alert-danger">
                                    <ul>

                                        <li>{{ $error }}</li>

                                    </ul>
                                </div>
                            @endforeach
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('auth') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
