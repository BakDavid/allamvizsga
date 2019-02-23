@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Conferences</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="myDataTable" class="table table-hover btn-table">
                        <thead>
                            <tr>
                                <th scope="col">Conference name</th>
                                <th scope="col">Submission send start</th>
                                <th scope="col">Submission send end</th>
                                <th scope="col">Country</th>
                                <th scope="col">University</th>
                                <th scope="col">Maximum people</th>
                                <th scope="col">Current people</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($conferences)>0)
                                @foreach($conferences as $conf)
                                <tr>
                                    <td>{{$conf->name}}</td>
                                    <td>{{$conf->submission_send_start}}</td>
                                    <td>{{$conf->submission_send_end}}</td>
                                    <td>{{$conf->country}}</td>
                                    <td>{{$conf->university}}</td>
                                    <td>{{$conf->max_participants}}</td>
                                    <td>{{$conf->participants}}</td>
                                    <td><a class="btn btn-info">Details</a></td>
                                </tr>  
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <!--{{ $conferences->links() }}-->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" defer></script>
<script src="{{ asset('js/my_data_table.js') }}" defer></script>
@endsection
