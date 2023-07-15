<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\TeacherRequest;
use App\Models\Classes;
use App\Models\Material;
use App\Models\SchoolYear;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();

        return View('dashboard.student.index' ,compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $years = SchoolYear::get();
        $classes = Classes::get();
        return View('dashboard.student.create',compact('years','classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $request_data = $request->all();
        $request_data = $request->except(['password']);
        $request_data['password'] = bcrypt($request->password);



        Student::create($request_data);


        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $years = SchoolYear::get();
        $student = Student::find($id);
        $classes = Classes::get();

        return View('dashboard.student.edit',compact('student','years','classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $student = Student::find($id);

        $request_data = $request->all();
        $request_data = $request->except(['password']);

        if($request->password != null){
            $request_data['password'] = bcrypt($request->password);
        }
        $student->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('dashboard.student.index');
    }
}
