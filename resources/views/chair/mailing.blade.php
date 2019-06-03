@extends('layouts.chairapp')

<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script>
        tinymce.init({mode : "specific_textareas",editor_selector:'myTextEditor', height : 300, plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste textcolor"
    ],

    toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

    menubar: false,
    language: "hu_HU"
});
</script>

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

            @if ($errors->has('errmsg'))
            <div class="alert alert-danger alert-dismissible">
                <div class="{{ $errors->has('errmsg') ? ' is-invalid' : '' }}" name="msg" autofocus>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ $errors->first('errmsg') }}</strong>
                </div>
            </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('mailing.mailing') }}</div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover btn-table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('mailing.reviewer_invitation') }}</th>
                                    <th scope="col">{{ __('mailing.direct_email') }}</th>
                                    <th scope="col">{{ __('mailing.multi_email') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            {{ __('mailing.invite') }}
                                        </button>
                                    </td>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                                            {{ __('mailing.send') }}
                                        </button>
                                    </td>
                                    <td>
                                        <!-- Button to Open the Modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
                                            {{ __('mailing.send') }}
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <!-- The Modal -->
                    <form method="POST" action="{{ route('mailingpost') }}">
                        @csrf
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">{{ __('mailing.reviewer_invitation') }}</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <label for="category" class="control-label">{{ __('mailing.category') }}</label>
                                    <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="category">
                                        <option></option>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <textarea id="reviewer_mail" name="reviewer_mail" style="width:100%;"
                                    placeholder="{{ __('mailing.reviewer_invitation_placeholder') }}"></textarea>
                                    <div class="alert alert-danger">
                                            <strong>{{__('mailing.reviewer_invitation_note')}}</strong>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info">{{ __('mailing.send') }}</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('mailing.close') }}</button>
                                </div>

                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- The Modal -->
                    <form method="POST" action="{{ route('directmailpost') }}">
                        @csrf
                        <div class="modal" id="myModal2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">{{ __('mailing.direct_email') }}</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <label for="direct_email" class="control-label">{{__('mailing.email')}}</label>
                                    <input type="text" name="direct_email" id="direct_email" class="form-control" placeholder="{{__('mailing.mail_placeholder')}}"/>
                                    <label for="direct_email_subject" class="control-label">{{__('mailing.email_subject')}}</label>
                                    <input type="text" name="direct_email_subject" id="direct_email_subject" class="form-control" placeholder="{{__('mailing.mail_subject_placeholder')}}"/>
                                    <textarea id="direct_mail_message" name="direct_mail_message" class="myTextEditor" style="width:100%;"
                                    placeholder="{{ __('mailing.direct_mail_message_placeholder') }}"></textarea>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info">{{ __('mailing.send') }}</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('mailing.close') }}</button>
                                </div>

                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- The Modal -->
                    <form method="POST" action="{{ route('multiplemailpost') }}">
                        @csrf
                        <div class="modal" id="myModal3">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">{{ __('mailing.multi_email') }}</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <label for="user_type" class="control-label">{{ __('mailing.user_type') }}</label>
                                    <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="user_type" id="user_type">
                                        <option value="0">{{ __('mailing.all') }}</option>
                                        <option value="1">{{ __('mailing.submitters_only') }}</option>
                                        <option value="2">{{ __('mailing.reviewers_only') }}</option>
                                        <option value="3">{{ __('mailing.chair_only') }}</option>
                                    </select>
                                    <label for="category" class="control-label">{{ __('mailing.category') }}</label>
                                    <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="category">
                                        <option value="0">{{ __('mailing.all') }}</option>
                                        @foreach($categories as $cat)
                                            <option>{{$cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="multiple_email_subject" class="control-label">{{__('mailing.email_subject')}}</label>
                                    <input type="text" name="multiple_email_subject" id="multiple_email_subject" class="form-control" placeholder="{{__('mailing.mail_subject_placeholder')}}"/>
                                    <textarea id="multiple_email_message" name="multiple_email_message" class="myTextEditor" style="width:100%;"
                                    placeholder="{{ __('mailing.direct_mail_message_placeholder') }}"></textarea>
                                    <div class="alert alert-danger">
                                            <strong>{{__('mailing.multiple_email_note')}}</strong>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info">{{ __('mailing.send') }}</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('mailing.close') }}</button>
                                </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
