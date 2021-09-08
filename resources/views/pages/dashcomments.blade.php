@extends('pages.dashlinks')
@section('content')


<div class="wrapper">

    @include('dashbar.nav')
    @include('dashbar.commentside')
    
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Comment</h1>
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
              <h3 class="card-title">Comments</h3>

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
                    {{-- @if ($total_comment > 0)
                        
                    @endif --}}
                    <th>Name</th>
                    <th>Phonenumber</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        
                    
                  <tr>
                  <td>{{$data->name}}</td>
                    <td>{{$data->phonenumber}}</td>
                  <td>{{$data->email}}</td>
                  <td><span>{{Illuminate\Support\Str::of($data->message)->words(10)}}</span></td>
                  <td><a href="/single-comment/{{$data->id}}" class="btn btn-success">View</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
    
   
    <!-- /.content-wrapper -->
    @include('pages.footer')
    
@endsection

