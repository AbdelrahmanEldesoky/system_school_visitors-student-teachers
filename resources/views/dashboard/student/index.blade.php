@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">طلاب المدرسة  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">طلاب المدرسة </li>
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
            <h3 class="card-title"> الطلاب </h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.student.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 30px">#</th>
                  <th> الاسم</th>
                  <th>الموبيل</th>
                  <th>العنوان</th>
                  <th>السنه الدراسية</th>
                  <th>الفصل</th>
                  <th>الاكشن</th>
                </tr>
              </thead>
              <tbody>
                @isset($students)
                @foreach ($students as $index=>$student)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->mobile}}</td>
                  <td>{{$student->address}}</td>
                  <td>{{$student->school->name}}</td>
                  <td>{{$student->class->name}}</td>
                  <td >
                          <a class="btn btn-primary btn-sm" href="{{route('dashboard.expenses.index',[$student->school->id,$student->id])}}">
                        
                        مصاريف
                    </a>
                    <a class="btn btn-info btn-sm" href="{{route('dashboard.student.edit',$student->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        تعديل
                    </a>
                    <form action="{{ route('dashboard.student.destroy', $student->id) }}" method="post" style="display: inline-block">
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
