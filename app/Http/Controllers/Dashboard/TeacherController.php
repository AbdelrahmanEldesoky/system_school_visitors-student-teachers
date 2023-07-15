<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();

        return View('dashboard.teacher.index' ,compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('dashboard.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        $request_data = $request->all();
        $request_data = $request->except(['password']);
        $request_data['password'] = bcrypt($request->password);

        Teacher::create($request_data);


        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.teacher.index');
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

        $teacher = Teacher::find($id);

        return View('dashboard.teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $teacher = Teacher::find($id);

        $request_data = $request->all();
        $request_data = $request->except(['password']);


        if($request->password != null){
            $request_data['password'] = bcrypt($request->password);
        }
        $teacher->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('dashboard.teacher.index');
    }
}
