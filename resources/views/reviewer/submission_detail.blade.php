@extends('layouts.reviewerapp')

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
                            <a href="{{ route('downloadPDFReviewer',$submission->thesis_name_upload)}}">{{ $submission->thesis_name_upload }}</a>
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
                                <p><strong>{{__('submission_detail.address')}}</strong> {{ $coop->address }} </p>
                                <p><strong>{{__('submission_detail.city')}}</strong> {{ $coop->city }} </p>
                                <p><strong>{{__('submission_detail.country')}}</strong> {{ $coop->country }} </p>
                                <p><strong>{{__('submission_detail.zipcode')}}</strong> {{ $coop->zipcode }} </p>
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
                  <div class="card-header">{{__('submission_detail.review')}}</div>
                  <div class="card-body">
                      @if($point != null)
                      <table class="table table-bordered table-responsive">
                          <thead>
                              <tr>
                                  <th scope="col" colspan="2"><strong>{{ __('submission_detail.form_label') }}</strong></th>
                                  <th scope="col" colspan="2"><strong>{{ __('submission_detail.literature_label') }}</strong></th>
                                  <th scope="col" colspan="2"><strong>{{ __('submission_detail.info_collect_label') }}</strong></th>
                                  <th scope="col" colspan="2"><strong>{{ __('submission_detail.conclusion_label') }}</strong></th>
                                  <th scope="col" colspan="2"><strong>{{ __('submission_detail.opinion_label') }}</strong></th>
                                  <th scope="col" colspan="2"><strong>{{ __('submission_detail.abstract_label') }}</strong></th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td scope="col">{{ __('submission_detail.form_1_positive') }}</td>
                                  <td scope="col">{{ $point->form_1}}</td>
                                  <td scope="col">{{ __('submission_detail.literature_1_positive') }}</td>
                                  <td scope="col">{{ $point->literature_1}}</td>
                                  <td scope="col">{{ __('submission_detail.info_collect_1_positive') }}</td>
                                  <td scope="col">{{ $point->info_collect_1}}</td>
                                  <td scope="col">{{ __('submission_detail.conclusion_1_positive') }}</td>
                                  <td scope="col">{{ $point->conclusion_1}}</td>
                                  <td scope="col">{{ __('submission_detail.opinion_1_positive') }}</td>
                                  <td scope="col">{{ $point->opinion_1}}</td>
                                  <td scope="col">{{ __('submission_detail.abstract_1_positive') }}</td>
                                  <td scope="col">{{ $point->abstract_1}}</td>
                              </tr>
                              <tr>
                                  <td scope="col">{{ __('submission_detail.form_2_positive') }}</td>
                                  <td scope="col">{{ $point->form_2}}</td>
                                  <td scope="col">{{ __('submission_detail.literature_2_positive') }}</td>
                                  <td scope="col">{{ $point->literature_2}}</td>
                                  <td scope="col">{{ __('submission_detail.info_collect_2_positive') }}</td>
                                  <td scope="col">{{ $point->info_collect_2}}</td>
                                  <td scope="col">{{ __('submission_detail.conclusion_2_positive') }}</td>
                                  <td scope="col">{{ $point->conclusion_2}}</td>
                                  <td scope="col">{{ __('submission_detail.opinion_2_positive') }}</td>
                                  <td scope="col">{{ $point->opinion_2}}</td>
                                  <td scope="col">{{ __('submission_detail.abstract_2_positive') }}</td>
                                  <td scope="col">{{ $point->abstract_2}}</td>
                              </tr>
                              <tr>
                                  <td scope="col">{{ __('submission_detail.form_3_positive') }}</td>
                                  <td scope="col">{{ $point->form_3}}</td>
                                  <td scope="col">{{ __('submission_detail.literature_3_positive') }}</td>
                                  <td scope="col">{{ $point->literature_3}}</td>
                                  <td scope="col">{{ __('submission_detail.info_collect_3_positive') }}</td>
                                  <td scope="col">{{ $point->info_collect_3}}</td>
                                  <td scope="col">{{ __('submission_detail.conclusion_3_positive') }}</td>
                                  <td scope="col">{{ $point->conclusion_3}}</td>
                                  <td scope="col">{{ __('submission_detail.opinion_3_positive') }}</td>
                                  <td scope="col">{{ $point->opinion_3}}</td>
                                  <td scope="col">{{ __('submission_detail.abstract_3_positive') }}</td>
                                  <td scope="col">{{ $point->abstract_3}}</td>
                              </tr>
                              <tr>
                                  <td scope="col"></td>
                                  <td scope="col"></td>
                                  <td scope="col"></td>
                                  <td scope="col"></td>
                                  <td scope="col">{{ __('submission_detail.info_collect_4_positive') }}</td>
                                  <td scope="col">{{ $point->info_collect_4}}</td>
                                  <td scope="col">{{ __('submission_detail.conclusion_4_positive') }}</td>
                                  <td scope="col">{{ $point->conclusion_4}}</td>
                                  <td scope="col">{{ __('submission_detail.opinion_4_positive') }}</td>
                                  <td scope="col">{{ $point->opinion_4}}</td>
                                  <td scope="col"></td>
                                  <td scope="col"></td>
                              </tr>
                          </tbody>
                      </table>
                      @else
                      <div class="alert alert-danger">
                          <strong>{{ __('submission_detail.not_reviewed') }}</strong>
                      </div>
                      @endif
                  </div>
              </div>

            <div class="card">
                <div class="card-header">{{__('submission_detail.options')}}</div>
                <div class="card-body">
                    <a href="{{ route('review')}}" class="btn btn-info">{{__('submission_detail.back')}}</a>
                    @if($point == null)
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            {{ __('submission_detail.review') }}
                        </button>
                    @else
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                            {{ __('submission_detail.edit') }}
                        </button>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

