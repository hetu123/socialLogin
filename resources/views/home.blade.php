@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {{--<div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>--}}
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                    </tr>
                    <tr>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
