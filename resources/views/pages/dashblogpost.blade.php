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
                            <h1 class="m-0">Blog</h1>
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
                                POST BLOG
                            </div>
                            <div class="card-body">
                                @if (Session::has('content_added'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{ Session::get('content_added') }}</p>
                                    </div>

                                @endif
                                <form method="POST" action="{{ route('blogpost.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="company_name">Blog title:</label>
                                        <input type="text" name="title" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Image:</label>
                                        <input id="file" type="file" class="form-control" name="file" required />
                                    </div>
                               
                                  <div class="form-group">
                                    <label for="category" class="col-md-4 col-form-label ">{{ __('Category') }}</label>   
                                    <select id="category" class="form-control" name="category" required autocomplete="job_title" autofocous >
                                        <option value="" disabled selected hidden>Choose a category...</option>
                                        <option>Technology</option>
                                        <option>Science</option>
                                        <option>Business</option>
                                        <option>Music</option>
                                        <option>Travel</option>
                                        <option>Laughs</option>
                                    </select>
                                    
                                  </div>
                                    <div class="form-group">
                                        <label for="company_name">1st Paragraph:</label>
                                        <textarea name="body_1" id="" class="col-12"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">2nd Paragraph:</label>
                                        <textarea name="body_2" id="" class="col-12"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">3rd Paragraph:</label>
                                        <textarea name="body_3" id="" class="col-12"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">4th Paragraph</label>
                                        <textarea name="body_4" id="" class="col-12"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">5th Paragraph:</label>
                                        <textarea name="body_5" id="" class="col-12"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">6th Paragraph:</label>
                                        <textarea name="body_6" id="" class="col-12"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">7th Paragraph:</label>
                                        <textarea name="body_7" id="" class="col-12"></textarea>
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
