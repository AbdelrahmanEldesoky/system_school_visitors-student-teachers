<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Classes;
use App\Models\Day;
use App\Models\Material;
use App\Models\Period;
use App\Models\Student;
use App\Models\StudySchedule;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $classes = StudySchedule::where('teacher_id',Auth::guard('teacher')->user()->id)
        ->with(['class'])->distinct()->get('class_id');

        return View('teacher.class.index' ,compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $class_id)
    {
        $materials = StudySchedule::where('teacher_id',Auth::guard('teacher')->user()->id)
        ->with(['material'])->where('class_id',$class_id)->distinct()->get('material_id');
        return View('teacher.material.index' ,compact('materials','class_id'));
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
