
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

         <div class="col">
            <div class="row p-2">
                @foreach ($parents as $parent)

        <div class="col-3 border p-2 m-auto text-center bg-secondary">
            <a href="{{ route('parent.student',$parent->id) }}" class="w-100 app_font text-light">
                {{$parent->name}}
            </a>
        </div>

            @endforeach
           </div>
         </div>
        </div>
    </div>
@endsection
