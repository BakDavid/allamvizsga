@extends('layouts.chairapp')

<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script>
        tinymce.init({selector:'textarea', height : 300, plugins: [
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
            <div class="card">
                <div class="card-header">{{ $pages->pages }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('pageeditpost', $pages->id) }}">
                        @csrf
                        
                        <textarea name="page_textarea" class="form-control">{{$pages->pages_content}}</textarea>

                        <div class="row" style="float:right;padding-right:10px">
                            <a href="{{route('pages')}}" class="btn btn-info">{{ __('pageedit.cancel') }}</a>
                            <button type="submit" class="btn btn-info">{{ __('pageedit.save') }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
