@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> من نحن</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">  من نحن</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">من نحن</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.about.edit',1) }}" class="btn btn-primary"><i class="fa fa-plus"></i> تعديل</a>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>العنوان </th>
                  <th>عنوان 2 </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$about->txt1}}</td>
                  <td>{{$about->txt2}}</td>

                </tr>
              </tbody>
            </table>
          </div>
            <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>خدمة 1</th>
                  <th>خدمة 2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>{{$about->txt3}}</td>
                    <td>{{$about->txt4}}</td>
                </tr>
              </tbody>
            </table>

          </div>
          <table class="table table-bordered">
          <td><img class="w-50" src="{{$about->image_path}}" alt="Image"></td>
          <td><img class="w-50" src="{{$about->image_patha}}" alt="Image"></td>
          </table>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
