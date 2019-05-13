@extends('layouts.chairapp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('overview.overview') }}</div>

                <div class="card-body">
                    <div class="card-row">
                            <a href="{{ route('overview')}}">{{ __('overview.Pages') }}</a>
                            <p>In the Pages tab you can edit specific pages data.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('overview')}}">{{ __('overview.Conferences') }}</a>
                            <p>In the Conferences tab you can create, edit or delete conferences.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('overview')}}">{{ __('overview.Submissions') }}</a>
                            <p>In the Submissions tab you can edit or delete submissions that users have sent in.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('overview')}}">{{ __('overview.Users') }}</a>
                            <p>In the Conferences tab you can create, edit or delete conferences.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('overview')}}">{{ __('overview.Documents') }}</a>
                            <p>In the Conferences tab you can create, edit or delete conferences.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('overview')}}">{{ __('overview.Mailing') }}</a>
                            <p>In the Conferences tab you can create, edit or delete conferences.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('overview')}}">{{ __('overview.Settings') }}</a>
                            <p>In the Conferences tab you can create, edit or delete conferences.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
