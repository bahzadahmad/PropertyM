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
              <li class="breadcrumb-item active">Project From</li>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title float-left">Project Form</h4>
                <a href="{{ route('project') }}" class="btn btn-primary btn-sm" style="float: right;">Back</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('addProject') }}" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="description">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Picture</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="file">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Cost of land</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="cost_of_land">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Saleable Area</label>
                    <div class="col-sm-10">
                      <input  class="form-control" name="saleable_area">
                    </div>
                  </div>
                  <?php
                    foreach ($aShareholder as $key => $value) {
                  ?>
                  <h5>{{ ucwords($value->name) }}</h5>
                  <div class="form-group row">
                    <label for="description" class="col-sm-2 col-form-label">Share Percentage</label>
                    <div class="col-sm-10">
                      <input class="form-control shareholder" name="shareholder" id="owner"  value="{{ ($value->owner == 1 ? '100' : '0') }}">
                    </div>
                  </div>
                  <?php
                    }
                  ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right" style="margin-bottom: 10px;">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
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
