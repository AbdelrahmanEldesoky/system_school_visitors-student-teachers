@extends('website.layouts.app')
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title>صفحة الطالب</title>
@endsection

@section('content')
    <div class="container p-3">
        <div class="row">
         <div class="col">
           <div class="row p-2">
            <div class="col-3 border p-2 m-auto text-center bg-secondary">
                <a href="{{ route('parent.schedule',$student_id) }}" class="text-light w-100 app_font">
                    الجدول الدراسي
                </a>
            </div>
            <div class="col-3 border p-2 m-auto text-center bg-secondary">
                <a href="{{ route('parent.homework',$student_id) }}" class="text-light w-100 app_font">
                    الواجبات
                </a>
            </div>
            <div class="col-3 border p-2 m-auto text-center bg-secondary">
                <a href="{{ route('parent.grades',$student_id) }}" class="text-light w-100 app_font">
                    تقرير الدرجات
                </a>
            </div>
            <div class="col-3 border p-2 m-auto text-center bg-secondary">
                <a href="{{ route('parent.expenses',$student_id) }}" class="text-light w-100 app_font">
                    كشف حساب     
                </a>
            </div>

            
            
          

            {{-- <a href="{{ route('Delays') }}" class="col-6 col-lg-3  border rounded-3 bg-info text-light  h-100 app_font h3 border p-5 text-center">

                بيان حضور الطالب

            </a> --}}
           </div>
         </div>
        </div>
    </div>
@endsection
