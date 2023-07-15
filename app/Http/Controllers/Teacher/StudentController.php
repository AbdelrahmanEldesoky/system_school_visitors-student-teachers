<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Degry;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    public function index($student_id , $material_id)
    {
        $dagrys = Degry::where('student_id',$student_id)->where('material_id',$material_id)
                                                    ->with(['material','student'])->get();

        return View('teacher.degry.index' ,compact('dagrys','student_id','material_id')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($student_id ,$material_id)
    {
        return View('teacher.degry.create' ,compact('student_id','material_id')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$student_id ,$material_id)
    {
        $request_data = $request->all();

        Degry::create($request_data);

        return redirect()->route('teacher.degry.index',[$student_id,$material_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $material_id ,int $class_id )
    {
        $students = Student::join('study_schedules','study_schedules.class_id','=','students.class_id')
        ->select('students.name','students.id','students.code','students.mobile')
        ->where('study_schedules.material_id',$material_id)
        ->where('study_schedules.class_id',$class_id)
        ->where('study_schedules.teacher_id',Auth::guard('teacher')->user()->id)
        ->distinct()->get();

        return View('teacher.student.index' ,compact('students','material_id','class_id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaterialRequest $request, int $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
