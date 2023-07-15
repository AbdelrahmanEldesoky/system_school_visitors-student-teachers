@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل نشاط</h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.news.index')}}"> النشاطات</a>
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.news.update',$news->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">


                <div class="form-group">
                  <label >عنوان صغير </label>
                  <input type="text" name="tittal1" value="{{$news->tittal1}}" class="form-control">
                </div>
                <div class="form-group">
                  <label >عنوان كبير </label>
                  <input type="text" name="tittal2" value="{{$news->tittal2}}"  class="form-control">
                </div>

                <div class="form-group">
                  <label > وصف </label>
                  <input type="text" name="discription" value="{{$news->discription}}"   class="form-control">
                </div>

                <div class="form-group">
                  <label>صورة</label>
                  <input type="file" name="image" class="form-control image">
              </div>

                    </div>
                  </div>

                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value="اضافة" class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
