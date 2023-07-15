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
              <li class="breadcrumb-item active">جدول الفصول</li>
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
            <h3 class="card-title">الفصول</h3>
            <div class="card-tools">
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                      
                        <th>
                            الفصل
                        </th>
                        <th>
                          اختار الفصل
                      </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($classes)
                    @foreach ($classes as $index=>$class)
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                      
                        <td>
                          {{$class->class->name}}
                        </td>
                        <td>
                          <a class="btn btn-info btn-sm" href="{{route('teacher.class.show',$class->class->id)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            اختار
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
