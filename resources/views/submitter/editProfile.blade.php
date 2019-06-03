@extends('layouts.app')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
                <div class="card-header">{{ __('editProfile.personal') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('editProfileUpdate', Auth::user()->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.first_name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ Auth::user()->first_name }}" required autofocus>

                                @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.last_name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ Auth::user()->last_name }}" required autofocus>

                                @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ Auth::user()->telephone }}" required autofocus>

                                @if ($errors->has('telephone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.university') }}</label>

                            <div class="col-md-6">
                                <input id="university" type="text" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" name="university" value="{{ Auth::user()->university }}" required autofocus>

                                @if ($errors->has('university'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('university') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.department') }}</label>

                            <div class="col-md-6">

                                <select class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" id="department">
                                    <option></option>
                                    @foreach($category as $cat)
                                        <option
                                            <?php if ($cat->category_name == Auth::user()->department): ?>
                                              selected
                                            <?php endif; ?> value="{{$cat->category_name}}">{{$cat->category_name}}
                                        </option>
                                    @endforeach
                                </select>

                                @if ($errors->has('department'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.birth_date') }}</label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ Auth::user()->birth_date }}" required autofocus>

                                @if ($errors->has('birth_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('birth_date') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!--
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.gender') }}</label>

                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" id="gender" value="{{ Auth::user()->gender }}">
                                    <option>{{__('editProfile.male')}}</option>
                                    <option>{{__('editProfile.female')}}</option>
                                </select>

                                @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        -->

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ Auth::user()->address }}" required autofocus>

                                @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.city') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ Auth::user()->city }}" required autofocus>

                                @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ Auth::user()->country }}" required autofocus>

                                @if ($errors->has('country'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.zipcode') }}</label>

                            <div class="col-md-6">
                                <input id="zipcode" type="number" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" value="{{ Auth::user()->zipcode }}" required autofocus>

                                @if ($errors->has('zipcode'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('zipcode') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>



                        <!--
                        <div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.facebook') }}</label>

                            <div class="col-md-6">
                                <input id="facebook" type="url" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ Auth::user()->facebook }}" autofocus>

                                @if ($errors->has('facebook'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('facebook') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.twitter') }}</label>

                            <div class="col-md-6">
                                <input id="twitter" type="url" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" value="{{ Auth::user()->twitter }}" autofocus>

                                @if ($errors->has('twitter'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('twitter') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="google" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.google') }}</label>

                            <div class="col-md-6">
                                <input id="google" type="url" class="form-control{{ $errors->has('google') ? ' is-invalid' : '' }}" name="google" value="{{ Auth::user()->google }}" autofocus>

                                @if ($errors->has('google'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('google') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.linkedin') }}</label>

                            <div class="col-md-6">
                                <input id="linkedin" type="url" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" name="linkedin" value="{{ Auth::user()->linkedin }}" autofocus>

                                @if ($errors->has('linkedin'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('linkedin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('editProfile.update_profile') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('editProfile.password_change') }}</div>
                <div class="card-body">

                    <form method="POST" action="{{ route('editProfilePasswordChange',Auth::user()->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.current_password') }}</label>

                            <div class="col-md-6">
                                <input id="current_password" type="password" class="form-control{{ $errors->has('current_password') ? ' is-invalid' : '' }}" name="current_password" autofocus>

                                @if ($errors->has('current_password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('current_password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.new_password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" autofocus>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.new_password_confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="g-recaptcha" class="col-md-4 col-form-label text-md-right">{{ __('editProfile.captcha') }}</label>

                            <div class="col-md-6">
                                <div class="g-recaptcha form-control{{ $errors->has('g-recaptcha-response') ? ' is-invalid' : '' }}" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>

                                @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('editProfile.update_password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
