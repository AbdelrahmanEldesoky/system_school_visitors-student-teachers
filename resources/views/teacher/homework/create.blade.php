@extends('layouts.teacher.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">اضافة واجب</h3>
                <div class="card-tools">
                    <a href="{{route('teacher.schedule.index')}}"> واجب </a>
                    <a class="breadcrumb-item active">/ اضافة</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('teacher.homework.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

              <div class="card-body">

                <div class="form-group">
                    <label >name</label>
                    <input type="text"  name="name" class="form-control"></input>
                  </div>
                <div class="form-group">
                  <label >الواجب</label>
                  <textarea type="text" rows="10" name="homework" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label >التاريخ</label>
                  <input type="date" name="date_at" class="form-control">
                </div>
                <div class="form-group">
                    <label >رفع ملف الواجب</label>
                    <input type="file" name="filehome" class="form-control">
                  </div>
                  <input type="hidden" name="class_id" value="{{$class_id}}" class="form-control">
                  <input type="hidden" name="material_id" value="{{$material_id}}" class="form-control">
                  <input type="hidden" name="teacher_id" value="{{Auth::guard('teacher')->user()->id}}" class="form-control">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value="إضافة" class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
