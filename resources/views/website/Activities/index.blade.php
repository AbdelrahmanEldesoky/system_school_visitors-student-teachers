@extends('website.layouts.app')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title> الانشطة المدرسية</title>
@endsection

@section('content')
    <div class="container p-3">
        <div class="row">

            <div class="col-lg-12 p-4">
                <h2 class="section-title-underline text-center">
                    <span class="title_page"> الانشطة المدرسة</span>

                    </body>
                </h2>
            </div>

            <div class="col-12">
                <section id=timeline>
                    <h1>A Flexbox Timeline</h1>

                    <div class="demo-card-wrapper">


                        @foreach ($activitys as $index=>$activity )
                        

                        <div class="demo-card demo-card--step{{$index+1}}">
                            <div class="head">
                                <div class="number-box">
                                    <span>{{$index+1}}</span>
                                </div>
                                <h2><span class="small">{{$activity->tittal1}}</span> {{$activity->tittal2}}</h2>
                            </div>
                            <div class="body">
                                <p>{{$activity->discription}}</p>
                                <img src="{{ $activity->image_path }}" style="max-width: 400px; height:200px" alt="Graphic">
                            </div>
                        </div>
                        
                        @endforeach

                  
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
