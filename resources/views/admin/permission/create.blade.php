@extends('admin/layouts/app')

@section('main-content')

       <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Text Editors</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Text Editors</li>
    </ol>
    </div>
    </div>
    </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-md-12">
    <div class="card card-outline card-info">
        
     <!-- general form elements -->
     <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Permissions</h3>
        </div>

        @include('includes.messages')
        
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('permission.store') }}" method="post">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="name">Permission</label>
                  <input class="form-control" id="name" name="name" placeholder="Permission">
                </div>
              </div>
            </div>
            
            
            <div class="from-group">
              <label for="for">Permission for</label>
              <select name="for" id="for" class="form-control">
                <option selected disable>Select Permission for</option>
                <option value="user">User</option>
                <option value="post">Post</option>
                <option value="other">Other</option>
              </select>
            </div>    
        
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route ('permission.index') }}" class="btn btn-warning">Back</a>
          </div>
        </form>
      </div>
      <!-- /.card -->
    
    <!-- /.col-->
    </div>
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
        
    @endsection
    
    
    @section('script')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    
    <script>
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