@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="card">
                <div class="card-header">{{$submission->title}}{{__('submission_detail.detail')}}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p><strong>{{__('submission_detail.title')}}</strong> {{ $submission->title }} </p>
                    <p><strong>{{__('submission_detail.key_words')}}</strong> {{ $submission->key_words }} </p>
                    <p><strong>{{__('submission_detail.abstract')}}</strong> {{ $submission->abstract }} </p>
                    <p><strong>{{__('submission_detail.comment')}}</strong> {{ $submission->comment }} </p>
                    <p><strong>{{__('submission_detail.uploaded_thesis')}}</strong>
                        @if($submission->thesis_name_upload != null)
                            <a href="{{ route('downloadPDF',$submission->thesis_name_upload)}}">{{ $submission->thesis_name_upload }}</a>
                        @endif
                    </p>

                </div>
            </div>
            <div class="card">
                <div class="card-header">{{__('submission_detail.team_members')}}</div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      @if(count($cooperator)>0)
                          @foreach($cooperator as $coop)
                      <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">{{ $coop->first_name . " " . $coop->last_name }}</div>
                            <div class="card-body">
                                <p><strong>{{__('submission_detail.first_name')}}</strong> {{ $coop->first_name }} </p>
                                <p><strong>{{__('submission_detail.last_name')}}</strong> {{ $coop->last_name }} </p>
                                <p><strong>{{__('submission_detail.birth_date')}}</strong> {{ $coop->birth_date }} </p>
                                <p><strong>{{__('submission_detail.email')}}</strong> {{ $coop->email }} </p>
                                <p><strong>{{__('submission_detail.telephone')}}</strong> {{ $coop->telephone }} </p>
                                <p><strong>{{__('submission_detail.university')}}</strong> {{ $coop->university }} </p>
                                <p><strong>{{__('submission_detail.department')}}</strong> {{ $coop->department }} </p>
                                <!--
                                <p><strong>{{__('submission_detail.gender')}}</strong>
                                    @if($coop->gender == "Male")
                                        {{__('submission_detail.male')}}
                                    @else
                                        {{__('submission_detail.female')}}
                                    @endif</p>

                                <p><strong>{{__('submission_detail.student')}}</strong>
                                    @if($coop->student == 1)
                                        {{__('submission_detail.yes')}}
                                    @else
                                        {{__('submission_detail.no')}}
                                    @endif</p>
                                -->
                                <p><strong>{{__('submission_detail.address')}}</strong> {{ $coop->address }} </p>
                                <p><strong>{{__('submission_detail.city')}}</strong> {{ $coop->city }} </p>
                                <p><strong>{{__('submission_detail.country')}}</strong> {{ $coop->country }} </p>
                                <p><strong>{{__('submission_detail.zipcode')}}</strong> {{ $coop->zipcode }} </p>

                                <!--
                                <p><strong>{{__('submission_detail.facebook')}}</strong> <a href="{{ $coop->facebook }}">{{ $coop->facebook }}</a> </p>
                                <p><strong>{{__('submission_detail.twitter')}}</strong> <a href="{{ $coop->twitter }}">{{ $coop->twitter }}</a> </p>
                                <p><strong>{{__('submission_detail.google')}}</strong> <a href="{{ $coop->google }}">{{ $coop->google }}</a> </p>
                                <p><strong>{{__('submission_detail.linkedin')}}</strong> <a href="{{ $coop->linkedin }}">{{ $coop->linkedin }}</a> </p>
                                -->
                            </div>
                        </div>
                      </div>
                          @endforeach
                      @endif
                    </div>
                  </div>
                </div>
              </div>

            <div class="card">
                <div class="card-header">{{__('submission_detail.options')}}</div>
                <div class="card-body">

                    <a href="{{ route('submissionlist')}}" class="btn btn-info">{{__('submission_detail.back')}}</a>
                    <a href="{{ route('submissiondelete', $submission->id)}}" onclick="return confirm('{{__('submission_detail.are_you_sure')}} {{$submission->title}} ?')" class="btn btn-danger">{{__('submission_detail.delete')}}</a>
                    <a href="{{ route('submissionedit', $submission->id)}}" class="btn btn-green">{{__('submission_detail.edit')}}</a>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
