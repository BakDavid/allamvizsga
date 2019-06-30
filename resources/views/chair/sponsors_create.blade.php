@extends('layouts.chairapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

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
                <div class="card-header">{{ __('settings.create_sponsor') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sponsorcreatepost') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="sponsor_name" class="col-md-4 col-form-label text-md-right">{{ __('settings.sponsor_name') }}</label>

                            <div class="col-md-6">
                                <input id="sponsor_name" type="text" class="form-control{{ $errors->has('sponsor_name') ? ' is-invalid' : '' }}" name="sponsor_name" value="{{ old('sponsor_name') }}" required autofocus>

                                @if ($errors->has('sponsor_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sponsor_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sponsor_link" class="col-md-4 col-form-label text-md-right">{{ __('settings.sponsor_link') }}</label>

                            <div class="col-md-6">
                                <input id="sponsor_link" type="url" class="form-control{{ $errors->has('sponsor_link') ? ' is-invalid' : '' }}" name="sponsor_link" value="{{ old('sponsor_link') }}" autofocus required>

                                @if ($errors->has('sponsor_link'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sponsor_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sponsor_image" class="col-md-4 col-form-label text-md-right">{{ __('settings.sponsor_image') }}</label>

                            <div class="col-md-6">
                                <input id="sponsor_image" type="file" class="form-control{{ $errors->has('sponsor_image') ? ' is-invalid' : '' }}" name="sponsor_image" value="{{ old('sponsor_image') }}" autofocus required>

                                @if ($errors->has('sponsor_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sponsor_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-primary" href="{{route('settings')}}">{{ __('settings.cancel') }}</a>
                                <input type="submit" class="btn btn-primary" value="{{ __('settings.create') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
