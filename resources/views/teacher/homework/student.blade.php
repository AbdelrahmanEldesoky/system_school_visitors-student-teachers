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
                        <th>تحميل الملف
                        </th>
                        <th>
                       اظهار الواجب
                       </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($homeworks as $index=>$homework)
                    
                        
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                            {{$homework->student->name}}
                        </td>
                        <td>
                            <a class="app_font text-center btn btn-success btn_homework" href="{{route('teacher.homework.download_name',$homework->id)}}">
                              تحميل الواجب
                          </a>
                      </td>
                        <td>
                          <a class="btn fas fa-eye" href="{{route('teacher.homework.show.done',$homework->id)}}">
                            رؤية الواجب
                        </a>
                      </td>
                    </tr>
                    @endforeach
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
