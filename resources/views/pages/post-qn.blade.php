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
              <h1 class="m-0">Frequent Ask Questions</h1>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <center> Post Question</center>
                    </div>
                    <div class="card-body">
                      @if (Session::has('question_added'))
                            <div class="alert alert-success" role="alert">
                                <p>{{ Session::get('question_added') }}</p>
                            </div>

                        @endif
                    <form method="POST" action="{{route('question.post')}}" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                                <label for="company_name">Question:</label>
                            <input type="text" name="question" class="form-control" required/>
                            </div>
                            <div class="form-group">
                              <label for="company_name">Answer:</label>
                          <textarea name="answer" id="" class="col-12" required></textarea>
                          

                      
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
</div>
   
    <!-- /.content-wrapper -->
    @include('pages.footer')
    
@endsection

