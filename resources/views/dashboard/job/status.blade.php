@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">الوظاف</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active"> الوظاف</li>
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
            <h3 class="card-title"></h3>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            الاسم
                        </th>
                        <th>
                            رقم الهاتف
                        </th>
                        <th >
                            تحميل cv
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @isset($jobs)
                    @foreach ($jobs as $index=>$job)
                    <tr>
                        <td>
                            {{$index+1}}
                        </td>
                        <td>
                            <a>
                                {{$job->name_ar}} {{$job->name_father_ar}} {{$job->name_grandfather_ar}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$job->mobile}}
                            </a>
                        </td>
                        <td>
                            <a class="app_font text-center btn btn-primary" href="{{route('dashboard.job.download',$job->id)}}">
                                تحميل cv
                            </a>
                        </td>
                        <td>

                            <a class="btn btn-info" href="{{route('dashboard.job.show',$job->id)}}">
                                رؤية البيانات
                            </a>
                        </td>
                        <td>
                            @if($job->status_job===1)
                                <span style=" background-color: green">______</span>
                            @else
                                <span style=" background-color: red">______</span>
                            @endif
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
