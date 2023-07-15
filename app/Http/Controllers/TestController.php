<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Activity;
use App\Models\Degry;
use App\Models\HomeWork;
use App\Models\Job;
use App\Models\News;
use App\Models\Student;
use App\Models\StudentHomework;
use App\Models\StudySchedule;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function index(){
        return view('website.index') ;
    }
    public function website(){
        return view('website.homepage.index') ;
    }

    public function login(){

        if (Auth::guard('student')->check()) {
            return redirect()->route('student.index');
        }elseif (Auth::guard('teacher')->check()) {
            return redirect()->route('teacher.index');
        }elseif (Auth::guard('parent')->check()) {
            return redirect()->route('parent.index');
        }else{
            return view('website.login.index') ;
        }
    }

    public function login_store(Request $request){
        if (auth()->guard('student')
        ->attempt(['mobile' => $request->input("mobile"), 'password' => $request->input("password")]))
        {
            return redirect()->route('student.index');
        }
        elseif (auth()->guard('teacher')
        ->attempt(['mobile' => $request->input("mobile"), 'password' => $request->input("password")]))
        {
            return redirect()->route('teacher.index');
        }
        elseif (auth()->guard('parent')
        ->attempt(['mobile' => $request->input("mobile"), 'password' => $request->input("password")]))
        {
            return redirect()->route('parent.index');
        }

        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

    public function logout(Request $request): RedirectResponse
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect()->route('index');
    }


    public function about(){
        $about = About::find(1);
        return view('website.About.index',compact('about')) ;
    }

    public function excelling(){
        return view('website.excelling.index') ;
    }

    public function Questions(){
        return view('website.Questions.index') ;
    }


    public function News(){
        $news = News::orderBy('id','DESC')-> get();
        return view('website.News.index',compact('news')) ;
    }
    public function Student(){
        return view('website.Student.index') ;
    }


    public function schedule(){

       $saturday = StudySchedule::where('day_id',1)
                                 ->where('class_id',Auth::guard('student')->user()->class_id)
                                 ->with('material')->orderBy('period_id','ASC')->get();
       $sunday = StudySchedule::where('day_id',2)
                                 ->where('class_id',Auth::guard('student')->user()->class_id)
                                 ->with('material')->orderBy('period_id','ASC')->get();
       $monday = StudySchedule::where('day_id',3)
                                 ->where('class_id',Auth::guard('student')->user()->class_id)
                                 ->with('material')->orderBy('period_id','ASC')->get();
       $tuesday = StudySchedule::where('day_id',4)
                                 ->where('class_id',Auth::guard('student')->user()->class_id)
                                 ->with('material')->orderBy('period_id','ASC')->get();
       $wednesday = StudySchedule::where('day_id',5)
                                 ->where('class_id',Auth::guard('student')->user()->class_id)
                                 ->with('material')->orderBy('period_id','ASC')->get();
       $thursday = StudySchedule::where('day_id',6)
                                 ->where('class_id',Auth::guard('student')->user()->class_id)
                                 ->with('material')->orderBy('period_id','ASC')->get();

        return view('website.schedule.index',compact('saturday','sunday','monday','tuesday','wednesday','thursday')) ;
    }

    public function homework(){
        $class_id = Student::where('id',Auth::guard('student')->user()->id)->value('class_id');
        $homeworks = HomeWork::where('class_id',$class_id)->with('material')->orderBy('date_at','DESC')->get();
        return view('website.homework.index',compact('homeworks')) ;
    }

    public function homework_show($id){

        $homeworks = HomeWork::where('id',$id)->with('material')->get();
        return view('website.homework.index_2',compact('homeworks'));
    }

    public function getDownload($id)
    {
        $file = HomeWork::where('id',$id)->value('filehome');

        return response()->download(public_path('dashboard.pdf/' .$file));
    }

    public function solution(int $id)
    {

        return view('website.homework.create',compact('id'));
    }

    public function uplaod(Request $request)
    {

        $request_data = $request->all();


        if ($request->filehome) {

            $fileName = time().'.'.$request->filehome->extension();

            $request->filehome->move(public_path('dashboard.pdf'), $fileName);
            $request_data['filehome'] =  $fileName ;
            }
            StudentHomework::create($request_data);

          return redirect()->route('student.homework');
        }




    public function grades(Request $request){
    if($request->date_at == null) {
        $date_at = date('Y-m');
    }else{
        $date_at = $request->date_at;
    }
        $time = strtotime($date_at.'-1');
        $year = date('Y',$time);
        $month = date('m',$time);

        $degrys = Degry::join('materials' , 'materials.id','=','degrys.material_id')
        ->select(DB::raw('sum(degry)as degry,materials.name as name'))
        ->where('student_id',Auth::guard('student')->user()->id)
        ->whereYear('date_at', '=', $year)
        ->whereMonth('date_at', '=', $month)->groupBy('materials.name')->get();

        return view('website.grades.index',compact('degrys','date_at')) ;
    }
    public function Delays(){
        return view('website.Delays.index') ;
    }

    public function Activities(){
        $max_id = Activity::max('id');
        $activitys = Activity::orderBy('created_at','DESC')->get();


        return view('website.Activities.index',compact('activitys')) ;
    }
    public function teacher(){
        return view('website.teacher.index') ;
    }

    public function old_application(){
        return view('website.Employment.old_application.index') ;
    }
    public function old_application_post(Request $request){

        $status_job= Job::where('mobile',$request->mobile )->where('email',$request->email)->value('status_job');

        return view('website.Employment.inquire_application', compact('status_job')) ;
    }
    public function new_application(){

        return view('website.Employment.new_application.index') ;
    }

    public function new_application_post(Request $request ){

        $request_data = $request->all();

            if (!$request->has('worked')){
                $request->request->add(['worked' => 0]);
                $request_data['worked'] = 0;
            }else{
                $request->request->add(['worked' => 1]);
                $request_data['worked'] = 1;
            }
            $cv = time().'.'.$request->cv->extension();

            $request->cv->move(public_path('dashboard.pdf'), $cv);
            $request_data['cv'] =  $cv ;
            Job::create($request_data);

            $status_job=3;

        return view('website.Employment.inquire_application' , compact('status_job')) ;
    }





}
