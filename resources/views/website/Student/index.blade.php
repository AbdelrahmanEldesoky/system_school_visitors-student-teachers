@extends('website.layouts.app')
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title>صفحة الطالب</title>
@endsection
{{-- @section('login')
    <div class="col-lg-3 text-right">
        <a href="login.html" class=" mr-3 app_font text_blue h4"><span class="icon-unlock-alt text_blue h4"></span> تسجيل
            دخول</a>
    </div>
@endsection --}}
@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-12">
                @include('website.Student.data')
            </div>
        
        
            <div class="col-3 border p-2  text-center bg-secondary">
                <a href="{{ route('student.schedule') }}" class="text-light  w-100 app_font ">
                    الجدول الدراسي
                </a>
            </div>
            <div class="col-3 border p-2 m-auto text-center bg-secondary">
                <a href="{{ route('student.homework') }}" class="text-light  w-100 app_font ">
                    الواجبات
                </a>
            </div>
            <div class="col-3 border p-2  text-center bg-secondary">
                <a href="{{ route('student.grades') }}" class=" text-light w-100 app_font ">
                    كشف الدراجات
                </a>
            </div>
            
            {{-- <a href="{{ route('Delays') }}" class="col-6 col-lg-3  border rounded-3 bg-info text-light   app_font h3 border p-5 text-center">

                بيان حضور الطالب

            </a> --}}
           
     
        </div>
    </div>
@endsection
