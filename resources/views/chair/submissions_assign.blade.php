@extends('layouts.chairapp')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('submission_list.assign') }}</div>

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

                    @if(count($submission)>0)
                        @foreach($submission as $subm)
                            <form method="POST" action="{{ route('chairsubmissionsassignpost',$subm->id) }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$subm->id}}" name="subm_id"/>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">{{ __('submission_list.title') }}</th>
                                            <th scope="col">{{ __('submission_list.category') }}</th>
                                            <th scope="col">{{ __('submission_list.reviewer_1') }}</th>
                                            <th scope="col">{{ __('submission_list.reviewer_2') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$subm->title}}</td>
                                            <td>{{$subm->category_name}}</td>
                                            <td>
                                                <select class="form-control{{ $errors->has('reviewer_1') ? ' is-invalid' : '' }}" name="reviewer_1">
                                                    <option></option>
                                                    @foreach($reviewer as $rev)
                                                        <option
                                                            <?php if ($rev->department == $subm->category_name): ?>
                                                                value="{{$rev->id}}">{{$rev->first_name . ' ' . $rev->last_name}}
                                                            <?php endif; ?>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('reviewer_1'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('reviewer_1') }}</strong>
                                                </span>
                                                @endif
                                            </td>
                                            <td>
                                                <select class="form-control{{ $errors->has('reviewer_2') ? ' is-invalid' : '' }}" name="reviewer_2">
                                                    <option></option>
                                                    @foreach($reviewer as $rev)
                                                        <option
                                                            <?php if ($rev->department == $subm->category_name): ?>
                                                                value="{{$rev->id}}">{{$rev->first_name . ' ' . $rev->last_name}}
                                                            <?php endif; ?>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('reviewer_2'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('reviewer_2') }}</strong>
                                                </span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('submission_list.assign') }}
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" defer></script>
<script src="{{ asset('js/my_data_table.js') }}" defer></script>
@endsection
