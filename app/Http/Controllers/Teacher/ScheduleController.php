<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Classes;
use App\Models\Day;
use App\Models\Material;
use App\Models\Period;
use App\Models\StudySchedule;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = StudySchedule::with(['material','teacher','class','day'])->
        where('teacher_id',Auth::guard('teacher')->user()->id)->with('day')->distinct()->get();

        return View('teacher.schedule.index' ,compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $days = Day::get();
        $classes = Classes::get();
        $materials = Material::get();
        $teachers = Teacher::get();
        $periods = Period::get();

        return View('teacher.schedule.create',compact(['days','classes','materials','teachers','periods']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request_data = $request->all();

        StudySchedule::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('teacher.schedule.index');
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
      /*  $days =Day::get();
        $classes = Classes::get();
        $materials = Material::get();
        $teachers = Teacher::get();
        $periods= Period::get();

        return View('teacher.schedule.edit',compact('material','years'));
    */
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaterialRequest $request, int $id)
    {/*
        $matrial = Material::find($id);

        $request_data = $request->all();

        $matrial->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('teacher.material.index');
    */}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     /*   $product = Material::find($id);
        $product->delete();

        return redirect()->route('teacher.material.index');
    */}
}