<!-- The Modal -->
<form method="POST" action="{{ route('reviewpost',$submission->id) }}">
    @csrf
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">{{ __('submission_detail.review_submission') }}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger">
                        <strong>{{__('submission_detail.review_note')}}</strong>
                </div>
                <label class="col-form-label"><strong>{{__('submission_detail.form_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.form_1_positive') }}</th>
                            <th scope="col">{{ __('submission_detail.form_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.form_2_positive') }}</th>
                            <th scope="col">{{ __('submission_detail.form_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.form_3_positive') }}</th>
                            <th scope="col">{{ __('submission_detail.form_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="form_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="form_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="form_comment" name="form_comment" style="width:100%;"></textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.literature_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="literature_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="literature_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="literature_comment" name="literature_comment" style="width:100%;"></textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.info_collect_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_4_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_4_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_4" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_4" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_4" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="info_collect_4" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="info_collect_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="info_collect_comment" name="info_collect_comment" style="width:100%;"></textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.conclusion_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_4_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_4_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_4" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_4" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_4" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="conclusion_4" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="conclusion_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="conclusion_comment" name="conclusion_comment" style="width:100%;"></textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.opinion_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_4_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_4_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_4" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_4" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_4" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="opinion_4" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="opinion_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="opinion_comment" name="opinion_comment" style="width:100%;"></textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.abstract_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input type="radio" name="abstract_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="abstract_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="abstract_comment" name="abstract_comment" style="width:100%;"></textarea>
                <label class="col-form-label"><strong>{{__('submission_detail.full_point')}}</strong></label></br>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">{{ __('submission_detail.create') }}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('submission_detail.close') }}</button>
            </div>

            </div>
        </div>
    </div>
</form>

@if($point != null)
<!-- The Modal -->
<form method="POST" action="{{ route('revieweditpost',$submission->id) }}">
    @csrf
    <div class="modal" id="myModal2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">{{ __('submission_detail.review_submission') }}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger">
                        <strong>{{__('submission_detail.review_note')}}</strong>
                </div>
                <label class="col-form-label"><strong>{{__('submission_detail.form_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.form_1_positive') }}</th>
                            <th scope="col">{{ __('submission_detail.form_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_1 == 2): ?> checked <?php endif; ?>  type="radio" name="form_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_1 == 1): ?> checked <?php endif; ?> type="radio" name="form_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_1 == 0): ?> checked <?php endif; ?> type="radio" name="form_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.form_2_positive') }}</th>
                            <th scope="col">{{ __('submission_detail.form_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_2 == 2): ?> checked <?php endif; ?> type="radio" name="form_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_2 == 1): ?> checked <?php endif; ?> type="radio" name="form_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_2 == 0): ?> checked <?php endif; ?> type="radio" name="form_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.form_3_positive') }}</th>
                            <th scope="col">{{ __('submission_detail.form_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_3 == 2): ?> checked <?php endif; ?> type="radio" name="form_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_3 == 1): ?> checked <?php endif; ?> type="radio" name="form_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->form_3 == 0): ?> checked <?php endif; ?> type="radio" name="form_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="form_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="form_comment" name="form_comment" style="width:100%;">{{ $point->form_comment}}</textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.literature_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_1 == 3): ?> checked <?php endif; ?> type="radio" name="literature_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_1 == 2): ?> checked <?php endif; ?> type="radio" name="literature_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_1 == 1): ?> checked <?php endif; ?> type="radio" name="literature_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_1 == 0): ?> checked <?php endif; ?> type="radio" name="literature_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_2 == 3): ?> checked <?php endif; ?> type="radio" name="literature_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_2 == 2): ?> checked <?php endif; ?> type="radio" name="literature_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_2 == 1): ?> checked <?php endif; ?> type="radio" name="literature_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_2 == 0): ?> checked <?php endif; ?> type="radio" name="literature_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.literature_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_3 == 3): ?> checked <?php endif; ?> type="radio" name="literature_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_3 == 2): ?> checked <?php endif; ?> type="radio" name="literature_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_3 == 1): ?> checked <?php endif; ?> type="radio" name="literature_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->literature_3 == 0): ?> checked <?php endif; ?> type="radio" name="literature_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="literature_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="literature_comment" name="literature_comment" style="width:100%;">{{ $point->literature_comment}}</textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.info_collect_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_1 == 3): ?> checked <?php endif; ?> type="radio" name="info_collect_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_1 == 2): ?> checked <?php endif; ?> type="radio" name="info_collect_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_1 == 1): ?> checked <?php endif; ?> type="radio" name="info_collect_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_1 == 0): ?> checked <?php endif; ?> type="radio" name="info_collect_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_2 == 3): ?> checked <?php endif; ?> type="radio" name="info_collect_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_2 == 2): ?> checked <?php endif; ?> type="radio" name="info_collect_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_2 == 1): ?> checked <?php endif; ?> type="radio" name="info_collect_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_2 == 0): ?> checked <?php endif; ?> type="radio" name="info_collect_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_3 == 3): ?> checked <?php endif; ?> type="radio" name="info_collect_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_3 == 2): ?> checked <?php endif; ?> type="radio" name="info_collect_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_3 == 1): ?> checked <?php endif; ?> type="radio" name="info_collect_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_3 == 0): ?> checked <?php endif; ?> type="radio" name="info_collect_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_4_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.info_collect_4_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_4 == 3): ?> checked <?php endif; ?> type="radio" name="info_collect_4" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_4 == 2): ?> checked <?php endif; ?> type="radio" name="info_collect_4" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_4 == 1): ?> checked <?php endif; ?> type="radio" name="info_collect_4" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->info_collect_4 == 0): ?> checked <?php endif; ?> type="radio" name="info_collect_4" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="info_collect_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="info_collect_comment" name="info_collect_comment" style="width:100%;">{{ $point->info_collect_comment}}</textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.conclusion_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_1 == 3): ?> checked <?php endif; ?> type="radio" name="conclusion_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_1 == 2): ?> checked <?php endif; ?> type="radio" name="conclusion_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_1 == 1): ?> checked <?php endif; ?> type="radio" name="conclusion_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_1 == 0): ?> checked <?php endif; ?> type="radio" name="conclusion_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_2 == 3): ?> checked <?php endif; ?> type="radio" name="conclusion_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_2 == 2): ?> checked <?php endif; ?> type="radio" name="conclusion_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_2 == 1): ?> checked <?php endif; ?> type="radio" name="conclusion_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_2 == 0): ?> checked <?php endif; ?> type="radio" name="conclusion_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_3 == 3): ?> checked <?php endif; ?> type="radio" name="conclusion_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_3 == 2): ?> checked <?php endif; ?> type="radio" name="conclusion_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_3 == 1): ?> checked <?php endif; ?> type="radio" name="conclusion_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_3 == 0): ?> checked <?php endif; ?> type="radio" name="conclusion_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_4_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.conclusion_4_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_4 == 3): ?> checked <?php endif; ?> type="radio" name="conclusion_4" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_4 == 2): ?> checked <?php endif; ?> type="radio" name="conclusion_4" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_4 == 1): ?> checked <?php endif; ?> type="radio" name="conclusion_4" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->conclusion_4 == 0): ?> checked <?php endif; ?> type="radio" name="conclusion_4" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="conclusion_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="conclusion_comment" name="conclusion_comment" style="width:100%;">{{ $point->conclusion_comment}}</textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.opinion_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_1 == 3): ?> checked <?php endif; ?> type="radio" name="opinion_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_1 == 2): ?> checked <?php endif; ?> type="radio" name="opinion_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_1 == 1): ?> checked <?php endif; ?> type="radio" name="opinion_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_1 == 0): ?> checked <?php endif; ?> type="radio" name="opinion_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_2 == 3): ?> checked <?php endif; ?> type="radio" name="opinion_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_2 == 2): ?> checked <?php endif; ?> type="radio" name="opinion_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_2 == 1): ?> checked <?php endif; ?> type="radio" name="opinion_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_2 == 0): ?> checked <?php endif; ?> type="radio" name="opinion_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_3 == 3): ?> checked <?php endif; ?> type="radio" name="opinion_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_3 == 2): ?> checked <?php endif; ?> type="radio" name="opinion_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_3 == 1): ?> checked <?php endif; ?> type="radio" name="opinion_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_3 == 0): ?> checked <?php endif; ?> type="radio" name="opinion_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_4_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.opinion_4_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_4 == 3): ?> checked <?php endif; ?> type="radio" name="opinion_4" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_4 == 2): ?> checked <?php endif; ?> type="radio" name="opinion_4" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_4 == 1): ?> checked <?php endif; ?> type="radio" name="opinion_4" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->opinion_4 == 0): ?> checked <?php endif; ?> type="radio" name="opinion_4" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="opinion_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="opinion_comment" name="opinion_comment" style="width:100%;">{{ $point->opinion_comment}}</textarea>

                <label class="col-form-label"><strong>{{__('submission_detail.abstract_label')}}</strong></label></br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_1_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_1_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_1 == 3): ?> checked <?php endif; ?> type="radio" name="abstract_1" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_1 == 2): ?> checked <?php endif; ?> type="radio" name="abstract_1" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_1 == 1): ?> checked <?php endif; ?> type="radio" name="abstract_1" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_1 == 0): ?> checked <?php endif; ?> type="radio" name="abstract_1" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_2_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_2_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_2 == 3): ?> checked <?php endif; ?> type="radio" name="abstract_2" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_2 == 2): ?> checked <?php endif; ?> type="radio" name="abstract_2" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_2 == 1): ?> checked <?php endif; ?> type="radio" name="abstract_2" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_2 == 0): ?> checked <?php endif; ?> type="radio" name="abstract_2" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_3_positive') }}</th>
                            <th scope="col" colspan="2">{{ __('submission_detail.abstract_3_negative') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_3 == 3): ?> checked <?php endif; ?> type="radio" name="abstract_3" value="3">3</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_3 == 2): ?> checked <?php endif; ?> type="radio" name="abstract_3" value="2">2</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_3 == 1): ?> checked <?php endif; ?> type="radio" name="abstract_3" value="1">1</label></td>
                            <td scope="col"><label class="radio-inline"><input <?php if($point->abstract_3 == 0): ?> checked <?php endif; ?> type="radio" name="abstract_3" value="0">0</label></td>
                        </tr>
                    </tbody>
                </table>
                <label for="abstract_comment" class="col-form-label"><strong>{{__('submission_detail.comment')}}</strong></label></br>
                <textarea id="abstract_comment" name="abstract_comment" style="width:100%;">{{ $point->abstract_comment}}</textarea>
                <label class="col-form-label"><strong>{{__('submission_detail.full_point')}}</strong></label></br>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">{{ __('submission_detail.edit') }}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('submission_detail.close') }}</button>
            </div>

            </div>
        </div>
    </div>
</form>
@endif

@endsection
