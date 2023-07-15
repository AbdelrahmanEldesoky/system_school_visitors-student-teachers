@extends('website.layouts.app')
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title> طلب جديد</title>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 m-auto">
            <form action="{{ route('old_application_post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post')}}
                <div class="form-group text-right">
                  <label class="app_font " for="email">البريد الالكتروني </label>
                  <input type="email" class="app_font text-right form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="البريد الالكتروني">
                </div>
                <div class="form-group text-right">
                  <label class="app_font " for="phone">الجوال</label>
                  <input type="text" class="app_font text-right form-control" name="mobile" id="phone" placeholder="الجوال">
                </div>
                <div class="row p-3">
                    <div class="col-lg-5 col-12">
                        <button type="button " class="m-auto p-3 w-100 btn btn-success">عرض</button>
                    </div>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection
