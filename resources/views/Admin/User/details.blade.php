@php
$siteName=" Customer Details";
$subName=" Customer Details";
@endphp
@extends('main.layout')

@section('container')

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
                    <li class="breadcrumb-item">
                        <a href="{{" /customer"}}" class="m-0">Customer</a>
                    </li>
                    <li class="breadcrumb-item active">@php
                        echo $subName;
                        @endphp</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="row flex-lg-nowrap">
        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <div class="col-12 col-sm-auto mb-3">
                                        @if ($user != null)
                                        @if (file_exists(public_path().'/images/user/profile/'.$user->image))
                                        <img id="image-preview" width="140"
                                            src="{{asset('/images/user/profile/'.$user->image)}}">
                                        @else
                                        <img id="image-preview" width="140" src="{{asset('dist/img/boxed-bg.jpg')}}">
                                        @endif
                                        @else
                                        <img id="image-preview" width="140" src="{{asset('dist/img/boxed-bg.jpg')}}">
                                        @endif

                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            @php
                                            $document = App\Models\Document::where('user_id', $user->id)->first();
                                            @endphp

                                            @if ($document !=null)
                                            @if ($document->profile_proof_verify == 0)
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap mb-0"
                                                style="color: rgb(226, 17, 10); ">{{$user->name}}</h4>
                                            @else
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap mb-0"
                                                style="color: rgb(27, 182, 27); ">{{$user->name}}</p>
                                                @endif
                                                @else
                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap mb-0"
                                                    style="color: rgb(226, 17, 10); ">{{$user->name}}</h4>
                                                @endif


                                                @if ($user->email_verified == 0)
                                                <p class="mb-0" style="color: rgb(226, 17, 10); ">
                                                    {{$user->email}}</p>
                                                @elseif ($user->email_verified == 1)
                                                <p class="mb-0" style="color: rgb(27, 182, 27); ">
                                                    {{$user->email}}</p>
                                                @endif
                                                @if ($user->phone_verified == 0)
                                                <p class="mb-0" style="color: rgb(226, 17, 10); ">
                                                    {{$user->phone}}</p>
                                                @elseif ($user->phone_verified == 1)
                                                <p class="mb-0" style="color: rgb(27, 182, 27); ">
                                                    {{$user->phone}}</p>
                                                @endif
                                                <p class="mb-0">{{$user->alternative_phone}}</p>
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
                                                    Y')}}</small>
                                            </div>
                                            <div class="text-center mt-3 text-sm-right">
                                                <form action="/addUserLevel" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Add User Level</label>
                                                        <input type="hidden" name="id" id="id" value="{{$user->id}}">
                                                        <select class="form-control select2" name="level_id"
                                                            style="width: 100%;">
                                                            <option value="" selected="selected">Add Level</option>

                                                            @if ($levels != null)
                                                            @foreach ($levels as $level )
                                                            @if (!in_array($level->id, $levelIds, true))
                                                            <option value="{{$level->id}}">{{$level->name}}</option>
                                                            @else
                                                            <option value="{{$level->id}}" disabled="disabled">
                                                                {{$level->name. " "."(Used)"}}</option>
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                    @if (in_array("createLevel",
                                                    json_decode(Session()->get('permission'), true)))
                                                    <button class="btn btn-success" type="submit">ADD</button>
                                                    @endif
                                                </form>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                    <li class="nav-item"><a href="" class="nav-link">Docoments</a></li>
                                </ul>
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        <div class="row">
                                            <div class="col-6 ">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <p class="form-control" type="text" name="name">
                                                                {{$user->name}}</p>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <p class="form-control" type="text" name="email">
                                                                {{$user->email}}</p>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Save
                                                            Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label>Level List</label>
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            @if (in_array("deleteLevel",
                                                            json_decode(Session()->get('permission'), true)))
                                                            <th>Action</th>
                                                            @endif
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if ($userlevels != null)
                                                        @foreach ($userlevels as $level )
                                                        <tr>
                                                            @php
                                                            $name = App\Models\Level::where('id',
                                                            $level->level_id)->value('name');
                                                            @endphp
                                                            <td>{{$name}}</td>
                                                            @if (in_array("deleteLevel",
                                                            json_decode(Session()->get('permission'), true)))
                                                            <td width=5% class="text-center">
                                                                <a href="userLevelDelete{{$level['user_id']}}"
                                                                    class=" user_dialog ml-2"><i
                                                                        class="fas fa-times text-danger"></i></a>
                                                            </td>
                                                            @endif
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
@push('scripts')

@endpush
