@extends('layouts.teacher.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">الواجبات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('teacher.index')}}">Home</a></li>
              <li class="breadcrumb-item active">الواجب</li>
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
            <h3 class="card-title">الواجبات</h3>
            <div class="card-tools">
            </div>
          </div>
          <div class="card-body p-0">


        @foreach ($homeworks as $homework)

            <div class="form-group">
                <b>المادة</b><br>
                <h6>{{$homework->material->name}}</h6>
            </div>
            <div class="form-group">
                <b>عنوان</b><br>
                <h6>{{$homework->name}}</h6>
            </div>
            <div class="form-group">
                <b>الواجب</b><br>
                <h6>{{$homework->homework}}</h6>
            </div>
            @endforeach
          </div>
          <button class="btn btn-info" onclick="history.back()">رجوع </button>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
