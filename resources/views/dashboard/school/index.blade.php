@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">السنه الدراسية </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">السنه الدراسية</li>
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
            <h3 class="card-title">السنه الدراسية</h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.school.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 30px">#</th>
                  <th>السنه الدراسية</th>
                  <th>مصاريف السنه</th>
                  <th>الحالة</th>
                </tr>
              </thead>
              <tbody>
                @isset($schools)
                @foreach ($schools as $index=>$school)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$school->name}}</td>
                  <td>{{$school->expenses}}</td>

                  <td >
                    <a class="btn btn-info btn-sm" href="{{route('dashboard.school.edit',$school->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        تعديل
                    </a>

                    <form action="{{ route('dashboard.school.destroy', $school->id) }}" method="post" style="display: inline-block">
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
