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
              <!-- <li class="breadcrumb-item"><a href="{{ route('StepGrid') }}">Steps Grid</a></li> -->
              <li class="breadcrumb-item active">Abandoned Transaction View</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php 
// dd($aDonation);
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title float-left">Abandoned Transaction View</h4>
                <a href="{{ route('AbandonedGrid') }}" class="btn btn-primary btn-sm" style="float: right;">Back</a>
              </div>
              <div class="card-body row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Step</label>
                    <div class="col-sm-8">
                      <span>{{ step()[$aDonation[0]->step_id] }}</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Substep</label>
                    <div class="col-sm-8">
                      <span>{{ substep()[$aDonation[0]->substep_id] }}</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Amount</label>
                    <div class="col-sm-8">
                      <span>{{ $aDonation[0]->amount }}</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Donation Note</label>
                    <div class="col-sm-8">
                      <span>{{ $aDonation[0]->donation_note }}</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Donation Date</label>
                    <div class="col-sm-8">
                      <span>{{ date('d-m-Y',strtotime($aDonation[0]->created_at)) }}</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Donor Name</label>
                    <div class="col-sm-8">
                      <span>{{ ucwords($aDonation[0]->name) }}</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Email</label>
                    <div class="col-sm-8">
                      <span>{{ $aDonation[0]->email }}</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Persona No / ID</label>
                    <div class="col-sm-8">
                      <span>{{ $aDonation[0]->personal_no }}</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="title" class="col-sm-4">Mobile No</label>
                    <div class="col-sm-8">
                      <span>{{ $aDonation[0]->phone_no }}</span>
                    </div>
                  </div>
                </div>
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
