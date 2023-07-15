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


        <div class="card">
            <div class="card-header">
              طلب توظيف
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                @if ($status_job==3)
        <h1>طلب قيد المراجعة يمكنك الانتظار</h1>
        @elseif ($status_job==2)
        <h1>تم رفض الطلب يمكنك التقديم في وقت اخر</h1>
        @elseif ($status_job==1)
        <h1>تم قبول الطلب و سوف تحدد الادارة موعد للاتصال بك</h1>
        @else
        <h1> </h1>
        @endif
              </blockquote>
            </div>
          </div>

    </div>
@endsection
