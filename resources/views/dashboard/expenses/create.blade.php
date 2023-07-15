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
                <h3 class="card-title">اضافة مادة مصاريف</h3>
                <div class="card-tools">
                    <a class="breadcrumb-item active">/ اضافة</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.expenses.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

              <div class="card-body" class="col-6">
                <div class="col-6">
                  <label >مصروف</label>
                  <input type="number" name="student" class="form-control">
                </div>
                <div class="col-6">
                  <label>تاريخ الفاتورة</label>
                  <input type="date" name="date_at" class="form-control">
                </div>
                <div class="col-6">
                  <label>رقم السند</label>
                  <input type="number" name="ex_id" class="form-control">
                </div>
                
                <input type="hidden" name="year" value="{{$year}}" class="form-control">
                <input type="hidden" name="year_id" value="{{$year_id}}" class="form-control">
                <input type="hidden" name="student_id" value="{{$id}}" class="form-control">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value="Create new Project" class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
