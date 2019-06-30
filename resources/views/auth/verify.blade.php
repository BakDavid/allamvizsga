@extends('layouts.auth_app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('verify.verify_email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('verify.fresh_email_sent') }}
                        </div>
                    @endif

                    {{ __('verify.before_proceeding') }}
                    {{ __('verify.if_not_received') }}, <a href="{{ route('verification.resend') }}">{{ __('verify.click_here') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
