@extends('layouts.app')
@section('title', 'Master Users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Master Users</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-sm btn-primary" href="{{url($url.'/create')}}">Add User</a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
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

        table tbody tr .center {
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
                    {"targets": 2, "name": "email"},
                    {"targets": 3, "name": "action", "orderable": false, 'className': 'center'},
                ],
                "order": [[1, "asc"], [2, "desc"]],
            });
        });
    </script>
@endsection