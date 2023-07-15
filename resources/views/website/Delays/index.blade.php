@extends('website.layouts.app')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title> بيان حضور الطالب</title>
@endsection

@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-12">
                @include('website.Student.data')
            </div>
            <div class="col-lg-12 p-4">
                <h2 class="section-title-underline text-center">
                    <span class="title_page">بيان حضور الطالب ( الحضور يومياً من الساعة 8 صباحاً) </span>

                    </body>
                </h2>
            </div>
            <div class="col-4 m-auto">
                <button class="btn btn_print btn-success w-100  app_font" onclick="window.print()">طباعة</button>
            </div>
            <div class="col-12">
                <table id="myTable" class="display table table-bordered">
                    <thead>
                        <tr>
                            <td class="app_font h3 text-center">
#
                            </td>
                            <th class="app_font h3 text-center" scope="col">التاريخ</th>
                            <th class="app_font h3 text-center" scope="col">الحضور</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="app_font h3 text-center" scope="row">1</th>
                            <td class="app_font h3 text-center">1-3-2023</td>
                            <td class="app_font h3 text-center">7.30</td>
                        </tr>


                        <tr>
                            <th class="app_font h3 text-center" scope="row">2</th>
                            <td class="app_font h3 text-center">2-3-2023</td>
                            <td class="app_font h3 text-center">7.30</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            table {
                visibility: visible;
            }
        }
    </style>
@endsection
