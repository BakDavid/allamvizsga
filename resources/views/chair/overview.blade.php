@extends('layouts.chairapp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('overview.Overview') }}</div>

                <div class="card-body">
                    <div class="card-row">
                            <a href="{{ route('pages')}}">{{ __('overview.Pages') }}</a>
                            <p>In the Pages tab you can edit specific pages data.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('conferences')}}">{{ __('overview.Conferences') }}</a>
                            <p>In the Conferences tab you can create, edit or delete conferences.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('chairsubmissions')}}">{{ __('overview.Submissions') }}</a>
                            <p>In the Submissions tab you can edit or delete submissions that users have sent in.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('users')}}">{{ __('overview.Users') }}</a>
                            <p>In the Users tab you can edit or delete users, also you can activate accounts.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('categories')}}">{{ __('overview.Categories') }}</a>
                            <p>In the Users tab you can edit or delete users, also you can activate accounts.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('documents')}}">{{ __('overview.Documents') }}</a>
                            <p>In the Documents tab you can upload important documents. These documents then can be used
                                in the page sites.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('mailing')}}">{{ __('overview.Mailing') }}</a>
                            <p>In the mailing tab you can send email to one or multiple person. Also here you can invite reviewers by
                                sending a registration link to their email.</p>
                    </div>
                    <div class="card-row">
                            <a href="{{ route('settings')}}">{{ __('overview.Settings') }}</a>
                            <p>In the Settings tab you can add sponsors to the site.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
