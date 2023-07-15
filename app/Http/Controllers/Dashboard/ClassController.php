<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRequest;
use App\Http\Requests\TypeRequest;
use App\Models\Classes;
use App\Models\SchoolYear;
use App\Models\TypeReservations;
//use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $years = SchoolYear::get();

        $classes = Classes::with(['school'])->get();

       return View('dashboard.class.index',compact(['classes','years']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $years = SchoolYear::get();

        return View('dashboard.class.create',compact('years'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ClassRequest $request)
    {
        $request_data = $request->all();

        $Class =Classes::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.class.index');
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
        $class= Classes::find($id);
        $years = SchoolYear::get();

        return View('dashboard.class.edit' ,compact('class','years'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassRequest $request, int $id)
    {

        $class=Classes::find($id);

        $request_data = $request->all();

        $class->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.class.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class =Classes::find($id);
        $class->delete();
        return redirect()->route('dashboard.class.index');
    }
}
