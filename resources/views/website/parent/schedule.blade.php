@extends('website.layouts.app')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title>الجدول الدراسي</title>
@endsection

@section('content')
    <div class="container p-3">
        <div class="row">

            <div class="col-lg-12 p-4">
                <h2 class="section-title-underline text-center">
                    <span class="title_page">الجدول الدراسي للصف الاول الابتدائي</span>
                </h2>
            </div>

            <div class="col-12">
                <table class="display table  table-bordered   table-bordered" dir="rtl">
                        <thead>
                          <tr>
                            <td class="app_font h3 text-center">
                                اليوم
                            </td>
                            <th class="app_font h3 text-center" scope="col">الحصة الاولي</th>
                            <th class="app_font h3 text-center" scope="col"> الحصة الثانية</th>
                            <th class="app_font h3 text-center" scope="col"> الحصة الثالثة</th>
                            <th class="app_font h3 text-center" scope="col"> الحصة الرابعة</th>
                            <th class="app_font h3 text-center" scope="col"> الحصة الخامسة</th>
                            <th class="app_font h3 text-center" scope="col"> الحصة السادسة</th>
                            <th class="app_font h3 text-center" scope="col"> الحصة السابعة</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="app_font h3 text-center">السبت</th>
                        @foreach ($saturday as $day)
                            <td class="app_font h3 text-center">{{$day->material->name}}</td>
                        @endforeach
                          </tr>
                           <tr>
                            <th class="app_font h3 text-center">الاحد</th>
                        @foreach ($sunday as $day)
                            <td class="app_font h3 text-center">{{$day->material->name}}</td>
                        @endforeach
                          </tr>
                          <tr>
                            <th class="app_font h3 text-center">الاثنين</th>
                        @foreach ($monday as $day)
                            <td class="app_font h3 text-center">{{$day->material->name}}</td>
                        @endforeach
                          </tr>
                          <tr>
                            <th class="app_font h3 text-center">الثلاثاء</th>
                        @foreach ($tuesday as $day)
                            <td class="app_font h3 text-center">{{$day->material->name}}</td>
                        @endforeach
                          </tr>
                          <tr>
                            <th class="app_font h3 text-center">الاربغاء</th>
                        @foreach ($wednesday as $day)
                            <td class="app_font h3 text-center">{{$day->material->name}}</td>
                        @endforeach</td>
                          </tr>
                          <tr>
                            <th class="app_font h3 text-center">الخميس</th>
                        @foreach ($thursday as $day)
                            <td class="app_font h3 text-center">{{$day->material->name}}</td>
                        @endforeach
                          </tr>
                        </tbody>

                    </table>
            </div>
        </div>
    </div>

    @endsection
