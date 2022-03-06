@extends('main.layout')
@section('container')
@php
$siteName = ' Notification List';
$subName = ' Notification List';
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (in_array("createSurvey", json_decode(Session()->get('permission'), true)))
                <a class="btn btn-info user_dialog" data-toggle="modal" data-target-id="" data-target-question=""
                    data-target="#modal-create"><i class="fa fa-plus mr-2"></i>Create</a>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{" /"}}" class="m-0">Home</a>
                    </li>
                    <li class="breadcrumb-item active">@php
                        echo $subName;
                        @endphp</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">SL</th>
                                <th>Name</th>
                                <th class="text-center">Totel User</th>
                                @if (in_array("updateLevel", json_decode(Session()->get('permission'), true)))
                                <th class="text-center">Status</th>
                                @endif
                                @if ( in_array("deleteLevel", json_decode(Session()->get('permission'), true)))
                                <th class="text-center">Action</th>
                                @endif
                            </tr>
                        </thead>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

{{-- delete slider--}}
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Alert Message!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/deleteLevel" method="post">
                @csrf
                <div class="modal-body">
                    <h4 class="modal-title">Do you delete item name of </h4>
                    <input style="border: 0" type="text" name="name" id="delete_name">
                    <input class="form-control" name="id" type="hidden" id="delete_id">
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete Now</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


{{-- edit slider--}}
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alert Message!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/updateLevel" method="post">
                @csrf
                <div class="modal-body">
                    <h4 class="modal-title">Do you delete item name of </h4>
                    <input class="form-control" name="id" type="hidden" id="edit_id">
                    <div class="form-group mr-3">
                        <label>Enter Level Name</label>
                        <input type="text" class="form-control" placeholder="Enter Level Name" id="edit_name"
                            name="name" required>
                    </div>
                </div>


                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update Now</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


{{-- create slider--}}
<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alert Message!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/addLevel" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mr-3">
                        <label>Enter Level Name</label>
                        <input type="text" class="form-control" placeholder="Enter Level Name" id="name" name="name"
                            required>
                    </div>
                    @if (in_array("createLevel", json_decode(Session()->get('permission'), true)))
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary right">Submit</button>
                    </div>
                    @endif
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script>
    $(document).ready(function () {
        $("#modal-delete").on("show.bs.modal", function (e) {
            var id = $(e.relatedTarget).data('target-id');
            var name = $(e.relatedTarget).data('target-name');
            $('#delete_id').val(id);
            $('#delete_name').val(name);
        });

        $("#modal-edit").on("show.bs.modal", function (e) {
        var id = $(e.relatedTarget).data('target-id');
        var name = $(e.relatedTarget).data('target-name');
        var status = $(e.relatedTarget).data('target-ststus');
        $('#edit_id').val(id);
        $('#edit_name').val(name);
        $('#edit_status').val(status);
        });
    });
</script>


@endsection
