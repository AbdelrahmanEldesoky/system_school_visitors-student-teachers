@extends('layouts.teacher.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">المواد</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('teacher.index')}}">Home</a></li>
              <li class="breadcrumb-item active">المواد</li>
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
            <h3 class="card-title">الطلاب</h3>
            <div class="card-tools">
                <a href="{{ route('teacher.homework.index',[$material_id,$class_id])}}" class="btn btn-primary"><i class="fa fa-book"></i>   الواجب</a>

            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            اسم الطالب
                        </th>
                        <th>
                          كود الطالب
                        </th>
                        <th>
                           رقم الهاتف
                        </th>
                        <th>

                       </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($students)
                    @foreach ($students as $index=>$student)
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                          {{$student->name}}
                        </td>
                        <td>
                          {{$student->code}}
                        </td>
                        <td>
                          {{$student->mobile}}
                        </td>
                        <td>
                         
                          <a class="btn btn-info btn-sm" href="{{route('teacher.degry.index',[$student->id,$material_id])}}">
                            درجاته
                        </a>
                      </td>
                    </tr>
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
