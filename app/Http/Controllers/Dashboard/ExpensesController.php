<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Expenses;
use App\Models\Material;
use App\Models\SchoolYear;
use App\Models\Student;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $year_id, int $id)
    {
        $expenses= Expenses::where('year_id',$year_id)->where('student_id',$id)->get();

       $student = Expenses::where('year_id',$year_id)->where('student_id',$id)->sum('student');
       $year =  SchoolYear::where('id',$year_id)->sum('expenses');

        return View('dashboard.expenses.index' ,compact('expenses','year_id','id','year','student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $year_id, int $id)
    {
        $year =  SchoolYear::where('id',$year_id)->sum('expenses');
        return View('dashboard.expenses.create',compact('year_id','id','year'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request_data = $request->all();
        Expenses::create($request_data);

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
      /*  $years = SchoolYear::get();
        $material = Material::find($id);

        return View('dashboard.material.edit',compact('material','years'));
    */}

    /**
     * Update the specified resource in storage.
     */
    public function update(MaterialRequest $request, int $id)
    {
      /*  $matrial = Material::find($id);

        $request_data = $request->all();

        $matrial->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.material.index');
    */}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
/*        $product = Material::find($id);
        $product->delete();

        return redirect()->route('dashboard.material.index');
    */  }
}
