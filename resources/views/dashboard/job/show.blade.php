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
            <div class="row p-2">
                <div class="col-12">
                    <div class="row p-2">
                        <div class="  col-10">
                            <div class="  row p-2">
                                <div class=" col-3">
                                    <div class=" app_font text-right form-group">
                                        <label for="f_name">الاسم العائلة</label>
                                        <p style="text-align:right;">{{$job->name_family_ar}}</p>
                                    </div>
                                </div>
                                <div class="  col-3">
                                    <div class=" app_font text-right form-group">
                                        <label for="l_name">اسم الجد</label>
                                        <p style="text-align:right;">{{$job->name_grandfather_ar}}</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class=" app_font text-right form-group">
                                        <label for="g_name">اسم الاب</label>
                                        <p style="text-align:right;">{{$job->name_father_ar}}</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class=" app_font text-right form-group">
                                        <label for="f_name">الاسم الاول</label>
                                        <p style="text-align:right;">{{$job->name_ar}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 ">
                            <label for="f_name">&nbsp;</label>
                            <input type="text" style=""
                                class="text-center  form-control" readonly
                                placeholder="الاسم رباعي (ع)">
                        </div>
                    </div>
                </div>

            </div>
            {{-- name in english  --}}
            <div class="row p-2">
                <div class="col-12">
                    <div class="row p-2">
                        <div class="  col-10">
                            <div class="  row p-2">
                                <div class=" col-3">
                                    <div class=" app_font text-right form-group">
                                        <label for="f_name"> Family name</label>
                                        <p style="text-align:right;">{{$job->name_family_en}}</p>
                                    </div>
                                </div>
                                <div class="  col-3">
                                    <div class=" app_font text-right form-group">
                                        <label for="l_name"> Grandfather's name</label>
                                        <p style="text-align:right;">{{$job->name_grandfather_en}}</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class=" app_font text-right form-group">
                                        <label for="g_name"> Father's name</label>
                                        <p style="text-align:right;">{{$job->name_father_en}}</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class=" app_font text-right form-group">
                                        <label for="f_name"> First name</label>
                                        <p style="text-align:right;">{{$job->name_en}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 ">
                            <label for="f_name">&nbsp;</label>
                            <input type="text" style=""
                                class=" text-center  form-control" readonly
                                placeholder="الاسم رباعي (En)">
                        </div>
                    </div>
                </div>

            </div>

            {{-- gender --}}
            <div class="row p-2">
                <div class=" col-5">
                    <div class=" app_font text-right form-group">
                    </div>
                </div>
                <div class="col-5">
                    <div class=" app_font text-right form-group ">
                        <p style="text-align:right;">{{$job->gender}}</p>
                    </div>
                </div>
                <div class="col-2">
                    <input type="text" style="" class="text-center  form-control"
                        readonly placeholder="الجنس">
                </div>
            </div>
            {{-- Nationality --}}
            <div class="row app_font  p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->nationality}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center  form-control"
                        readonly placeholder="الجنسية">
                </div>
            </div>
            {{-- Accommodation --}}
            <div class="row app_font p-2">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->lives}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center  form-control"
                        readonly placeholder="مقيم في">
                </div>
            </div>
            {{-- The city --}}
            <div class="row app_font p-2">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->city}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder="المدينة ">
                </div>
            </div>
            {{-- The Address --}}
            <div class="row app_font p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->address}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder="العنوان ">
                </div>
            </div>
            {{-- Date of birth --}}
            <div class="row app_font p-2 ">
                <div class="col-10" >
                    <p style="text-align:right;">{{$job->birth_date}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder="تاريخ الميلاد ">
                </div>
            </div>
            {{--  Status  --}}
            <div class="row app_font  p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->status}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder="الحالة">
                </div>
            </div>
            {{--  I knew the school  --}}
            <div class="row app_font  p-2 ">
                <div class="col-9">
                    <p style="text-align:right;">{{$job->know_about}}</p>
                </div>
                <div class="col-3">
                    <input type="text" style="" class="text-center  form-control"
                        readonly placeholder="عرفت المدرسة عن طريق">
                </div>
            </div>
            {{--  Illustration  --}}
            <div class="row app_font  p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->explanation}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder="نامل التوضيح">
                </div>
            </div>
             {{--  Job applicant  --}}
             <div class="row app_font  p-2 ">
                <div class="col-10"  >
                    <p style="text-align:right;">{{$job->job_is}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder="الوظيفة المتقدم لها	">
                </div>
            </div>
               {{--  Qualification  --}}
               <div class="row app_font  p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->qualification}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder="المؤهل  	">
                </div>
            </div>
              {{--  Main specialization  --}}
              <div class="row app_font  p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->specialization}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder="التخصص الرئيسي	  	">
                </div>
            </div>
               {{--  Years of experience   --}}
               <div class="row app_font  p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->experience}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder=" سنوات الخبرة		  	">
                </div>
            </div>
              {{--  phone   --}}
              <div class="row app_font  p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->mobile}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder=" الجوال	  	">
                </div>
            </div>
               {{--  email   --}}
               <div class="row app_font  p-2 ">
                <div class="col-10">
                    <p style="text-align:right;">{{$job->email}}</p>
                </div>
                <div class="col-2 app_font ">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder=" البريد الالكتروني	  	">
                </div>
            </div>
               {{--  Working in our schools   --}}
               <div class="row app_font  p-2 ">
                <div class="col-10 text-right">
                    <p style="text-align:right;">
                        @if ($job->worked == 0)
                            لا
                        @else
                            نعم
                        @endif
                    </p>
                </div>
                <div class="col-2 app_font">
                    <input type="text" style="" class="text-center form-control"
                        readonly placeholder=" العمل بمدارسنا	 	  	">
                </div>
            </div>

    </div>
    </div>
    <!-- /.card -->
  </section>
<!-- /.content -->
</div>

</section><!-- end of content -->
@endsection
