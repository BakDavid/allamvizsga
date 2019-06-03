@extends('layouts.reviewerapp')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('submission_list.review') }}</div>

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

                    <table id="myDataTable" class="table table-hover table-bordered btn-table">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('submission_list.title') }}</th>
                                <th scope="col">{{ __('submission_list.key_words') }}</th>
                                <th scope="col">{{ __('submission_list.conference') }}</th>
                                <th scope="col">{{ __('submission_list.created') }}</th>
                                <th scope="col">{{ __('submission_list.updated') }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($submissions)>0)
                                @foreach($submissions as $subm)
                                <tr>
                                    <td>{{$subm->title}}</td>
                                    <td>{{$subm->key_words}}</td>
                                    <td>{{$subm->name}}</td>
                                    <td>{{$subm->created_at}}</td>
                                    <td>{{$subm->updated_at}}</td>
                                    <td>
                                        <a href="{{ route('submissiondetailreviewer',$subm->id)}}" class="btn btn-info">{{ __('submission_list.details') }}</a>
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
