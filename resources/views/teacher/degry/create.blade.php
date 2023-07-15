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
                <h3 class="card-title">اضافة جدول دراسي</h3>
                <div class="card-tools">
                    <a href="{{route('teacher.schedule.index')}}">جدول دراسي </a>
                    <a class="breadcrumb-item active">/ اضافة</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('teacher.degry.store',[$student_id,$material_id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

              <div class="card-body">


                <div class="form-group">
                  <label >الرجة</label>
                  <input type="text" name="degry" class="form-control">
                </div>
                <div class="form-group">
                  <label >التاريخ</label>
                  <input type="date" name="date_at" class="form-control">
                </div>

                  <input type="hidden" name="student_id"  value="{{$student_id}}" class="form-control">
                  <input type="hidden" name="material_id" value="{{$material_id}}" class="form-control">

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
