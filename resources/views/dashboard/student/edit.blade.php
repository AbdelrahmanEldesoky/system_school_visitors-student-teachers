@extends('layouts.dashboard.app')
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
                <h3 class="card-title">تعديل طلاب </h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.student.index')}}">الطلاب</a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.student.update',$student->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">

                <div class="form-group">
                    <label>السنه الدراسية</label>
                    <select name="year_id" class="form-control">
                        <option value="">اختار</option>
                        @foreach ($years as $year)
                            <option value="{{ $year->id }}"
                                {{ $student->year_id == $year->id ? 'selected' : '' }}>{{ $year->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>الفصول</label>
                    <select name="class_id" class="form-control">
                        <option value="">اختار</option>
                        @foreach ($classes as $class)
                            <option value="{{ $student->id }}"
                                {{ $student->class_id == $class->id ? 'selected' : '' }}>{{ $class->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                  <label >الاسم</label>
                  <input type="text" name="name"  value="{{$student->name}}"  class="form-control" required>
                </div>
                  <div class="form-group">
                    <label >العنوان</label>
                    <input type="text" name="address"  value="{{$student->address}}"  class="form-control"required>
                  </div>
                  <div class="form-group">
                    <label >الباسورد</label>
                    <input type="password" name="password"  class="form-control">
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value=" تعديل   " class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
