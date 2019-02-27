@extends('layouts.app')
@section('title',($data->classroom_id)?'Edit Classroom':'Create Classroom')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{($data->teacher_id)?'Edit Classroom':'Create Classroom'}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url($url .'/save')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="name"
                                       class="col-sm-2 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input type="text" id="name" placeholder="Name"
                                           class="form-control"
                                           name="name" value="{{$data->name}}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <label class="col-sm-2 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="{{$data->classroom_id}}">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Save">
                                    <a href="{{url($url)}}" class="btn btn-sm btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

    <style>
        table th {
            text-align: center;
        }
    </style>
@endsection

@section('js')
    <script type="text/javascript">

        $(document).ready(function () {
            url = '{{$url}}/datatable';
            $('table').dataTable({
                processing: true,
                serverSide: true,
                ajax: url,
                //pageLength: 25,
                "lengthMenu": [[10, 25, 50, 0], [10, 25, 50, "All"]],
                responsive: false,
                dom: '<"html5buttons"B>lTfgitp',
                columnDefs: [
                    {"targets": 0, "orderable": false},
                    {"targets": 1, "name": "name"},
                    {"targets": 2, "name": "action", "orderable": false},
                ],
                "order": [[1, "asc"], [2, "desc"]],
            });
        });
    </script>
@endsection