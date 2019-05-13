@extends('layouts.chairapp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if ($errors->has('msg'))
            <div class="alert alert-success alert-dismissible">
                <div class="{{ $errors->has('msg') ? ' is-invalid' : '' }}" name="msg" autofocus>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ $errors->first('msg') }}</strong>
                </div>
            </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('pages.Pages') }}</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover btn-table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('pages.Pages') }}</th>
                                    <th scope="col">{{ __('pages.last_updated_by') }}</th>
                                    <th scope="col">{{ __('pages.updated_at') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($pages)>0)
                                    @foreach($pages as $page)
                                    <tr>
                                        <td>{{$page->pages}}</td>
                                        <td>{{$page->last_updated_by}}</td>
                                        <td>{{$page->updated_at}}</td>
                                        <td><a href="{{route('pageedit',$page->id)}}" class="btn btn-info">{{ __('pages.edit') }}</a></td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
