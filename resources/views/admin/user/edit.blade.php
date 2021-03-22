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
          <h3 class="card-title">Update Admin</h3>
        </div>

        @include('includes.messages')
        
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('user.update',$user->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('Put') }}
          <div class="card-body">
            <div class="row">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="name">User Name</label>
                  <input class="form-control" id="name" name="name" placeholder="User Name" 
                  value="@if(old('name')){{ old('name') }}@else{{ $user->name }}
                  @endif ">
                </div>
              </div>
              
            </div> 
          
            <div class="row">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input class="form-control" id="email" name="email" placeholder="email" value="@if(old('email')){{ old('email') }}@else{{ $user->email }}
                  @endif ">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="Phone">Phone</label>
                  <input class="form-control" id="phone_no" name="phone_no" placeholder="phone" value="@if(old('phone_no')){{ old('phone_no') }}@else{{ $user->phone_no }}
                  @endif ">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="status">Status</label>
                  <div class="checkbox">  
                    <label><input type="checkbox" name="status" 
                        @if (old('status')==1 || $user =='status')
                      checked
                    @endif value="1">Status</label>
                </div> 
                </div>
              </div>
            </div>


          {{-- <div class="form-group">
            <label>Assign Role</label>
            <div class="row">
              @foreach ($roles as $role)
              <div class="col-lg-3">
              <div class="checkbox">
                <label type="checkbox" name="role[]" value="{{ $role->id }}">{{ $role->name }}</label>
              </div>
              </div>
                
              @endforeach
            </div>
          </div> --}}

            <div class="row">
              <div class="col-lg-12">
                  <label for="role">Assign Roles</label>
              </div>
            </div>
              <div class="row"> 
                <div class="col-lg-4">
                    <div class="checkbox">
                       <label><input type="checkbox">Editors</label>
                    </div>
              </div>
               <div class="col-lg-4">
                <div class="checkbox"> 
                    <label><input type="checkbox">Publisher</label>
                </div>
               </div>
               <div class="col-lg-4">
                <div class="checkbox">  
                    <label><input type="checkbox">Writer</label>
                </div>
               </div> 
              </div>
            </div>
           
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route ('user.index') }}" class="btn btn-warning">Back</a>
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