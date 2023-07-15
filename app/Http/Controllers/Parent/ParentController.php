<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;

use App\Models\Degry;
use App\Models\Expenses;
use App\Models\HomeWork;
use App\Models\Parents;
use App\Models\ParentStudent;
use App\Models\Student;
use App\Models\StudySchedule;
use App\Models\SchoolYear;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;;
use Illuminate\Support\Facades\DB;
class ParentController extends Controller
{
    public function student(){

        $parents = Parents::join('parent_students','parent_students.parent_id','=','parentis.id')
            ->join('students','students.id','=','parent_students.student_id')
            ->select('students.id as id','students.name as name')
            ->where('parentis.id',Auth::guard('parent')->user()->id)
            ->get();


        return View('website.parent.student' ,compact('parents'));


    }
    public function logout(Request $request): RedirectResponse
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect()->route('index');
    }
    public function choose($student_id){
        return view('website.parent.choose',compact('student_id')) ;
    }

    public function schedule($student_id){


        $class_id = Student::where('id',$student_id)->value('class_id');

        $saturday = StudySchedule::where('day_id',1)
                                  ->where('class_id',$class_id)
                                  ->with('material')->orderBy('period_id','ASC')->get();
        $sunday = StudySchedule::where('day_id',2)
                                  ->where('class_id',$class_id)
                                  ->with('material')->orderBy('period_id','ASC')->get();
        $monday = StudySchedule::where('day_id',3)
                                  ->where('class_id',$class_id)
                                  ->with('material')->orderBy('period_id','ASC')->get();
        $tuesday = StudySchedule::where('day_id',4)
                                  ->where('class_id',$class_id)
                                  ->with('material')->orderBy('period_id','ASC')->get();
        $wednesday = StudySchedule::where('day_id',5)
                                  ->where('class_id',$class_id)
                                  ->with('material')->orderBy('period_id','ASC')->get();
        $thursday = StudySchedule::where('day_id',6)
                                  ->where('class_id',$class_id)
                                  ->with('material')->orderBy('period_id','ASC')->get();

         return view('website.parent.schedule',compact('saturday','sunday','monday','tuesday','wednesday','thursday')) ;
     }
     public function homework($student_id){
        $class_id = Student::where('id',$student_id)->value('class_id');
        $homeworks = HomeWork::where('class_id',$class_id)->with('material')->orderBy('date_at','DESC')->get();

        return view('website.parent.homework',compact('homeworks')) ;
    }
    public function homework_show($id){

        $homeworks = HomeWork::where('id',$id)->with('material')->get();
        return view('website.parent.homework_2',compact('homeworks')) ;
    }
    public function getDownload($id)
    {
        $file = HomeWork::where('id',$id)->value('filehome');

        return response()->download(public_path('dashboard.pdf/' .$file));
    }
    public function grades(Request $request,$student_id){
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
            ->where('student_id',$student_id)
            ->whereYear('date_at', '=', $year)
            ->whereMonth('date_at', '=', $month)->groupBy('materials.name')->get();

            return view('website.parent.grades',compact('degrys','date_at')) ;
        }
        
              public function expenses($student_id){
            $year_id = Student::where('id',$student_id)->value('year_id');

            $expenses= Expenses::where('year_id',$year_id)->where('student_id',$student_id)->get();

            $student = Expenses::where('year_id',$year_id)->where('student_id',$student_id)->sum('student');
            $year =  SchoolYear::where('id',$year_id)->sum('expenses');

            return view('website.parent.expenses',compact('expenses','year','student'));
        }


}
