@extends('main.layout')
@section('container')
@php
$siteName = ' Panel Settings';
$subName = ' App Settings';
@endphp
<!-- Content Wrapper. Contains page content -->
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
                            <a href="{{ ' /' }}" class="m-0">Home</a>
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
            <div class="col-md-12 col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{route('admin/updatesettings')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="type" value="appsettings" />
                            <div class="card-body">
                                @foreach ($datas as $data)
                                <input type="checkbox" name="is_version_check" {{ $data->is_version_check ? "checked" :
                                ""
                                }}
                                data-bootstrap-switch data-off-color="danger" data-on-color="success"> <br><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputName1">App Min Version*</label>
                                            <input type="name" name="min_version" class="form-control"
                                                value="{{$data->min_version}}" id="exampleInputName1"
                                                placeholder="App Min Version" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputName1">App Max Version*</label>
                                            <input type="name" name="max_version" class="form-control"
                                                value="{{$data->max_version}}" id="exampleInputName1"
                                                placeholder="App Max Version" required>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->



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
@section('jquery')


@endsection
