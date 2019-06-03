@extends('layouts.app')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('register_lang.register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.first_name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" title="{{ __('register_lang.first_name_title')}}" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.last_name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" title="{{ __('register_lang.last_name_title')}}" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" title="{{ __('register_lang.email_title')}}" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" title="{{ __('register_lang.telephone_title')}}" value="{{ old('telephone') }}" required autofocus>

                                @if ($errors->has('telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.university') }}</label>

                            <div class="col-md-6">
                                <input id="university" type="text" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" name="university" title="{{ __('register_lang.university_title')}}" value="{{ old('university') }}" required autofocus>

                                @if ($errors->has('university'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.department') }}</label>

                            <div class="col-md-6">

                                <select class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" id="department" title="{{ __('register_lang.department_title')}}" required autofocus>
                                    <option></option>
                                    @foreach($category as $cat)
                                        <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--
                        <div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.facebook') }}</label>

                            <div class="col-md-6">
                                <input id="facebook" type="url" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" value="{{ old('facebook') }}" autofocus>

                                @if ($errors->has('facebook'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.twitter') }}</label>

                            <div class="col-md-6">
                                <input id="twitter" type="url" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" value="{{ old('twitter') }}" autofocus>

                                @if ($errors->has('twitter'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="google" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.google') }}</label>

                            <div class="col-md-6">
                                <input id="google" type="url" class="form-control{{ $errors->has('google') ? ' is-invalid' : '' }}" name="google" value="{{ old('google') }}" autofocus>

                                @if ($errors->has('google'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('google') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.linkedin') }}</label>

                            <div class="col-md-6">
                                <input id="linkedin" type="url" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" name="linkedin" value="{{ old('linkedin') }}" autofocus>

                                @if ($errors->has('linkedin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    -->
                    <div class="form-group row">
                        <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.birth_date') }}</label>

                        <div class="col-md-6">
                            <input id="birth_date" type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" title="{{ __('register_lang.birth_date_title')}}" value="{{ old('birth_date') }}" autofocus>

                            @if ($errors->has('birth_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('birth_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <!--
                    <div class="form-group row">
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.gender') }}</label>

                        <div class="col-md-6">
                            <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" id="gender" value="{{ old('gender') }}">
                                <option>{{__('register_lang.male')}}</option>
                                <option>{{__('register_lang.female')}}</option>
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
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.address') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" title="{{ __('register_lang.address_title')}}" value="{{ old('address') }}" autofocus>

                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.city') }}</label>

                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" title="{{ __('register_lang.city_title')}}" value="{{ old('city') }}" autofocus>

                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.country') }}</label>

                        <div class="col-md-6">
                            <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" title="{{ __('register_lang.country_title')}}" value="{{ old('country') }}" autofocus>

                            @if ($errors->has('country'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.zipcode') }}</label>

                        <div class="col-md-6">
                            <input id="zipcode" type="number" class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode" title="{{ __('register_lang.zipcode_title')}}" value="{{ old('zipcode') }}" autofocus>

                            @if ($errors->has('zipcode'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('zipcode') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" title="{{ __('register_lang.password_title')}}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.password_confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" title="{{ __('register_lang.password_confirm_title')}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="g-recaptcha" class="col-md-4 col-form-label text-md-right">{{ __('register_lang.captcha') }}</label>

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
                                <input type="submit" class="btn btn-primary" value="{{ __('register_lang.register') }}">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
