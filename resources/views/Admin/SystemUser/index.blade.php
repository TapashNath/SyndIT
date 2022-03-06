@extends('main.layout')
@section('container')
    @php
    $siteName = ' System Users';
    $subName = ' User Management';
    @endphp
    <!-- Content Wrapper. Contains page content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @if (in_array('createCategory', json_decode(Session()->get('permission'), true)))
                        <a href="" data-target="#modal-create" data-toggle="modal" class="btn btn-success float-left">
                            <i class="fa fa-plus">&nbsp;&nbsp;Add New User</i></a>
                    @endif
                    {{-- <h1 class="m-0">@php
                    echo $subName;
                    @endphp</h1> --}}
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
        <div class="row" id="create">
            <div class="col-md-12 col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Users Management</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example4" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width='5%'>SL</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th class="text-center"> Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users != null)
                                    @foreach ($users as $data => $value)
                                        <tr class="vertical-align: cinter;">
                                            <td>{{ $data + 1 }}</td>
                                            <td>{{ $value['name'] }}</td>
                                            @php
                                                $role = App\Models\Role::where('id', $value->role_id)->value('name');
                                            @endphp
                                            <td>{{ $role }}</td>
                                            <td>{{ $value['email'] }}</td>
                                            @if ($value['active'] == 1)
                                                <td class="text-center">
                                                    <a href="statusSystemUser{{ $value['id'] }}"
                                                        class="btn btn-success btn-sm user_dialog ml-2">Active</a>
                                                </td>
                                            @elseif ($value['active'] == 0)
                                                <td class="text-center">
                                                    <a href="statusSystemUser{{ $value['id'] }}"
                                                        class="btn btn-danger btn-sm user_dialog ml-2">Unactive</a>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="row">
                                                    @if (in_array('updateSystemUser', json_decode(Session()->get('permission'), true)))
                                                        <a href="" onclick="getRoleId({{ $value->role_id }})"
                                                            class="btn btn-success user_dialog ml-2" data-toggle="modal"
                                                            data-target-id="{{ $value->id }}"
                                                            data-target-name="{{ $value->name }}"
                                                            data-target-email="{{ $value->email }}"
                                                            data-target-active="{{ $value->active }}"
                                                            data-target="#modal-edit"><i class="fa fa-edit"></i></a>
                                                    @endif
                                                    @if (in_array('deleteSystemUser', json_decode(Session()->get('permission'), true)))
                                                        <a href="" class="btn btn-danger user_dialog ml-2"
                                                            data-toggle="modal" data-target-id="{{ $value->id }}"
                                                            data-target-name="{{ $value->name }}"
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

    {{-- create slider --}}
    <div class="modal fade bd-example-modal-lg" id="modal-create" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create New User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/systemUserCreate" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label>Select Role</label>
                                <span style="color: red">
                                    @error('role_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="form-group">
                                    <select class="custom-select" id="status" name="role_id" required>
                                        <option value="" selected="selected"> Select</option>
                                        @foreach ($rolls as $roll => $value)
                                            <option id="a" value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <span style="color: red">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <label>Please Enter User Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Please Enter User Name"
                                        name="name" required>
                                </div>
                            </div>
                        </div>
                        <span style="color: red">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                        <label>Please Enter User Email</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Please Enter User Email" name="email"
                                required>
                        </div>

                        <span style="color: red">
                            @error('pass')
                                {{ $message }}
                            @enderror
                        </span>
                        <label>Please Enter User Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder=" Please Enter User Password"
                                name="pass" required>
                        </div>

                        <span style="color: red">
                            @error('re_pass')
                                {{ $message }}
                            @enderror
                        </span>
                        <label>Please Enter Confirm Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Please Enter Confirm Password"
                                name="re_pass" required>
                        </div>
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
                                @if (in_array('createUser', json_decode(Session()->get('permission'), true)))
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                @endif
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- edit slider --}}
    <div class="modal fade bd-example-modal-lg" id="modal-edit" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/systemUserUpdate" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <input type="hidden" class="form-control" name="id" id="e_id" required>
                                <label>Select Role</label>
                                <div class="form-group">
                                    <select class="custom-select" id="e_role_id" name="role_id" required>
                                        <option value="" selected="selected"> Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label>Please Enter User Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Please Enter User Name"
                                        name="name" id="e_name" required>
                                </div>
                            </div>
                        </div>
                        <label>Please Enter User Email</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Please Enter User Email" name="email"
                                id="e_email" required>
                        </div>

                        <span style="color: red">
                            @error('pass')
                                {{ $message }}
                            @enderror
                        </span>
                        <label>Please Enter User Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder=" Please Enter User Password"
                                name="pass">
                        </div>

                        <span style="color: red">
                            @error('re_pass')
                                {{ $message }}
                            @enderror
                        </span>
                        <label>Please Enter Confirm Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Please Enter Confirm Password"
                                name="re_pass">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                @if (in_array('createUser', json_decode(Session()->get('permission'), true)))
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                @endif
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- delete slider --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Alert Message!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/systemUserDelete" method="post">
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
        function getRoleId(id) {
            var e_role_id = document.getElementById('e_role_id');
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "{{ url('/getRole') }}", true);
            xhttp.onload = function() {
                var data = '';
                var obj = JSON.parse(xhttp.responseText);
                for (i = 0; i < obj.length; i++) {
                    if (id == obj[i]['id']) {
                        data += '<option selected="selected" value="' + obj[i]['id'] + '">' + obj[i]['name'] +
                            '</option>';
                    } else {
                        data += '<option value="' + obj[i]['id'] + '">' + obj[i]['name'] + '</option>';
                    }

                }
                e_role_id.innerHTML = data;
            };
            xhttp.send();

        }

        $(document).ready(function() {
            $("#modal-default").on("show.bs.modal", function(e) {
                var id = $(e.relatedTarget).data('target-id');
                var name = $(e.relatedTarget).data('target-name');
                $('#pass_id').val(id);
                $('#name').val(name);
            });



            $("#modal-edit").on("show.bs.modal", function(e) {
                var id = $(e.relatedTarget).data('target-id');
                var name = $(e.relatedTarget).data('target-name');
                var email = $(e.relatedTarget).data('target-email');
                $('#e_id').val(id);
                $('#e_name').val(name);
                $('#e_email').val(email);
            });

        });
    </script>


@endsection
