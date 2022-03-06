@extends('main.layout')

@section('container')
@php
$siteName = ' System Users';
$subName = ' Role Management';
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

<!-- /.content-header -->
@if (session('sucsess'))
<div class="alert alert-success alert-dismissible ml-2 mr-2" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    {{ session('sucsess') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger alert-dismissible ml-2 mr-2" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    {{ session('error') }}
</div>
@endif


<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row" id="create">
        <div class="col-md-7 col-xs-7">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create New Roles</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="/rolesCreate" method="post" enctype="multipart/form-data">
                        @csrf
                        <span style="color: red">@error('name'){{$message}}@enderror</span>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Role Name" name="name">
                        </div>
                        <span style="color: red">@error('permission'){{$message}}@enderror</span>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Create</th>
                                    <th>Update</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                    <td>Slider</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createSlider">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateSlider">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewSlider">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteSlider">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Category</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Sub Category</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createSubCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateSubCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewSubCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteSubCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Child Category</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createChildCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateChildCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewChildCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteChildCategory">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Product</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createProduct">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateProduct">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewProduct">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteProduct">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Brand</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createBrand">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateBrand">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewBrand">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteBrand">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Unit</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createUnit">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateUnit">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewUnit">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteUnit">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>


                                <tr>
                                    <td>Feedback</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createFeedback">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateFeedback">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewFeedback">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteFeedback">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>System Users</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createSystemUser">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateSystemUser">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewSystemUser">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteSystemUser">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Users</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createUser">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateUser">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewUser">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteUser">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Support</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createSupport">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateSupport">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewSupport">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteSupport">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Settings</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createSettings">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateSettings">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewSettings">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteSettings">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Survey</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createSurvey">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateSurvey">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewSurvey">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteSurvey">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Notification</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createNotification">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateNotification">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewNotification">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteNotification">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Level</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createLevel">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateLevel">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewLevel">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteLevel">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>









                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    {{-- <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label> --}}
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                @if (in_array("createUser", json_decode(Session()->get('permission'),
                                true)))
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                                @endif
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-5 col-xs-5">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Rolls Management</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="groupTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width='5%'>SL</th>
                                <th width='30%'>Name</th>
                                <th width='30%'>Status</th>
                                <th width='35%'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($datas != null)
                            @foreach ($datas as $data => $value)
                            <tr class="vertical-align: cinter;">
                                <td>{{$data +1}}</td>
                                <td>{{$value['name']}}</td>
                                @if ($value['active'] == 1)
                                <td>
                                    <h5 class="text-success">Active</h5>
                                </td>
                                @else
                                <td>
                                    <h5 class="text-danger">Deactive</h5>
                                </td>
                                @endif
                                <td>
                                    <div class="row">
                                        @if (in_array("updateUser", json_decode(Session()->get('permission'),
                                        true)))
                                        <form action="/rolesEdit" method="post">
                                            @csrf
                                            <input type="hidden" class="form-control" placeholder="Role Name" name="id"
                                                value="{{$value->id}}">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="fa fa-edit"></i></button>
                                        </form>
                                        @endif

                                        @if (in_array("deleteUser", json_decode(Session()->get('permission'),
                                        true)))
                                        <a href="" class="btn btn-danger user_dialog ml-2" data-toggle="modal"
                                            data-target-id="{{ $value->id }}" data-target-name="{{ $value->name }}"
                                            data-target="#modal-default"><i class="fa fa-trash"></i></a>
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
