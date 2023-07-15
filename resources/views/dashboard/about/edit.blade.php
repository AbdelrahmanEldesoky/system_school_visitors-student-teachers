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
                <h3 class="card-title">تعديل الصفحة الرئسية</h3>
                <div class="card-tools">
                    <a class="breadcrumb-item active">/ تعديل</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.about.update',$about->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

              <div class="card-body">
                <div class="form-group">
                 
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>العنوان </th>
                        <th>وصف </th>
                        <th> الخدمة </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>   
                       <td> <input type="text" name="txt1"  value="{{$about->txt1}}" class="form-control"></td>
                       <td> <input type="text" name="txt2"  value="{{$about->txt2}}" class="form-control"></td>
                      </tr>
                    </tbody>
                      </table>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>خدمة 1</th>
                            <th>خدمة 2</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <input type="text" name="txt3"  value="{{$about->txt3}}" class="form-control"></td>
                            <td> <input type="text" name="txt4"  value="{{$about->txt4}}" class="form-control"></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="image1" class="form-control image">
                    </div>

                    <div class="form-group">
                        <img src="{{ $about->image_path }}" class="w-50"  class="img-thumbnail image-preview"
                            alt="">
                    </div>
                    <div class="form-group">
                        <label>@lang('site.image')</label>
                        <input type="file" name="image2" class="form-control image">
                    </div>

                    <div class="form-group">
                        <img src="{{ $about->image_patha }}" class="w-50"  class="img-thumbnail image-preview"
                            alt="">
                    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value="تعديل " class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
