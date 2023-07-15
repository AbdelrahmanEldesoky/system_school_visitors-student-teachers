@extends('layouts.teacher.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">الواجبات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('teacher.index')}}">Home</a></li>
              <li class="breadcrumb-item active">الواجب</li>
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
            <h3 class="card-title">الواجبات</h3>
            <div class="card-tools">
                <a href="{{ route('teacher.homework.create',[$material_id,$class_id])}}" class="btn btn-primary"><i class="fa fa-book"></i>   اضافة واجب</a>

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
                           اسم المادة
                        </th>
                        <th>
                            تاريخ رفع الواجب
                        </th>
                        <th>
                       اظهار الواجب
                       </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($homeworks)
                    @foreach ($homeworks as $index=>$homework)
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                          {{$homework->material->name}}
                        </td>
                        <td>
                          {{$homework->date_at}}
                        </td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{route('teacher.homework.done',$homework->id)}}">
                                رؤية التسليم
                                </a>
                          <a class="btn fas fa-eye" href="{{route('teacher.homework.get',$homework->id)}}">
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
