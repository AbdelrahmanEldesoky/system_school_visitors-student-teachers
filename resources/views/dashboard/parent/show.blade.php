@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  طالب    </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active">  الطالب  </li>
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
            <h3 class="card-title"> طالب </h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.parent.student.create',$parent_id) }}" class="btn btn-primary"><i class="fa fa-plus"></i>  تسجيل طالب</a>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 30px">#</th>
                  <th> الاسم</th>
                  <th>الكود</th>
                  <th>الموبيل</th>
                </tr>
              </thead>
              <tbody>
                @isset($parents)


                @foreach ($parents as $index=>$parent)

                @foreach ($parent->student as $s)

                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$s->name}}</td>
                  <td>{{$s->code}}</td>
                  <td>{{$s->mobile}}</td>
                @endforeach
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
