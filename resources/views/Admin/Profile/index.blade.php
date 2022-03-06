@extends('main.layout')

@section('container')
@php
$siteName = ' User';
$subName = ' Edit Profile';
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
    <div class="row flex-lg-nowrap">
        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form class="form" action="{{ route('update') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="e-profile">
                                    <div class="row">
                                        <div class="col-12 col-sm-auto mb-3">
                                            @if ($user->data != null)
                                            @if (file_exists(public_path().'/images/admin/'.$user->data->image))
                                            <img id="image-preview" width="140"
                                                src="{{asset('/images/admin/'.$user->data->image)}}">
                                            @else
                                            <img id="image-preview" width="140"
                                                src="{{asset('dist/img/boxed-bg.jpg')}}">
                                            @endif
                                            @else
                                            <img id="image-preview" width="140"
                                                src="{{asset('dist/img/boxed-bg.jpg')}}">
                                            @endif

                                        </div>
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$user->name}}</h4>
                                                <p class="mb-0">{{$user->email}}</p>
                                                <div class="text-muted"><small>Last seen {{"
                                                        ".$user->updated_at->diffForHumans();}}</small></div>
                                                <div class="mt-2">
                                                    <input type="file" id="imgupload" accept="image/*" name="image"
                                                        style="display:none" />

                                                    <button id="OpenImgUpload" class="btn btn-primary img-picker"
                                                        type="button">
                                                        <i class="fa fa-fw fa-camera"></i>
                                                        <span>Change Photo</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="text-center text-sm-right">
                                                <span
                                                    class="badge badge-secondary">{{App\Models\Role::where('id',$user->role_id)->value('name')}}</span>
                                                <div class="text-muted"><small>Joined
                                                        {{\Carbon\Carbon::parse($user->created_at)->format('d M
                                                        Y')}}</small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Full Name</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="John Smith" value="{{$user->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <p class="form-control" type="text" name="email">
                                                                    {{$user->email}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row">
                                                        <div class="col mb-3">
                                                            <div class="form-group">
                                                                <label>About</label>
                                                                <textarea class="form-control" placeholder="My Bio"
                                                                    name="bio">
                                                                    @php
                                                                        if ($user->data != null) {echo  $user->data->bio;}
                                                                    @endphp
                                                                    </textarea>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex justify-content-end">
                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                </div>
                                            </div>
                            </form>
                            <hr>
                            <form action="/changePasword" method="post">
                                @csrf
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-3">

                                </div>
                                <div class="col-12 col-sm-6 mb-3">
                                    <div class="mb-2"><b>Change Password</b></div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Current Password</label><br>
                                                <span style="color: red">@error('current_pass'){{$message}}@enderror</span>
                                                <input class="form-control" name="current_pass" type="password" placeholder="••••••" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>New Password</label><br>
                                                <span style="color: red">@error('new_pass'){{$message}}@enderror</span>
                                                <input class="form-control" name="new_pass" type="password" placeholder="••••••" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Confirm Password</label><br>
                                                <span style="color: red">@error('cinfirm_pass'){{$message}}@enderror</span>
                                                <input class="form-control" name="cinfirm_pass" type="password" placeholder="••••••">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                </div>
                            </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {

        $('#OpenImgUpload').click(
            function(){
                $('#imgupload').trigger('click');
            }
        );

        $("#imgupload").change(function(){
            readURL(this);
        })

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#modal-default").on("show.bs.modal", function (e) {
            var id = $(e.relatedTarget).data('target-id');
            var name = $(e.relatedTarget).data('target-name');
            $('#pass_id').val(id);
            $('#name').val(name);
        });
    });
</script>
@endsection
