@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Conferences</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table id="myDataTable" class="table table-hover btn-table">
                        <thead>
                            <tr>
                                <th scope="col">Submission title</th>
                                <th scope="col">Submission key words</th>
                                <th scope="col">Thesis</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$submission->title}}</td>
                                <td>{{$submission->key_words}}</td>
                                <td>{{$submission->thesis_name_upload}}</td>
                                <td style="float:right">
                                    <a href="{{ route('submissiondetail',$submission->id)}}" class="btn btn-info">Details</a>
                                    <a class="btn btn-danger">Delete</a>
                                </td>

                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" defer></script>
<script src="{{ asset('js/my_data_table.js') }}" defer></script>
@endsection
