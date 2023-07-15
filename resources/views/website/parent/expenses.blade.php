@extends('website.layouts.app')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title>بيان مصاريف الطالب</title>
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

            <div class="col-lg-12 p-4">
                <h2 class="section-title-underline text-center">
                    <span class="title_page">بيان كشف حساب الطالب </span><br>
                   <h3 style="text-align:right;">     </h3>
                    <h3 style="text-align:right;">اجمالي الرسوم الدراسية :   ( {{$year}} )  ريال</h3>

                </h2>
            </div>

            <div class="col-12">
                <table  class="responsive-display table  table-bordered   table-bordered">
                    <table  class="responsive-display table  table-bordered   table-bordered">
                        <thead>

                            <tr>
                                <th class="app_font h3 text-center" scope="col">رقم السند
                                </th>
                                <th class="app_font h3 text-center" scope="col">
                                    التاريخ
                                </th>
                                <th class="app_font h3 text-center" scope="col">المبلغ
                                </th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($expenses as $index=>$ex)
                            <tr>
                                <th class="app_font h3 text-center" scope="row">{{$ex->ex_id}}
                                </th>
                                <th class="app_font h3 text-center" scope="row">{{$ex->date_at}}
                                </th>
                                <td class="app_font h1 text-center">{{$ex->student}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                
                            <thead>

                            <tr>
                                <th class="app_font h3 text-center" scope="col"  colspan="2">
                                    المتبقي
                                </th>
                               
                                <th class="app_font h2 text-center" scope="col">{{$year -$student}}
                                </th>
                            </tr>

                        </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
