@extends('admin.layouts.app')

@section('headSection')

<link rel="stylesheet" href="{{ asset ('admin/plugins/select2/css/select2.min.css') }}">
    
@endsection 

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
      <h3 class="card-title">Titles</h3>
    </div>
        
    @include('includes.messages')

    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ route ('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="title">Post Title</label>
              <input class="form-control" id="title" name="title" placeholder="Title"
              value="{{ $post->title }}">
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="image">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
          </div>
        </div> 
        
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="subtitle">Post SubTitle</label>
              <input class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title"
              value="{{ $post->subtitle }}">
            </div>
          </div>
          <div class="col-lg-6">
            <br>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" name="status" @if ($post->status==1) checked @endif>Publish</label>
            </div>
            <br>

        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="subtitle">Post Slug</label>
              <input class="form-control" id="slug" name="slug" placeholder="Slug"
              value="{{ $post->slug }}">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form-group" data-select2-id="31">
              <label>Select Tags</label>
              <select class="form-control select2 select2-hidden-accessible" multiple=""
               data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option data-select2-id="42">Alabama</option>
                <option data-select2-id="9">Alaska</option>
                <option data-select2-id="43">California</option>
                <option data-select2-id="44">Delaware</option>
                <option data-select2-id="45">Tennessee</option>
                <option data-select2-id="46">Texas</option>
                <option data-select2-id="47">Washington</option>
              </select>
              <br>
              <div class="form-group" data-select2-id="31">
                <label>Select Categories</label>
                <select class="form-control select2 select2-hidden-accessible" multiple=""
                 data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option data-select2-id="42">Alabama</option>
                  <option data-select2-id="9">Alaska</option>
                  <option data-select2-id="43">California</option>
                  <option data-select2-id="44">Delaware</option>
                  <option data-select2-id="45">Tennessee</option>
                  <option data-select2-id="46">Texas</option>
                  <option data-select2-id="47">Washington</option>
                </select>
            </div>
          </div>
          </div>
       
        <div class="card-header">
            <h3 class="card-title">
                <b>Write Post Body Here</b> <small> Simple and fast</small>
            </h3>   
        </div>
        
    <!-- /.card-header -->
    <div class="card-body">
    <textarea id="summernote" name="body" style="width:100%; height:500px; padding:10px">{{ $post->body }}
        
    </textarea>
    </div>
    </div>
    </div>
    <!-- /.col-->
    </div>
    <!-- ./row -->
    <div class="row">
    <div class="col-md-12">
    <div class="card card-outline card-info">
    <div class="card-header">
    <h3 class="card-title">
    
    </div>
    </div>
       
    </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route ('post.index') }}" class="btn btn-warning">Back</a>
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

@section('footerSection')
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(document).ready(function(){
    $('.select2').select2()
  });
</script>
@endsection 