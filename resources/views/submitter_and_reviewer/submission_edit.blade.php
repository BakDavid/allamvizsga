@extends('layouts.app')

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


            <form method="POST" action="{{ route('submissioneditpost',$submission->id) }}" enctype="multipart/form-data">
                <div class="card">
                    @csrf

                    <div class="card-header">{{ __('submission_edit.basic') }}</div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $submission->title }}" required autofocus>

                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    @if(count($cooperator)>0)
                        @foreach($cooperator as $coop)
                        <div class="card-header">{{ __('submission_edit.coauthor_data') }}</div>

                        <div class="card-body">


                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.first_name') }}</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name[]" value="{{ $coop->first_name }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.last_name') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name[]" value="{{ $coop->last_name }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.student') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control{{ $errors->has('student') ? ' is-invalid' : '' }}" name="student[]" id="student" value="{{ $coop->student }}">
                                        <option
                                        <?php if ($coop->student == "1"): ?>
                                          selected
                                      <?php endif; ?> value="1">{{__('submission_edit.yes')}}</option>
                                        <option
                                        <?php if ($coop->student == "0"): ?>
                                          selected
                                      <?php endif; ?> value="0">{{__('submission_edit.no')}}</option>
                                    </select>

                                    @if ($errors->has('student'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('student') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.birth_date') }}</label>

                                <div class="col-md-6">
                                    <input id="birth_date" type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date[]" value="{{ $coop->birth_date }}" required autofocus>

                                    @if ($errors->has('birth_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.gender') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender[]" id="gender" value="{{ $coop->gender }}">
                                        <option
                                          <?php if ($coop->gender == "Male"): ?>
                                            selected
                                        <?php endif; ?>>{{__('submission_edit.male')}}</option>
                                        <option
                                        <?php if ($coop->gender == "Female"): ?>
                                          selected
                                      <?php endif; ?>>{{__('submission_edit.female')}}</option>
                                    </select>

                                    @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address[]" value="{{ $coop->address }}" required autofocus>

                                    @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.city') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city[]" value="{{ $coop->city }}" required autofocus>

                                    @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.country') }}</label>

                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country[]" value="{{ $coop->country }}" required autofocus>

                                    @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.zipcode') }}</label>

                                <div class="col-md-6">
                                    <input id="zipcode" type="number" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode[]" value="{{ $coop->zipcode }}" required autofocus>

                                    @if ($errors->has('zipcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email[]" value="{{ $coop->email }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.telephone') }}</label>

                                <div class="col-md-6">
                                    <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone[]" value="{{ $coop->telephone }}" required autofocus>

                                    @if ($errors->has('telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="university" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.university') }}</label>

                                <div class="col-md-6">
                                    <input id="university" type="text" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" name="university[]" value="{{ $coop->university }}" required autofocus>

                                    @if ($errors->has('university'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('university') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.department') }}</label>

                                <div class="col-md-6">
                                    <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department[]" value="{{ $coop->department }}" required autofocus>

                                    @if ($errors->has('department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.facebook') }}</label>

                                <div class="col-md-6">
                                    <input id="facebook" type="url" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook[]" value="{{ $coop->facebook }}" autofocus>

                                    @if ($errors->has('facebook'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.twitter') }}</label>

                                <div class="col-md-6">
                                    <input id="twitter" type="url" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter[]" value="{{ $coop->twitter }}" autofocus>

                                    @if ($errors->has('twitter'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="google" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.google') }}</label>

                                <div class="col-md-6">
                                    <input id="google" type="url" class="form-control{{ $errors->has('google') ? ' is-invalid' : '' }}" name="google[]" value="{{ $coop->google }}" autofocus>

                                    @if ($errors->has('google'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('google') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.linkedin') }}</label>

                                <div class="col-md-6">
                                    <input id="linkedin" type="url" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" name="linkedin[]" value="{{ $coop->linkedin }}" autofocus>

                                    @if ($errors->has('linkedin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            @if(!$loop->first)
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <a href="{{ route('cooperatordelete',$coop->id) }}" onclick="return confirm('Are you sure you want to delete {{$coop->first_name . " " . $coop->last_name}} ?')" class="btn btn-primary btn-danger">
                                            {{ __('submission_edit.coauthor_delete') }}
                                        </a>
                                    </div>
                                </div>
                            @endif


                        </div>
                        @endforeach
                    @endif

                    <div id="cooperator_data" class="card-body">

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a id="add_cooperator" class="btn btn-primary btn-success">
                                {{ __('submission_edit.add_other') }}
                            </a>

                            <a id="remove_cooperator" class="btn btn-primary btn-danger">
                                {{ __('submission_edit.remove_author') }}
                            </a>
                        </div>
                    </div>
                    </br>


                    <div class="card">
                        <div class="card-header">{{ __('submission_edit.category') }}</div>
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.category') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="category" value="{{ $submission->category_id }}">
                                        <option></option>
                                        @foreach($categories as $cat)
                                            <option
                                                <?php if ($cat->id == $submission->category_id): ?>
                                                  selected
                                                <?php endif; ?> value="{{$cat->id}}">{{$cat->category_name}}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('category'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">{{ __('submission_edit.content') }}</div>
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="key_words" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.key_words') }}</label>

                                <div class="col-md-6">
                                    <input id="key_words" type="text" class="form-control{{ $errors->has('key_words') ? ' is-invalid' : '' }}" name="key_words" value="{{ $submission->key_words }}" autofocus>

                                    @if ($errors->has('key_words'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('key_words') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="abstract" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.abstract') }}</label>

                                <div class="col-md-6">
                                    <textarea id="abstract" type="text" class="form-control{{ $errors->has('abstract') ? ' is-invalid' : '' }}" name="abstract" autofocus>{{ $submission->abstract }}</textarea>

                                    @if ($errors->has('abstract'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('abstract') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.uploaded_thesis') }}</label>

                                <div class="col-md-6">
                                    <p><a href="{{ route('downloadPDF',$submission->thesis_name_upload)}}">{{ $submission->thesis_name_upload }}</a></p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="thesis_name_upload" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.upload_new_thesis') }}</label>

                                <div class="col-md-6">
                                    <input id="thesis_name_upload" type="file" class="form-control" name="thesis_name_upload" autofocus>

                                    @if ($errors->has('thesis_name_upload'))
                                    <span class="invalid-feedback" role="alert" style="display:block">
                                        <strong>{{ $errors->first('thesis_name_upload') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">{{ __('submission_edit.conference_selection') }}</div>
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="conference" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.conference') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control{{ $errors->has('conference') ? ' is-invalid' : '' }}" name="conference" id="conference" value="{{ old('conference') }}">
                                        <option></option>
                                        @foreach($conferences as $conf)
                                            <option
                                                <?php if ($conf->id == $submission_conference->conference_id): ?>
                                                  selected
                                                <?php endif; ?> value="{{$conf->id}}">{{$conf->name}}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('conference'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('conference') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">{{ __('submission_edit.optional_comment') }}</div>
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('submission_edit.comment') }}</label>

                                <div class="col-md-6">
                                    <textarea id="comment" type="text" class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" autofocus>{{ $submission->comment }}</textarea>

                                    @if ($errors->has('comment'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('submission_edit.update_submission') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="{{ asset('js/new_cooperator.js') }}" defer></script>
@endsection
