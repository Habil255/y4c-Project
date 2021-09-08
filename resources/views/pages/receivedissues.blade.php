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
              <h1 class="m-0">Issues</h1>
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
      <div class="card">
        <div class="card-header border-transparent">
          <h3 class="card-title">Received Issues</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($datas as $data)
               
                    
                
              <tr>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->phonenumber}}</td>
                {{-- //<span class="badge badge-success">Shipped --}}
                {{-- <td ci>
                {{$data->issue}}
                </td> --}}
                <td>
                <a href="/view-issue/{{$data->id}}" class="btn btn-success">View</a>
                 <a href="/delete-issue/{{$data->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> -->
          <!-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> -->
        </div>
        <!-- /.card-footer -->
      </div>
    </div>
    
   
    <!-- /.content-wrapper -->
    @include('pages.footer')
    
@endsection

