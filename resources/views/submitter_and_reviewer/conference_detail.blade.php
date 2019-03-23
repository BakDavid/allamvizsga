@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{$conferences->name}}{{__('conference_detail.detail')}}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p><strong>{{__('conference_detail.title')}}</strong> {{ $conferences->name }} </p>
                    <p><strong>{{__('conference_detail.application_start')}}</strong> {{ $conferences->application_start }} </p>
                    <p><strong>{{__('conference_detail.application_deadline')}}</strong> {{ $conferences->application_deadline }} </p>
                    <p><strong>{{__('conference_detail.abstract_upload_deadline')}}</strong> {{ $conferences->abstract_upload_deadline }} </p>
                    <p><strong>{{__('conference_detail.thesis_upload_deadline')}}</strong> {{ $conferences->thesis_upload_deadline }} </p>
                    <p><strong>{{__('conference_detail.conference_day')}}</strong> {{ $conferences->conference_day }} </p>
                    <p><strong>{{__('conference_detail.room')}}</strong> {{ $conferences->room }} </p>
                    <p><strong>{{__('conference_detail.university')}}</strong> {{ $conferences->university }} </p>
                    <p><strong>{{__('conference_detail.address')}}</strong> {{ $conferences->address }} </p>
                    <p><strong>{{__('conference_detail.city')}}</strong> {{ $conferences->city }} </p>
                    <p><strong>{{__('conference_detail.country')}}</strong> {{ $conferences->country }} </p>
                    <p><strong>{{__('conference_detail.zipcode')}}</strong> {{ $conferences->zipcode }} </p>
                    <p><strong>{{__('conference_detail.comment')}}</strong> {{ $conferences->comment }} </p>
                    <p><strong>{{__('conference_detail.participants')}}</strong> {{ $conferences->participants }} </p>
                    <p><strong>{{__('conference_detail.max_participants')}}</strong> {{ $conferences->max_participants }} </p>

                </div>
            </div>

            <div class="card">
                <div class="card-header">{{__('conference_detail.options')}}</div>
                <div class="card-body">

                    <a href="{{ route('conferences')}}" class="btn btn-info">{{__('conference_detail.back')}}</a>
                    @auth
                        <a href="{{ route('submissionlist')}}" class="btn btn-green">{{__('conference_detail.join_viewer')}}</a>
                        <a href="{{ route('submission')}}" class="btn btn-green">{{__('conference_detail.join_presenter')}}</a>
                    @endauth

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
