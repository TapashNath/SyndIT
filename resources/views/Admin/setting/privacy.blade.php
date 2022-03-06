@extends('main.layout')
@section('container')
@php
$siteName = ' Panel Settings';
$subName = ' Privacy & Policy';
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
                        <form action="/updatesettings" method="POST">
                            @csrf
                            <div class="col-lg-12">
                                <div>
                                    <div>
                                        <input type="hidden" name="type" value="terms" />
                                       @if ($setting != null)
                                            <textarea name="value" id="summernote">{{ $setting->value }}</textarea>
                                        @else
                                            <textarea name="value" id="summernote"></textarea>
                                        @endif
                                    </div>
                                    <div>
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
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
