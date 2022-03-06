@extends('main.layout')

@section('container')
@php
$siteName = ' Panel Settings';
$subName = ' Notification Settings';
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
                        <form action="/setNotification" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="type" value="appsettings" />

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputName1">FCM Server Key *</label>
                                            <input type="text" name="serverKey" class="form-control"
                                                value="{{ $datas->serverKey }}" id="exampleInputName1"
                                                placeholder="FCM Server Key" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">FCM Sender ID *</label>
                                            <input type="text" name="senderId" class="form-control"
                                                value="{{$datas->senderId}}" id="exampleInputName1"
                                                placeholder="FCM Sender ID" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">FCM Api Key *</label>
                                            <input type="text" name="apiKey" class="form-control" value="{{$datas->apiKey}}"
                                                id="exampleInputName1" placeholder="FCM FCM Api Key" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">FCM Auth Domain *</label>
                                            <input type="text" name="authDomain" class="form-control"
                                                value="{{$datas->authDomain}}" id="exampleInputName1"
                                                placeholder="FCM Auth Domain" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">FCM Project ID *</label>
                                            <input type="text" name="projectId" class="form-control"
                                                value="{{$datas->projectId}}" id="exampleInputName1"
                                                placeholder="FCM Project ID" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">FCM App ID *</label>
                                            <input type="text" name="appId" class="form-control" value="{{$datas->appId}}"
                                                id="exampleInputName1" placeholder="FCM App ID" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">FCM Measurement ID *</label>
                                            <input type="text" name="measurementId" class="form-control"
                                                value="{{$datas->measurementId}}" id="exampleInputName1"
                                                placeholder="FCM Measurement ID" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
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
    $(document).ready(function() {
  var t = $('#summernote').summernote(
  {
  height: 250,
  focus: true
}
  );
  $("#btn").click(function(){
    $('div.note-editable').height(150);
  });
});

    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
</script>
@endsection

