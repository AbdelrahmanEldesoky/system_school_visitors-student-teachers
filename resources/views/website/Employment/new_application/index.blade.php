@extends('website.layouts.app')
@section('title')
    <title> طلب جديد</title>
    <link rel="stylesheet" type="text/css" href="/jquery.datetimepicker.css" />
    <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
    <style>
        ::placeholder {
            color: #fff !important;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <form action="{{ route('new_application_post') }}" method="post" enctype="multipart/form-data" style="direction: rtl;">
            {{ csrf_field() }}
            {{ method_field('post') }}
            {{-- name in arabic --}}
            <div class="row p-2">
                <div class="col-12">
                    <div class="row p-2">
                        <div class="col-lg-2 col-12 ">
                            <label for="f_name">&nbsp;</label>
                            <input type="text" style=""
                                class=" mina app_font text-center bg-secondary form-control" readonly
                                placeholder="الاسم رباعي (ع)">
                        </div>
                        <div class="  col-10">
                            <div class="  row p-lg-0 p-2">
                                <div class="col-lg-3 col-12 p-lg-0 p-2">
                                    <div class=" app_font text-right form-group">
                                        <label for="f_name">الاسم العائلة</label>
                                        <input type="text" name="name_family_ar" required
                                            class=" app_font text-right form-control" id="f_name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12 p-lg-0 p-2">
                                    <div class=" app_font text-right form-group">
                                        <label for="l_name">اسم الجد</label>
                                        <input type="text" name="name_grandfather_ar" required
                                            class=" app_font text-right form-control" id="l_name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12 p-lg-0 p-2">
                                    <div class=" app_font text-right form-group">
                                        <label for="g_name">اسم الاب</label>
                                        <input type="text" name="name_father_ar" required
                                            class=" app_font text-right form-control" id="g_name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12 p-lg-0 p-2">
                                    <div class=" app_font text-right form-group">
                                        <label for="f_name">الاسم الاول</label>
                                        <input type="text" name="name_ar" required
                                            class=" app_font text-right form-control" id="f_name">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            {{-- name in english  --}}
            <div class="row p-2">

                <div class="col-12">
                    <div class="row p-lg-0  p-2">
                        <div class="col-lg-2 col-12 ">
                            <label for="f_name">&nbsp;</label>
                            <input type="text" style=""
                                class=" mina app_font text-center bg-secondary form-control" readonly
                                placeholder="The name is quaternary (En)">
                        </div>
                        <div class="  col-10">
                            <div class="  row p-2">
                                <div class=" col-lg-3 col-12 p-lg-0 p-2">
                                    <div class=" app_font text-right form-group">
                                        <label for="f_name">Family name</label>
                                        <input type="text" name="name_family_en" required
                                            class=" app_font text-right form-control" id="f_name">
                                    </div>
                                </div>
                                <div class="  col-lg-3 col-12 p-lg-0 p-2">
                                    <div class=" app_font text-right form-group">
                                        <label for="l_name h5"> Grandfather's name</label>
                                        <input type="text" name="name_grandfather_en" required
                                            class=" app_font text-right form-control" id="l_name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12 p-lg-0 p-2">
                                    <div class=" app_font text-right form-group">
                                        <label for="g_name ">Father's name</label>
                                        <input type="text" name="name_father_en" required
                                            class=" app_font text-right form-control" id="g_name">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12 p-lg-0 p-2">
                                    <div class=" app_font text-right form-group">
                                        <label for="f_name">First name:</label>
                                        <input type="text" name="name_en" required
                                            class=" app_font text-right form-control" id="f_name">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{-- gender --}}
            <div class="row p-2">
                <div class="col-lg-2 col-12">
                    <input type="text" style="" class=" mina app_font text-center bg-secondary form-control"
                        readonly placeholder="الجنس">
                </div>
                <div class=" col-5">
                    <div class=" app_font text-right form-group">
                        <input class="form-check-input mx-lg-2" type="radio" name="gender" id="inlineRadio3" value="انثي">
                        <label class="h4 form-check-label text-center app_font female w-50" for="inlineRadio3"> انثي</label>
                    </div>
                </div>
                <div class="col-5">
                    <div class=" app_font text-center form-group ">
                        <input class="form-check-input mx-lg-2" type="radio" name="gender" checked="" id="inlineRadio4" value="ذكر">
                        <label class="h4 form-check-label app_font  male w-50" for="inlineRadio4">ذكر</label>
                    </div>
                </div>

            </div>
            {{-- Nationality --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2 col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="الجنسية">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <input type="text" style="" name="nationality" required
                        class="  app_font text-center  form-control">
                </div>

            </div>
            {{-- Accommodation --}}
            <div class="row app_font p-2 ">
                <div class="col-lg-2 col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="مقيم في">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <input type="text" style="" name="lives" required
                        class="  app_font text-center  form-control">
                </div>

            </div>
            {{-- The city --}}
            <div class="row app_font p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="المدينة ">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <input type="text" style="" name="city" required
                        class="  app_font text-center  form-control">
                </div>
            </div>
            {{-- The Address --}}
            <div class="row app_font p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="العنوان ">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <input type="text" style="" name="address" required
                        class="  app_font text-center  form-control">
                </div>

            </div>
            {{-- Date of birth --}}
            <div class="row app_font p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="تاريخ الميلاد ">
                </div>

                <div class="col-lg-10 col-12 p-2">
                    <input type='date' name="birth_date" required class="form-control input-lg" />
                </div>

            </div>
            {{--  Status  --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="الحالة">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <select class="form-control" name="status">
                        <option class="app_font text-right" value="متزوج/ة">متزوج/ة</option>
                        <option class="app_font text-right"value="مطلق/ة">مطلق/ة</option>
                        <option class="app_font text-right" value="ارمل/ة">ارمل/ة</option>
                        <option class="app_font text-right" value="اعزب">اعزب</option>
                    </select>
                </div>

            </div>
            {{--  I knew the school  --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="عرفت المدرسة عن طريق">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <select class="form-control" name="know_about">
                        <option class="app_font text-right" value="فيس بوك">فيس بوك</option>
                        <option class="app_font text-right" value="انستنجرام">انستنجرام</option>
                        <option class="app_font text-right" value="تويتر">تويتر</option>
                        <option class="app_font text-right"value="يوتيوب">يوتيوب</option>
                        <option class="app_font text-right"value="سنابشات">سنابشات</option>
                        <option class="app_font text-right"value="اخري">اخري</option>
                    </select>
                </div>

            </div>
            {{--  Illustration  --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2 col-12  app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="نامل التوضيح">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <input type="text" style="" name="explanation" value=" "
                        class="  app_font text-center  form-control">
                </div>

            </div>
            {{--  Job applicant  --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="الوظيفة المتقدم لها	">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <select class="form-control" name="job_is">
                        <option class="app_font text-right" value="معلم"> معلم</option>
                        <option class="app_font text-right" value="وكيل مرحلة">وكيل مرحلة</option>
                    </select>
                </div>

            </div>
            {{--  Qualification  --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="المؤهل  	">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <input type="text" name="qualification" required style=""
                        class="  app_font text-center  form-control">
                </div>

            </div>
            {{--  Main specialization  --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder="التخصص الرئيسي	  	">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <div class="col-lg-10 col-12">
                        <input type="text" name="specialization" required required style=""
                            class="  app_font text-center  form-control">
                    </div>
                </div>

            </div>
            {{--  Years of experience   --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder=" سنوات الخبرة		  	">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <div class="col-lg-10 col-12">
                        <input type="number" name="experience" required style=""
                            class="  app_font text-center  form-control">
                    </div>
                </div>

            </div>
            {{--  phone   --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder=" الجوال	  	">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <input type="number" name="mobile" required style=""
                        class="  app_font text-center  form-control">
                </div>

            </div>
            {{--  email   --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder=" البريد الالكتروني	  	">
                </div>
                <div class="col-lg-10 col-12 p-2">
                    <input type="email" name="email" required style=""
                        class="  app_font text-center  form-control">
                </div>

            </div>
            {{--  Working in our schools   --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder=" العمل بمدارسنا	 	  	">
                </div>
                <div class="col-lg-3 col-12 p-2 text-right">
                    <div class="form-check">
                        <input class="form-check-input p-2" type="checkbox" value="1" id="defaultCheck1">
                        <label class="form-check-label w-100 text-center" for="defaultCheck1">
                            سبق لي العمل لديكم
                        </label>
                    </div>
                </div>

            </div>
            {{--  CV  --}}
            <div class="row app_font  p-2 ">
                <div class="col-lg-2  col-12 app_font ">
                    <input type="text" style="" class="  app_font text-center bg-secondary form-control"
                        readonly placeholder=" (CV) رفع الملف  الشخصي ">
                </div>
                <div class="col-lg-4 col-12 p-2 text-right">
                    <div class="form-check">
                        <input class="form-file-input" required type="file" name="cv" id="defaultFile">
                    </div>
                </div>

            </div>


            <div class="row p-3">
                <div class="col-5 m-auto">
                    <button type="button " class="m-auto p-3 w-100 btn btn-success">ارسال</button>
                </div>
                <div class="col-5 m-auto">
                    <button type="button " class="m-auto p-3 w-100 btn btn-danger">مسح </button>
                </div>
            </div>
        </form>
    </div>
@endsection
