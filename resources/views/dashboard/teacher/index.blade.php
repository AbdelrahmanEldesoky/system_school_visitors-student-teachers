@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">مدرسيين المدرسة  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">مدرسين المدرسة </li>
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
            <h3 class="card-title">مدرسين المدرسة </h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.teacher.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 30px">#</th>
                  <th> الاسم</th>
                  <th>الموبيل</th>
                  <th>الاميل</th>
                  <th>العنوان</th>
                  <th>الاكشن</th>
                </tr>
              </thead>
              <tbody>
                @isset($teachers)
                @foreach ($teachers as $index=>$teacher)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$teacher->name}}</td>
                  <td>{{$teacher->mobile}}</td>
                  <td>{{$teacher->email}}</td>
                  <td>{{$teacher->address}}</td>
                  <td >
                    <a class="btn btn-info btn-sm" href="{{route('dashboard.teacher.edit',$teacher->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        تعديل
                    </a>
                    <form action="{{ route('dashboard.teacher.destroy', $teacher->id) }}" method="post" style="display: inline-block">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>حذف</button>
                    </form><!-- end of form -->

                </td>

                @endforeach
                @endisset
              </tbody>
            </table>
          </div>



          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
