<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use App\Models\ParentStudent;
use App\Models\Student;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parents = Parents::get();

        return View('dashboard.parent.index' ,compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('dashboard.parent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request_data = $request->all();
        $request_data = $request->except(['password']);
        $request_data['password'] = bcrypt($request->password);

        Parents::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.parent.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $parent_id)
    {
        
            $parents = Parents::join('parent_students','parent_students.parent_id','=','parentis.id')
            ->join('students','students.id','=','parent_students.student_id')
            ->select('students.id as id','students.name as name')
            ->where('parentis.id',$parent_id)
            ->get();
        
    //    $parents = Parents::where('id',$parent_id)->with('student')->get();
        return View('dashboard.parent.show' ,compact('parents','parent_id'));
    }

    public function student($parent_id)
    {
        $students = Student::whereNotIn('id',function($query) {
            $query->select('parent_students.student_id')->from('parent_students');
        })->get();

        return View('dashboard.parent.student',compact('students','parent_id'));
    }

    public function student_store(Request $request)
    {
        $request_data = $request->all();


        ParentStudent::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.parent.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {

        $parent = Parents::find($id);

        return View('dashboard.parent.edit',compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $student = Parents::find($id);

        $request_data = $request->all();
        $request_data = $request->except(['password']);

        if($request->password != null){
            $request_data['password'] = bcrypt($request->password);
        }
        $student->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.parent.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Parents::find($id);
        $student->delete();

        return redirect()->route('dashboard.parent.index');
    }
}
