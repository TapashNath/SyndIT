@extends('main.layout')

@section('container')
@php
$siteName = ' Feedbacks';
$subName = ' Feedbacks';
@endphp
<!-- Content Wrapper. Contains page content -->
<!-- /.content-header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">@php
                    echo $subName;
                    @endphp</h1>
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
    <div class="row" id="create">
        <div class="col-md-12 col-xs-5">
            <div class="box">
                <!-- /.box-header -->
                <div class="card-body">
                    <table id="example4" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" width='5%'>SL</th>
                                <th class="text-center" width='30%'>User Name</th>
                                <th class="text-center" width='30%'>Rating</th>
                                <th class="text-left" width='35%'>Message</th>
                                <th class="text-center" width='35%'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($feedbacks != null)
                            @foreach ($feedbacks as $data => $value)
                            <tr>
                                <td class="text-center">{{$data +1}}</td>
                                <td class="text-center">{{App\Models\User::where('id',
                                    $value['user_id'])->value('name')}}</td>
                                <td class="text-center">{{$value['rating']." Star"}}</td>
                                <td class="text-left">{{$value['message']}}</td>
                                <td class="text-center">
                                    <div class="row">
                                        @if (in_array("updateUser", json_decode(Session()->get('permission'),
                                        true)))
                                        <form action="/rolesEdit" method="post">
                                            @csrf
                                            <input type="hidden" class="form-control" placeholder="Role Name" name="id"
                                                value="{{$value->id}}">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="fa fa-paper-plane"></i></button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr class="vertical-align: cinter;">
                                <td>Empty list</td>
                            </tr>
                            @endif

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
{{-- delete slider--}}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Alert Message!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/rolesDelete" method="post">
                @csrf
                <div class="modal-body">
                    <h4 class="modal-title">Do you delete item name of </h4>
                    <input style="border: 0" type="text" name="name" id="name">
                    <input class="form-control" name="id" type="hidden" id="pass_id">
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

<script>
    $(document).ready(function () {
        $("#modal-default").on("show.bs.modal", function (e) {
            var id = $(e.relatedTarget).data('target-id');
            var name = $(e.relatedTarget).data('target-name');
            $('#pass_id').val(id);
            $('#name').val(name);
        });
    });
</script>
@endsection
