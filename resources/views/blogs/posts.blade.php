@extends('pages.dashlinks')
@section('content')


<div class="wrapper">

    @include('dashbar.nav')
    @include('dashbar.side')
    
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Blog Posts</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">View Site</a></li>
               
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
     

    
      <!-- top tiles -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Blog Post</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    
                    <th>Title</th>
                    <th>image</th>
                    <th>Posted Date</th>
                    <th>Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post) 
                  {{-- @if ($total_comment > 0) --}}
                        
                  
                    
                  <tr>
                    <td>{{Illuminate\Support\Str::of($post->title)->words(9)}}</td>
                    <td> <img src="blogs_contents/{{$post->image}}" width="50px" height="50px" alt=""></td>
                  <td>{{$post->created_at}}</td>
                  <td>{{$post->category}}</td>
                  
                  <td>
                    <a href="/view-post/{{$post->id}}" class="btn btn-success">View</a>
                    <a href="/view-comments/{{$post->id}}" class="btn btn-warning">Comments</a>
                     <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  {{-- @endif --}}
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> -->
              <a href="blogpost" class="btn btn-sm btn-secondary float-right">Add Blog Post</a>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
    
   
    <!-- /.content-wrapper -->
    @include('pages.footer')
    
@endsection

