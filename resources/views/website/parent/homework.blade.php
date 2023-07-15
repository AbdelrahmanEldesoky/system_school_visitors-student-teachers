@extends('website.layouts.app')
 <link rel="stylesheet" href="{{ asset('website/css/second.css') }}">
@section('title')
    <title> واجبات الطالب</title>
@endsection

@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-lg-12 p-4">
                <h2 class="section-title-underline text-center title_page">
                    واجبات الطالب
                </h2>
            </div>

            <div class="col-12">

                <table  class="display table  table-bordered   table-bordered">
                    <thead>
                        <tr>
                            <td class="diagonal app_font h3 text-center">
                                التاريخ
                            </td>
                            <td class="diagonal app_font h3 text-center">
                                المادة
                            </td>
                            <th class="diagonal app_font h3 text-center" >رؤية الواجب </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homeworks as $homework)

                        <tr>
                            <th class="app_font h3 text-center">{{$homework->date_at}}</th>

                            <th class="app_font h3 text-center" scope="row">{{$homework->material->name}}</th>

                            <td class="app_font h3 text-center">

                                <a class="app_font text-center btn btn-success btn_homework" href="{{route('parent.homework.show',$homework->id)}}">
                                    رؤية الواجب
                                </a>
                            </td>
                            <!--td class="text-center">
                                <button class=' app_font text-center btn btn-success btn_homework'>
                                    رفع واجب المادة
                                </button>
                            </td-->
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $('#click').on('click', function() {

            Swal.fire({
                title: '<strong class="app_font h1 text-danger">  اسئلة مادة القرآن الكريم </strong>',
                icon: 'info',
                html: ' <div class="container ">' +
                    '<div class="col-lg-12 col-6 text-right">' +
                    '<h2 class="app_font text-right text-success">   اكمل الاية الكريمة</h2>' +
                    '<h3 class="app_font text-right">  أَفَلا يَنْظُرُونَ إِلَى ( ....... )ِ كَيْفَ خُلِقَتْ</h3>' +
                    '</div>' +
                    "<hr>" +
                    '<div class="col-lg-12 col-6 text-right">' +
                    '<h2 class="app_font text-right text-success">   اكمل الاية الكريمة</h2>' +
                    '<h3 class="app_font text-right">  أَفَلا يَنْظُرُونَ إِلَى ( ....... )ِ كَيْفَ خُلِقَتْ</h3>' +
                    '</div>' +

                    "<hr>" +
                    '<div class="col-lg-12 col-6 text-right">' +
                    '<h2 class="app_font text-right text-success">   اكمل الاية الكريمة</h2>' +
                    '<h3 class="app_font text-right">  أَفَلا يَنْظُرُونَ إِلَى ( ....... )ِ كَيْفَ خُلِقَتْ</h3>' +
                    '</div>' +
                    "<hr>" +
                    '<div class="col-lg-12 col-6 text-right">' +
                    '<h2 class="app_font text-right text-success">   اكمل الاية الكريمة</h2>' +
                    '<h3 class="app_font text-right">  أَفَلا يَنْظُرُونَ إِلَى ( ....... )ِ كَيْفَ خُلِقَتْ</h3>' +
                    '</div>' +
                    "<hr>" +
                    '<div class="col-lg-12 col-6 text-right">' +
                    '<h2 class="app_font text-right text-success">   اكمل الاية الكريمة</h2>' +
                    '<h3 class="app_font text-right">  أَفَلا يَنْظُرُونَ إِلَى ( ....... )ِ كَيْفَ خُلِقَتْ</h3>' +
                    '</div>' +

                    '</div>',

                showConfirmButton: false,
                focusConfirm: false,
                confirmButtonText: 'حسناً',
                confirmButtonAriaLabel: 'Thumbs up, great!',

            })
        })


        $('#mina').on('click', function() {

            Swal.fire({
                title: '<strong class="app_font h1 text-danger">  اسئلة مادة اللغة العربية </strong>',
                icon: 'info',
                html: ' <div class="container ">' +
                    '<div class="col-lg-12 col-6 text-right">' +
                    '<h2 class="app_font text-right text-success">   اكمل بيت الشعر التالي</h2>' +
                    '<h3 class="app_font text-right"> ( ....... )ِ  احبها وتحبني ويحب ناقتها من </h3>' +
                    '</div>' +
                    "<hr>" +
                    '<div class="col-lg-12 col-6 text-right">' +
                    '<h2 class="app_font text-right text-success">  اجب عن السؤال التالي  </h2>' +
                    '<h3 class="app_font text-right"> كم عدد أنواع توابع اللغة العربية وما هي تلك الأنواع؟ </h3>' +
                    '</div>' +
                    '</div>',

                showConfirmButton: false,
                focusConfirm: false,
                confirmButtonText: 'حسناً',
                confirmButtonAriaLabel: 'Thumbs up, great!',

            })
        })


        document.getElementById("duty_date").addEventListener("change", function() {
            var filterValue = this.value.toLowerCase();
            var table = document.getElementById("myTable");
            var column = table.querySelectorAll("th:nth-child(1)"); // Assuming you want to filter the third column

            for (var i = 0; i < column.length; i++) {
                var cellValue = column[i].textContent.toLowerCase();
                var row = column[i].parentNode;

                if (filterValue === "" || cellValue === filterValue) {
                    row.style.display = ""; // Show the row
                } else {
                    row.style.display = "none"; // Hide the row
                }
            }
        });


        document.getElementById("Study_materials").addEventListener("change", function() {
            var filterValue = this.value.toLowerCase();
            var table = document.getElementById("myTable");
            var column = table.querySelectorAll("th:nth-child(2)"); // Assuming you want to filter the third column

            for (var i = 0; i < column.length; i++) {
                var cellValue = column[i].textContent.toLowerCase();
                var row = column[i].parentNode;

                if (filterValue === "" || cellValue === filterValue) {
                    row.style.display = ""; // Show the row
                } else {
                    row.style.display = "none"; // Hide the row
                }
            }
        });
    </script>
@endsection
