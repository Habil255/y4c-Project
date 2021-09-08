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
              <h1 class="m-0">Testimonials </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">View Site</a></li>
               
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <div class="container" class="ml-12">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        POST TESTIMONIAL
                    </div>
                    <div class="card-body">
                      @if (Session::has('content_added'))
                            <div class="alert alert-success" role="alert">
                                <p>{{ Session::get('content_added') }}</p>
                            </div>

                        @endif
                    <form method="POST" action="{{route('Testimonials.store')}}" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                                <label for="company_name">Name:</label>
                            <input type="text" name="heading" class="form-control" required/>
                            </div>
                            <div class="form-group">
                              <label for="company_name">Status:</label>
                          <input type="text" name="status" class="form-control" required/>
                          </div>
                            <div class="form-group">
                              <label for="company_name">Testimony:</label>
                          <textarea name="description" id="" cols="75" rows="5" required></textarea>
                          </div>
                            <div class="form-group">
                              <label for="company_name">Image:</label>
                              <input id="file" type="file" class="form-control" name="file" required
                              />
                          </div>
                          

                      
                       <div style="margin-left: 60%;">
                      <input type="submit" value="Save" class="btn btn-success" />
                      </div>
                        </form>
                    </div>

                      
                </div>
            </div>
        </div>
    </div>
      <!-- /.content -->
    </div>
   
    <!-- /.content-wrapper -->
    @include('pages.footer')
    
@endsection

