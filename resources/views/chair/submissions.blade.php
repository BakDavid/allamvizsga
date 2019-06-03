@extends('layouts.chairapp')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('submission_list.submission_header') }}</div>

                <div class="card-body">

                    @if ($errors->has('msg'))
                    <div class="alert alert-success alert-dismissible">
                        <div class="{{ $errors->has('msg') ? ' is-invalid' : '' }}" name="msg" autofocus>
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{{ $errors->first('msg') }}</strong>
                        </div>
                    </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="myDataTable" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('submission_list.title') }}</th>
                                <th scope="col">{{ __('submission_list.key_words') }}</th>
                                <th scope="col">{{ __('submission_list.conference') }}</th>
                                <th scope="col">{{ __('submission_list.created') }}</th>
                                <th scope="col">{{ __('submission_list.updated') }}</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($submission)>0)
                                @foreach($submission as $subm)
                                <tr>
                                    <td>{{$subm->title}}</td>
                                    <td>{{$subm->key_words}}</td>
                                    <td>{{$subm->name}}</td>
                                    <td>{{$subm->created_at}}</td>
                                    <td>{{$subm->updated_at}}</td>
                                    <td>
                                        <a href="{{ route('chairsubmissionsedit',$subm->id)}}" class="btn btn-info">{{ __('submission_list.edit') }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('chairsubmissionsdelete', $subm->id)}}" onclick="return confirm('{{__('submission_list.are_you_sure')}} {{$subm->title}} ?')" class="btn btn-danger">{{ __('submission_list.delete') }}</a>
                                    </td>
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

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" defer></script>
<script src="{{ asset('js/my_data_table.js') }}" defer></script>
@endsection
