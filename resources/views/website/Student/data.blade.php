
<form>
    <div class="row">
        <div class="col-lg-4 col-12 text-right">
            <label class='app_font h' for="class">الصف الدارسي </label>
            <input type="text" class="readonly bg-dark class app_font h3 text-center" id="class"
                placeholder="{{Auth::guard('student')->user()->load(['school'])->school->name}}" readonly>
        </div>
        <div class="col-lg-4 col-12 text-right">
            <label class='app_font h' for="code">كود الطالب </label>
            <input type="text" class="readonly bg-dark code app_font h3 text-center" id="code"
                placeholder="{{Auth::guard('student')->user()->code}}" readonly>
        </div>
        
        <div class="col-lg-4 col-12 text-right">
            <label class='app_font h' for="name"> اسم الطالب </label>
            <input type="text" class="readonly bg-dark name app_font h3 text-center" id="name"
                placeholder="{{Auth::guard('student')->user()->name}}" readonly>
        </div>
    </div>
</form>
