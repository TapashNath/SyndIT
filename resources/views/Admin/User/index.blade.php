@php
$siteName=" Customer";
$subName=" Customer";
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
                        <a href="{{route('admin')}}" class="m-0">Home</a>
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

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All user Table</h3>
                </div>
                <div class="card-body">
                    <table id="example4" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                            <tr>
                                <td class="text-center">30220{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                @if ($user->email_verified == 0)
                                <td style="color: rgb(226, 17, 10); ">{{$user->email}}</td>
                                @elseif ($user->email_verified == 1)
                                <td style="color: rgb(27, 182, 27); ">{{$user->email}}</td>
                                @endif

                                @if ($user->phone_verified == 0)
                                <td class="text-center" style="color: rgb(226, 17, 10); ">{{$user->phone}}</td>
                                @elseif ($user->phone_verified == 1)
                                <td class="text-center" style="color: rgb(27, 182, 27); ">{{$user->phone}}</td>
                                @endif
                                @if ($user->updated_at->diffInMinutes(now()) <= 1)
                                   <td class="text-center" style="color: rgb(27, 182, 27); ">Online</td>
                                @else
                                    <td class="text-center" style="color: rgb(226, 17, 10); ">Offline</td>
                                @endif
                                <td>
                                    <a href="customerDetails{{$user['id']}}" class="btn btn-success btn-sm user_dialog ml-2">Details</a>
                                </td>
                            </tr>

                            @endforeach

                            </tfoot>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>

        </div>
    </div>
</section>
<!-- /.content -->
@endsection


<script>

</script>

<!-- Content Wrapper. Contains page content -->
