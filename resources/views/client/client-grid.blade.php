@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Client Grid</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
            @endif
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title float-left">Client Grid</h4>
                <a href="{{ route('addClientForm') }}" class="btn btn-primary btn-sm" style="float: right;">Add</a>
              </div>
              <div class="card-body">
                <table class="table table-striped" id="dataTable-1">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>CNIC</th>
                    <th>Mobile</th>
                    <th>Father Name</th>
                    <th>Next of Kin</th>
                    <th>Kin Cnic</th>
                    <th>Action</th>
                  </tr>
                  <?php
                  if(isset($aResult) && !empty($aResult)){
                    foreach ($aResult as $key => $value) {
                  ?>
                      <tr>
                        <td>{{ ($key+1) }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->cnic }}</td>
                        <td>{{ $value->mobile }}</td>
                        <td>{{ $value->father_name }}</td>
                        <td>{{ $value->next_of_kin }}</td>
                        <td>{{ $value->kin_cnic }}</td>
                        <td>{{ $value->next_of_kin }}</td>
                        <td>
                          <div class="file-action">
                            <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="text-muted sr-only">Action</span>
                            </button>
                            <div class="dropdown-menu m-2">
                              <a class="dropdown-item" href=""><i class="fe fe-eye fe-12 mr-4"></i>View</a>
                              <a class="dropdown-item" href=""><i class="fe-at-sign fe-12 mr-4"></i>Email</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

@endsection
