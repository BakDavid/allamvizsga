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

                <div class="card-header">{{ __('users.users') }}</div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-hover btn-table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('users.first_name') }}</th>
                                    <th scope="col">{{ __('users.last_name') }}</th>
                                    <th scope="col">{{ __('users.email') }}</th>
                                    <th scope="col">{{ __('users.telephone') }}</th>
                                    <th scope="col">{{ __('users.university') }}</th>
                                    <th scope="col">{{ __('users.department') }}</th>
                                    <th scope="col">{{ __('users.user_type') }}</th>
                                    <th scope="col">{{ __('users.activated') }}</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($users)>0)
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->telephone}}</td>
                                        <td>{{$user->university}}</td>
                                        <td>{{$user->department}}</td>
                                        <td>{{$user->user_type}}</td>
                                        <td>
                                            @if($user->email_verified_at == null)
                                                {{__('users.not_activated')}}
                                            @else
                                                {{$user->email_verified_at}}
                                            @endif
                                        </td>
                                        <td><a href="{{route('usersedit',$user->id)}}" class="btn btn-info">{{ __('users.edit') }}</a></td>
                                        <td><a href="{{route('usersdelete',$user->id)}}"
                                            onclick="return confirm('{{__('users.are_you_sure')}} {{$user->first_name . $user->last_name}} ?')"
                                             class="btn btn-danger">{{ __('users.delete') }}</a></td>
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
