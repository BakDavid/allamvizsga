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

            <div class="card">
                <div class="card-header">{{ __('conferencesedit.conferences') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('chairconferencescreatepost') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="application_start" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.application_start') }}</label>

                            <div class="col-md-6">
                                <input id="application_start" type="date" class="form-control{{ $errors->has('application_start') ? ' is-invalid' : '' }}" name="application_start" value="{{ old('application_start') }}" autofocus required>

                                @if ($errors->has('application_start'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('application_start') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="application_deadline" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.application_deadline') }}</label>

                            <div class="col-md-6">
                                <input id="application_deadline" type="date" class="form-control{{ $errors->has('application_deadline') ? ' is-invalid' : '' }}" name="application_deadline" value="{{ old('application_deadline') }}" autofocus required>

                                @if ($errors->has('application_deadline'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('application_deadline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="abstract_upload_deadline" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.abstract_upload_deadline') }}</label>

                            <div class="col-md-6">
                                <input id="abstract_upload_deadline" type="date" class="form-control{{ $errors->has('abstract_upload_deadline') ? ' is-invalid' : '' }}" name="abstract_upload_deadline" value="{{ old('abstract_upload_deadline') }}" autofocus required>

                                @if ($errors->has('abstract_upload_deadline'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('abstract_upload_deadline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="thesis_upload_deadline" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.thesis_upload_deadline') }}</label>

                            <div class="col-md-6">
                                <input id="thesis_upload_deadline" type="date" class="form-control{{ $errors->has('thesis_upload_deadline') ? ' is-invalid' : '' }}" name="thesis_upload_deadline" value="{{ old('thesis_upload_deadline') }}" autofocus required>

                                @if ($errors->has('thesis_upload_deadline'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('thesis_upload_deadline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="conference_day" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.conference_day') }}</label>

                            <div class="col-md-6">
                                <input id="conference_day" type="date" class="form-control{{ $errors->has('conference_day') ? ' is-invalid' : '' }}" name="conference_day" value="{{ old('conference_day') }}" autofocus required>

                                @if ($errors->has('conference_day'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('conference_day') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="room" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.room') }}</label>

                            <div class="col-md-6">
                                <input id="room" type="text" class="form-control{{ $errors->has('room') ? ' is-invalid' : '' }}" name="room" value="{{ old('room') }}" autofocus>

                                @if ($errors->has('room'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('room') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.university') }}</label>

                            <div class="col-md-6">
                                <input id="university" type="text" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" name="university" value="{{ old('university') }}" required autofocus>

                                @if ($errors->has('university'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.city') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.zipcode') }}</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="number" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" value="{{ old('zipcode') }}" autofocus>

                                @if ($errors->has('zipcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="max_participants" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.max_participants') }}</label>

                            <div class="col-md-6">
                                <input id="max_participants" type="number" class="form-control{{ $errors->has('max_participants') ? ' is-invalid' : '' }}" name="max_participants" value="{{ old('max_participants') }}" autofocus>

                                @if ($errors->has('max_participants'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('max_participants') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('conferencesedit.comment') }}</label>

                            <div class="col-md-6">
                                <textarea id="comment" type="text" class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" autofocus>{{ old('comment') }}</textarea>

                                @if ($errors->has('comment'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-primary" href="{{route('chairconferences')}}">{{ __('conferencesedit.cancel') }}</a>
                                <input type="submit" class="btn btn-primary" value="{{ __('conferencesedit.create_button') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
