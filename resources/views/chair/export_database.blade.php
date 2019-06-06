@extends('layouts.chairapp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            @if ($errors->has('msg'))
            <div class="alert alert-success alert-dismissible">
                <div class="{{ $errors->has('msg') ? ' is-invalid' : '' }}" name="msg" autofocus>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ $errors->first('msg') }}</strong>
                </div>
            </div>
            @endif

            @if ($errors->has('errmsg'))
            <div class="alert alert-danger alert-dismissible">
                <div class="{{ $errors->has('errmsg') ? ' is-invalid' : '' }}" name="msg" autofocus>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ $errors->first('errmsg') }}</strong>
                </div>
            </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('chairapp.export_database') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <form method="POST" action="{{ route('export_database_post') }}" enctype="multipart/form-data">
                                @csrf
                                <select class="form-control" name="export_database">
                                    <!--<option>All</option>-->
                                    <option>Users</option>
                                    <option>Categories</option>
                                    <option>Conferences</option>
                                    <option>Cooperators</option>
                                    <option>Pages</option>
                                    <option>Points</option>
                                    <option>Reviewer_Points</option>
                                    <option>Reviewer_Submissions</option>
                                    <option>Submission_Conferences</option>
                                    <option>Submission_Cooperators</option>
                                    <option>Submission_Points</option>
                                    <option>Submission</option>
                                    <option>User_Submissions</option>
                                </select>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('chairapp.export') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
