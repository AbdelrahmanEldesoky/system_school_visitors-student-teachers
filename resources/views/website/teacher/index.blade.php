@extends('website.layouts.app')
@section('title')
    <title>المعلم</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-block section-title-underline mb-5 text-center p-4">
                <h1 class="title_page section-title-underline">
                    الخصومات الواقعة علي المدرس
                </h1>
            </div>
            <div class="col-12">
                <form>
                    <div class="row">
                        <div class="col-4 text-right m-auto">
                            <label class='app_font h' for="name"> اسم المعلم </label>
                            <input type="text" class="readonly bg-black name app_font h3 text-center" id="name"
                                placeholder="جبران خليل جبران" readonly>
                        </div>
                        <div class="col-4 text-right m-auto">
                            <label class='app_font h' for="code">كود المعلم </label>
                            <input type="text" class="readonly bg-black code app_font h3 text-center" id="code"
                                placeholder="9Tfwy6H2B8wf" readonly>
                        </div>
                    </div>
                </form>
            </div>
           
            <div class="col-12 p-2">
                <form>
                    <div class="row border p-4">
                        <div class="col-4 text-right m-auto">
                            <label class='app_font h' for="name"> قيمة الخصم</label>
                            <input type="text" class=" readonly bg-secondary name app_font h3 text-center" id="name"
                                placeholder="  ريال سعودي 30 " readonly>

                        </div>
                        <div class="col-4 text-right m-auto">
                            <label class='app_font h' for="code">  التاريخ</label>
                            <input type="text" class=" readonly bg-secondary code app_font h3 text-center" id="code"
                                placeholder="1-3-2023" readonly>
                        </div>
                        <div class="col-12">
                            <div class="form-group app_font text-right">
                                <label for="exampleFormControlTextarea1">ارسال التعليق</label>
                                <textarea class="form-control text-right" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                        </div>
                        <div class="col-4 m-auto">
                            <button type="submit" class="w-50 app_font btn btn-primary">ارسال التعليق</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 p-2">
                <form>
                    <div class="row border p-4">
                        <div class="col-4 text-right m-auto">
                            <label class='app_font h' for="name"> قيمة الخصم</label>
                            <input type="text" class=" readonly bg-secondary name app_font h3 text-center" id="name"
                                placeholder="  ريال سعودي 30 " readonly>

                        </div>
                        <div class="col-4 text-right m-auto">
                            <label class='app_font h' for="code">  التاريخ</label>
                            <input type="text" class=" readonly bg-secondary code app_font h3 text-center" id="code"
                                placeholder="1-3-2023" readonly>
                        </div>
                        <div class="col-12">
                            <div class="form-group app_font text-right">
                                <label for="exampleFormControlTextarea1">ارسال التعليق</label>
                                <textarea class="form-control text-right" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                        </div>
                        <div class="col-4 m-auto">
                            <button type="submit" class="w-50 app_font btn btn-primary">ارسال التعليق</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 p-2">
                <form>
                    <div class="row border p-4">
                        <div class="col-4 text-right m-auto">
                            <label class='app_font h' for="name"> قيمة الخصم</label>
                            <input type="text" class=" readonly bg-secondary name app_font h3 text-center" id="name"
                                placeholder="  ريال سعودي 30 " readonly>

                        </div>
                        <div class="col-4 text-right m-auto">
                            <label class='app_font h' for="code">  التاريخ</label>
                            <input type="text" class=" readonly bg-secondary code app_font h3 text-center" id="code"
                                placeholder="1-3-2023" readonly>
                        </div>
                        <div class="col-12">
                            <div class="form-group app_font text-right">
                                <label for="exampleFormControlTextarea1">ارسال التعليق</label>
                                <textarea class="form-control text-right" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                        </div>
                        <div class="col-4 m-auto">
                            <button type="submit" class="w-50 app_font btn btn-primary">ارسال التعليق</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
