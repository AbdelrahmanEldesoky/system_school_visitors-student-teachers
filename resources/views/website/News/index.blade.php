@extends('website.layouts.app')
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title>الاخبار</title>
@endsection
@section('content')
    <div class="site-section">
        <div class="container">

            @foreach ($news as $index=>$new)
            @if ($index%2 ==0)

            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="{{$new->image_path}}"
                        alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span class="title_page"> {{$new->tittal1}}
                            {{$new->tittal2}} </span>
                    </h2>
                    <p class="app_font">
                        {{$new->discription}}
                    </p>
                </div>
            </div>
            @elseif ($index%2==1)
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{$new->image_path}}"
                        alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                    <h2 class="section-title-underline mb-5">
                        <span class="title_page"> {{$new->tittal1}}
                            {{$new->tittal2}}  </span>
                    </h2>
                    <p class="app_font">
                        {{$new->discription}}​
                    </p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
@endsection
