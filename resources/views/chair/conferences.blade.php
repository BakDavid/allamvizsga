@extends('layouts.chairapp')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if ($errors->has('msg'))
            <div class="alert alert-success alert-dismissible">
                <div class="{{ $errors->has('msg') ? ' is-invalid' : '' }}" name="msg" autofocus>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ $errors->first('msg') }}</strong>
                </div>
            </div>
            @endif

            <div class="card">

                <div class="card-header">{{ __('conferences.conferences') }}</div>

                <div class="card-body">

                    <a href="{{route('chairconferencescreate')}}" class="btn btn-info">{{ __('conferences.create') }}</a>

                    <div class="table-responsive table-bordered">
                        <table id="myDataTable" class="table table-hover btn-table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('conferences.name') }}</th>
                                    <th scope="col">{{ __('conferences.application_start') }}</th>
                                    <th scope="col">{{ __('conferences.application_deadline') }}</th>
                                    <th scope="col">{{ __('conferences.abstract_upload_deadline') }}</th>
                                    <th scope="col">{{ __('conferences.thesis_upload_deadline') }}</th>
                                    <th scope="col">{{ __('conferences.conference_day') }}</th>
                                    <th scope="col">{{ __('conferences.room') }}</th>
                                    <th scope="col">{{ __('conferences.university') }}</th>
                                    <th scope="col">{{ __('conferences.address') }}</th>
                                    <th scope="col">{{ __('conferences.city') }}</th>
                                    <th scope="col">{{ __('conferences.country') }}</th>
                                    <th scope="col">{{ __('conferences.zipcode') }}</th>
                                    <!--<th scope="col">{{ __('conferences.comment') }}</th>-->
                                    <th scope="col">{{ __('conferences.current_people') }}</th>
                                    <th scope="col">{{ __('conferences.max_people') }}</th>
                                    <th></th>
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
                                        <td>{{$conf->conference_day}}</td>
                                        <td>{{$conf->room}}</td>
                                        <td>{{$conf->university}}</td>
                                        <td>{{$conf->address}}</td>
                                        <td>{{$conf->city}}</td>
                                        <td>{{$conf->country}}</td>
                                        <td>{{$conf->zipcode}}</td>
                                        <!--<td>{{$conf->comment}}</td>-->
                                        <td>{{$conf->participants}}</td>
                                        <td>{{$conf->max_participants}}</td>
                                        <td><a href="{{route('chairconferencesedit',$conf->id)}}" class="btn btn-info">{{ __('conferences.edit') }}</a></td>
                                        <td><a href="{{route('chairconferencesdelete',$conf->id)}}"
                                            onclick="return confirm('{{__('conferences.are_you_sure')}} {{$conf->name}} ?')"
                                             class="btn btn-danger">{{ __('conferences.delete') }}</a></td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" defer></script>
<script src="{{ asset('js/my_data_table.js') }}" defer></script>
@endsection
