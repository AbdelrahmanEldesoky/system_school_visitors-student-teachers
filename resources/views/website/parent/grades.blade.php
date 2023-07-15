@extends('website.layouts.app')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title>بيان درجات</title>
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
                    <span class="title_page">بيان درجات </span>
                </h2>
            </div>


            <form action="{{ route('student.grades') }}" method="get">

                <div class="row text-center" >

                    <div class="col-md-6">
                        <input type="month" name="date_at"  class="form-control" style="speak-date: ym" placeholder="بحث"
                             @if (request()->date_at == null)
                             value="{{date('Y-m')}}"
                             @else
                             value="{{ request()->date_at }}"
                             @endif  >
                    </div>


                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> بحث</button>
                    </div>

                </div>
            </form><!-- end of form -->


            <div class="col-12">
                <table  class="responsive-display table  table-bordered   table-bordered">
                    <table  class="responsive-display table  table-bordered   table-bordered">
                        <thead>

                            <tr>
                                <th class="app_font h3 text-center" scope="col">المادة
                                </th>
                                <th class="app_font h3 text-center" scope="col">الدرجة
                                </th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($degrys as $degry)
                            <tr>
                                <th class="app_font h3 text-center" scope="row">{{$degry->name}}
                                    <br>
                                    <span class="text-success h5">
                                        ( 100 )
                                    </span>
                                </th>
                                <td class="app_font h1 text-center">{{$degry->degry}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
