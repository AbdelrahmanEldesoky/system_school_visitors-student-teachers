@extends('layouts.teacher.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">الدرجات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('teacher.index')}}">Home</a></li>
              <li class="breadcrumb-item active">درجات الطالب </li>
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
            <h3 class="card-title">درجات الطالب </h3>
            <div class="card-tools">
                <a href="{{ route('teacher.degry.create',[$student_id,$material_id])}}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            المادة
                        </th>
                        <th>
                            الدرجة
                        </th>
                        <th >
                            التاريخ 
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($dagrys)
                    @foreach ($dagrys as $index=>$dagry)
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                            <a>
                                {{$dagry->material->name}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$dagry->degry}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$dagry->date_at}}
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
