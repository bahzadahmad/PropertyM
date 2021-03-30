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
              <li class="breadcrumb-item active">Translation Grid</li>
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
                <h4 class="card-title float-left">Translation Grid</h4>
              </div>
              <div class="card-body">
                <div style="margin-bottom:10px">
                  <a href="#" onclick="javascript:$('#tt').edatagrid('addRow')">AddRow</a>
                  <a href="#" onclick="javascript:$('#tt').edatagrid('saveRow')">SaveRow</a>
                  <a href="#" onclick="javascript:$('#tt').edatagrid('cancelRow')">CancelRow</a>
                  <a href="#" onclick="javascript:$('#tt').edatagrid('destroyRow')">destroyRow</a>
                </div>
                <table class="table table-striped" id="tt" title="Editable DataGrid" singleSelect="true">
                  <tr>
                    <th>#</th>
                    <th>English</th>
                    <th>Sindhi</th>
                  </tr>
                  <?php
                  if(isset($aTranslation) && !empty($aTranslation)){
                    foreach ($aTranslation as $key => $value) {
                  ?>
                      <tr>
                        <td>{{ ($key+1) }}</td>
                        <td field="english" editor="text">{{ ucwords($value->english) }}</td>
                        <td field="sindhi" editor="text">{{ $value->sindhi }}</td>
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </table>
                <script>
                  $('#tt').edatagrid({
                    url: 'datagrid_data.json',
                    saveUrl: '',
                    updateUrl: '',
                    destroyUrl: ''
                  });
                </script>
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
