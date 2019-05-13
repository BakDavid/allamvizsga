@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('app.program') }}</div>

                <div class="card-body">
                    {!! $pages->pages_content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
