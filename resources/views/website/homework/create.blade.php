@extends('website.layouts.app')
 <link rel="stylesheet" href="{{ asset('website/css/s.css') }}">
@section('title')
    <title> واجبات الطالب</title>
@endsection

@section('content')
    <div class="container ">
              @include('partials._errors')

              <form action="{{ route('student.homework.upload') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

              <div class="card-body">
                <div class="form-group">
                  <label >الواجب</label>
                  <textarea type="text" rows="10" name="home_txt" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label >رفع ملف الواجب</label>
                    <input type="file" name="filehome" class="form-control">
                  </div>
                  <input type="hidden" name="student_id" value="{{Auth::guard('student')->user()->id}}" class="form-control">
                  <input type="hidden" name="homework_id" value="{{$id}}" class="form-control">
              </div>
              <div class="row">
          
              <div class="col-12">
                <input type="submit" value="إضافة" class="btn btn-success float-right">
            </div>
        </div>  
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection
