@extends('pages.dashlinks')
@section('content')


<div class="wrapper">

    @include('dashbar.nav')
    @include('dashbar.side')
    
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>


      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  @if ($all_posts > 0)
                        
                    @endif
                  <h3>{{$all_issues}}</h3>
  
                  <p>Received Issues</p>
                </div>
                <div class="icon">
                  
                </div>
                <a href="/receivedissues" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  @if ($all_posts > 0)
                        
                    @endif
                  <h3>{{$all_posts}}<sup style="font-size: 20px"></sup></h3>
  
                  <p>Total Blogposts</p>
                </div>
                <div class="icon">
                  
                </div>
                <a href="/postedblogs" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  @if ($all_posts > 0)
                        
                    @endif
                  <h3>{{$all_comment}}</h3>
  
                  <p>Total Comments</p>
                </div>
                <div class="icon">
                  
                </div>
                <a href="/postedblogs" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  @if ($questions > 0)
                        
                    @endif
                  <h3>{{$questions}}</h3>
  
                  <p>Frequent Ask Questions</p>
                </div>
                <div class="icon">
                  
                </div>
                <a href="postedFaq" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
        
  
                  
      </section>
                  



    </div>
   
    <!-- /.content-wrapper -->
    @include('pages.footer')
    
@endsection


