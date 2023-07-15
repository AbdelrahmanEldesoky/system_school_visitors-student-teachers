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

              <form action="{{ route('teacher.schedule.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

              <div class="card-body">

                <div class="form-group">
                    <label>اليوم </label>
                    <select name="day_id" class="form-control">
                        <option value="">اختار اليوم</option>
                        @foreach ($days as $day)
                            <option value="{{ $day->id }}">{{ $day->name_ar }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>الفصل </label>
                    <select name="class_id" class="form-control">
                        <option value="">اختار الفصل</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>



                <input type="hidden" name="teacher_id" value="{{Auth::guard('teacher')->user()->id}}">




                <div class="form-group">
                    <label>المادة </label>
                    <select name="material_id" class="form-control">
                        <option value="">اختار المادة</option>
                        @foreach ($materials as $material)
                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label> الفترة</label>
                    <select name="period_id" class="form-control">
                        <option value="">اختار المادة</option>
                        @foreach ($periods as $period)
                            <option value="{{ $period->id }}">{{ $period->name }}</option>
                        @endforeach
                    </select>
                </div>


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
