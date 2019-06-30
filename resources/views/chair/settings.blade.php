@extends('layouts.chairapp')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('overview.Settings') }}</div>

                <div class="card-body">

                    <a href="{{route('sponsorcreate')}}" class="btn btn-info">{{ __('settings.create_sponsor') }}</a>

                    <div class="table-responsive table-bordered">
                        <table id="myDataTable" class="table table-hover btn-table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('settings.sponsor_name') }}</th>
                                    <th scope="col">{{ __('settings.sponsor_link') }}</th>
                                    <th scope="col">{{ __('settings.sponsor_image') }}</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($sponsors)>0)
                                    @foreach($sponsors as $sponsor)
                                    <tr>
                                        <td>{{$sponsor->sponsor_name}}</td>
                                        <td>{{$sponsor->sponsor_url}}</td>
                                        <td>{{$sponsor->sponsor_image}}</td>
                                        <td><a href="{{route('sponsoredit',$sponsor->id)}}" class="btn btn-info">{{ __('settings.edit') }}</a></td>
                                        <td><a href="{{route('sponsordelete',$sponsor->id)}}"
                                            onclick="return confirm('{{__('settings.are_you_sure')}} {{$sponsor->sponsor_name}} ?')"
                                             class="btn btn-danger">{{ __('settings.delete') }}</a></td>
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
