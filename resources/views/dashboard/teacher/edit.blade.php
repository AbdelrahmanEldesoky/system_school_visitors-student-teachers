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
                <h3 class="card-title">تعديل مدرسيين جدد</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.school.index')}}">المدرسيين</a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.teacher.update',$teacher->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">
                <div class="form-group">
                  <label >الاسم</label>
                  <input type="text" name="name"  value="{{$teacher->name}}"  class="form-control" required>
                </div>
                  <div class="form-group">
                    <label >العنوان</label>
                    <input type="text" name="address"  value="{{$teacher->address}}"  class="form-control"required>
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
