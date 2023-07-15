@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">اولياء امور   </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.')}}">Home</a></li>
              <li class="breadcrumb-item active"> اولياء امور  </li>
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
            <h3 class="card-title"> اولياء امور  </h3>
            <div class="card-tools">
                <a href="{{ route('dashboard.parent.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>   اضافة</a>
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
                  <th>الاكشن</th>
                </tr>
              </thead>
              <tbody>
                @isset($parents)
                @foreach ($parents as $index=>$parent)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$parent->name}}</td>
                  <td>{{$parent->mobile}}</td>
                  <td>{{$parent->address}}</td>
                  <td >
                    <a class="btn btn-secondary btn-sm" href="{{route('dashboard.parent.show',$parent->id)}}">
                        <i class="fas fa-eye">
                            الطلاب
                        </i>

                    </a>
                    <a class="btn btn-info btn-sm" href="{{route('dashboard.parent.edit',$parent->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        تعديل
                    </a>
                    <form action="{{ route('dashboard.parent.destroy', $parent->id) }}" method="post" style="display: inline-block">
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
