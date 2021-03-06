@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{__('conference_participation_list.conferences_attending')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="myDataTable" class="table table-hover btn-table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">{{__('conference_participation_list.title')}}</th>
                                <th scope="col">{{__('conference_participation_list.application_start')}}</th>
                                <th scope="col">{{__('conference_participation_list.application_deadline')}}</th>
                                <th scope="col">{{__('conference_participation_list.abstract_upload_deadline')}}</th>
                                <th scope="col">{{__('conference_participation_list.thesis_upload_deadline')}}</th>
                                <th scope="col">{{__('conference_participation_list.max_participants')}}</th>
                                <th scope="col">{{__('conference_participation_list.participants')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($conferences)>0)
                                @foreach($conferences as $conf)
                                <tr>
                                    <td>{{$conf->name}}</td>
                                    <td>{{$conf->application_start}}</td>
                                    <td>{{$conf->application_deadline}}</td>
                                    <td>{{$conf->abstract_upload_deadline}}</td>
                                    <td>{{$conf->thesis_upload_deadline}}</td>
                                    <td>{{$conf->max_participants}}</td>
                                    <td>{{$conf->participants}}</td>
                                    <td><a href="{{route('conferencedetail',$conf->id)}}" class="btn btn-info">{{__('conference_participation_list.details')}}</a></td>
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
