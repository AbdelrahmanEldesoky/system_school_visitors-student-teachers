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
            <h3 class="card-title">الوظاف</h3>
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
                        <td class="project-actions">
                            <form action="{{ route('dashboard.job.update', $job->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <input type="hidden" value="1" name="status_job">
                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-trash"></i>قبول</button>
                            </form><!-- end of form -->
                            <form action="{{ route('dashboard.job.update', $job->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <input type="hidden" value="2" name="status_job">
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>رفض</button>
                            </form><!-- end of form -->
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
