<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
//use App\Http\Requests\;
use App\Http\Requests\SchoolYearRequest;
use App\Models\SchoolYear;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = SchoolYear::get();

        return View('dashboard.school.index' ,compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return View('dashboard.school.create' );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SchoolYearRequest $request)
    {
        $request_data = $request->all();

        $school =SchoolYear::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.school.index');
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
        $school = SchoolYear::find($id);

        return View('dashboard.school.edit',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SchoolYearRequest $request, string $id)
    {
        $school = SchoolYear::find($id);

        $request_data = $request->all();

        $school->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.school.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $school = SchoolYear::find($id);

        $school->delete();
        return redirect()->route('dashboard.school.index');
    }
}
