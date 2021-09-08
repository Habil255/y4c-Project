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
                            <h1 class="m-0">Services</h1>
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>
                                    <center>First Part</center>
                                </h5>
                            </div>
                            <div class="card-body">
                                @if (Session::has('content_added'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{ Session::get('content_added') }}</p>
                                    </div>

                                @endif
                                <form method="POST" action="{{ route('service.post') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="company_name">Sub-Heading:</label>
                                        <input id="file" type="text" class="form-control" name="sub_heading" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Service Description:</label>
                                        <input type="text" name="services_description" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Icon:</label>
                                        <input id="file" type="file" class="form-control" name="file" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Sub-Description:</label>
                                        <textarea name="sub_description" id="" class="col-12 " required></textarea>
                                    </div>
                                    



                                    <div style="margin-left: 60%;">
                                        <input type="submit" name="Submit" class="btn btn-success" />
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>
                                    <center>Second Part</center>
                                </h5>
                            </div>
                            <div class="card-body">
                                @if (Session::has('second_added'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{ Session::get('second_added') }}</p>
                                    </div>

                                @endif
                                <form method="POST" action="{{ route('secondPart.post') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="company_name">Main Heading:</label>
                                        <input type="text" name="heading1" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Description:</label>
                                        <textarea name="description1" id="" class="col-12 " required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="company_name">List 1:</label>
                                        <input id="file" type="text" class="form-control" name="list1" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">List 2:</label>
                                        <input id="file" type="text" class="form-control" name="list2" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">List 3:</label>
                                        <input id="file" type="text" class="form-control" name="list3" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">List 4:</label>
                                        <input id="file" type="text" class="form-control" name="list4" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Image:</label>
                                        <input id="file" type="file" class="form-control" name="file" required />
                                    </div>
                                    <br><br>

                                    <div class="form-group">
                                        <label for="company_name">Second Heading:</label>
                                        <input type="text" name="heading2" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Description:</label>
                                        <textarea name="description2" id="" class="col-12 " ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="company_name">List 1:</label>
                                        <input id="file" type="text" class="form-control" name="list_1" />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">List 2:</label>
                                        <input id="file" type="text" class="form-control" name="list_2"  />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">List 3:</label>
                                        <input id="file" type="text" class="form-control" name="list_3" />
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">List 4:</label>
                                        <input id="file" type="text" class="form-control" name="list_4"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name">Image:</label>
                                        <input id="file" type="file" class="form-control" name="file2"/>
                                    </div>

                                    <div style="margin-left: 60%;">
                                        <input type="submit" name="Submit" class="btn btn-success" />
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
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0-pre
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

@endsection
