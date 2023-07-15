@extends('website.layouts.app')
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title> واجبات الطالب</title>
@endsection

@section('content')
    <div class="container ">
        @foreach ($homeworks as $homework)


        <div class="col-lg-12 p-4">
            <h1 class="section-title-underline text-center title_page">
                واجبات الطالب
            </h1>
        </div>
        <div class="col-lg-12 p-4">
            <h1 class="section-title-underline text-center app_font text-danger ">
                اسئلة مادة {{$homework->material->name}}
            </h1>
        </div>
        <div class="col-lg-12 col-6 text-right">
            <h2 class="app_font text-right text-success"> عنوان</h2>
            <h3 class="app_font text-right">{{$homework->name}}</h3>
        </div>
        <hr>
        <div class="col-lg-12 col-6 text-right">
            <h2 class="app_font text-right text-success"> الواجب</h2>
            <h3 class="app_font text-right">{{$homework->homework}}</h3>
        </div>


        @endforeach
    </div>
@endsection
