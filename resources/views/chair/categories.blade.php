@extends('layouts.chairapp')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

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

                <div class="card-header">{{ __('categories.category') }}</div>

                <div class="card-body">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        {{ __('categories.create') }}
                    </button>

                    <div class="table-responsive table-bordered">
                        <table id="myDataTable" class="table table-hover btn-table">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('categories.category') }}</th>
                                    <th scope="col">{{ __('categories.created_at') }}</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($categories)>0)
                                    @foreach($categories as $cat)
                                    <tr>
                                        <td>{{$cat->category_name}}</td>
                                        <td>{{$cat->created_at}}</td>
                                        <td><button type="button" class="btn btn-primary edit_modal_button" data-toggle="modal" data-id="{{$cat->id}}" data-name="{{$cat->category_name}}" data-target="#myModal2">{{ __('categories.edit') }}</button></td>
                                        <td><a href="{{route('categoriesdelete',$cat->id)}}"
                                            onclick="return confirm('{{__('categories.are_you_sure')}} {{$cat->category_name}} ?')"
                                             class="btn btn-danger">{{ __('categories.delete') }}</a></td>
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

<!-- The Modal -->
<form method="POST" action="{{ route('categoriescreatepost') }}">
    @csrf
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">{{ __('categories.create') }}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="category" class="control-label">{{ __('categories.category') }}</label>
                <input type="text" id="category_create" name="category_create" class="form-control"
                placeholder="{{ __('categories.categories_placeholder') }}"/>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">{{ __('categories.create') }}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('categories.close') }}</button>
            </div>

            </div>
        </div>
    </div>
</form>

<!-- The Modal -->
<form method="POST" action="{{ route('categorieseditpost') }}">
    @csrf
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">{{ __('categories.edit') }}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="cat_id" name="cat_id"/>
                <label for="category" class="control-label">{{ __('categories.category') }}</label>
                <input type="text" id="category_edit" name="category_edit" class="form-control"
                placeholder="{{ __('categories.categories_placeholder') }}"/>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">{{ __('categories.update') }}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('categories.close') }}</button>
            </div>

            </div>
        </div>
    </div>
</form>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" defer></script>
<script src="{{ asset('js/my_data_table.js') }}" defer></script>
<script src="{{ asset('js/categories_edit_modal.js') }}" defer></script>
@endsection
