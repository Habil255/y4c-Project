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
                            <h1 class="m-0">A Comment</h1>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                COMMENT POSTED
                            </div>
                            <div class="card-body">
                                <form>

                                    <div class="form-group">
                                        <label for="company_name">Name:</label>
                                        {{-- <input type="text" name="company_name" class="form-control" --}}
                                        <p class="form-control">{{ $comment->name}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="company_name">Email:</label>
                                       
                                            <p class="form-control">{{ $comment->email }}</p>
                                    </div>

                                    <div class="form-group">
                                      <label for="company_name">Phone Number:</label>
                                      {{-- <input type="text" name="company_name" class="form-control"
                                          value="{{ $comment->phonenumber }}" /> --}}
                                          <p class="form-control">{{ $comment->phonenumber}}</p>
                                    </div>

                                    <div class="form-group">
                                      <label for="company_name">The Message:</label>
                                      <textarea rows="5" class="form-control col-md-12"
                                         >{{ $comment->message }}</textarea>
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

                                        