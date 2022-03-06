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
        <div class="col-md-12 col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="/rolesUpdate" method="post">
                        @csrf
                        <div class="row" id="create">
                            <div class="col-md-6 col-xs-6">
                                <span style="color: red">@error('name'){{$message}}@enderror</span>
                                <div class="form-group">
                                    <label>Role name</label>
                                    <input type="hidden" class="form-control" placeholder="Role Name" name="id"
                                        value="{{$datas->id}}">
                                    <input type="text" class="form-control" placeholder="Role Name" name="name"
                                        value="{{$datas->name}}">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <span style="color: red">@error('active'){{$message}}@enderror</span>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="custom-select" id="status" name="active">
                                        <option id="a" value="1" @if ($datas->active == "1") echo
                                            selected="selected" @endif >Active</option>
                                        <option id="b" value="0" @if ($datas->active == "0") echo
                                            selected="selected" @endif >Deactive</option>
                                    </select>
                                </div>
                            </div>
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
                                            <input type="checkbox" name="permission[]" id="permission" value="createSlider" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createSlider',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateSlider" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateSlider',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewSlider" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewSlider',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteSlider" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteSlider',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Category</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Sub Category</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createSubCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createSubCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateSubCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateSubCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewSubCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewSubCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteSubCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteSubCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Child Category</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createChildCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createChildCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateChildCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateChildCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewChildCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewChildCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteChildCategory" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteChildCategory',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>Product</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createProduct" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createProduct',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateProduct" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateProduct',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewProduct" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewProduct',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteProduct" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteProduct',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>Brand</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createBrand" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createBrand',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateBrand" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateBrand',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewBrand" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewBrand',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteBrand" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteBrand',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>Unit</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createUnit" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createUnit',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateUnit" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateUnit',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewUnit" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewUnit',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteUnit" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteUnit',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Feedback</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createFeedback" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createFeedback',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateFeedback" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateFeedback',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewFeedback" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewFeedback',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteFeedback" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteFeedback',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>System Users</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createSystemUser" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createSystemUser',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateSystemUser" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateSystemUser',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewSystemUser" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewSystemUser',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteSystemUser" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteSystemUser',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Users</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createUser" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createUser',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateUser" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateUser',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewUser"
                                                @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewUser',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteUser" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteUser',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Support</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createSupport" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createSupport',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateSupport" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateSupport',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewSupport" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewSupport',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteSupport" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteSupport',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Settings</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createSettings" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createSettings',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateSettings" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateSettings',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewSettings" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewSettings',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteSettings" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteSettings',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Survey</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createSurvey" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createSurvey',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateSurvey" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateSurvey',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewSurvey" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewSurvey',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteSurvey" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteSurvey',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Notification</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="createNotification" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createNotification',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="updateNotification" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateNotification',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="viewNotification" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewNotification',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission"
                                                value="deleteNotification" @php $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteNotification',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Level</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="createLevel" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('createLevel',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="updateLevel" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('updateLevel',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="viewLevel" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('viewLevel',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" name="permission[]" id="permission" value="deleteLevel" @php
                                                $data=json_decode($datas->permission);
                                            if($data){
                                            if(in_array('deleteLevel',
                                            $data)) { echo "checked" ; }
                                            }
                                            @endphp
                                            >
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
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
