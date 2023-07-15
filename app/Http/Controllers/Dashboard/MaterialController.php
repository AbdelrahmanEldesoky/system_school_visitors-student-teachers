<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Material;
use App\Models\SchoolYear;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::with('school')->get();
        $years = SchoolYear::get();
        return View('dashboard.material.index' ,compact('materials','years'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $years = SchoolYear::get();

        return View('dashboard.material.create',compact('years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MaterialRequest $request)
    {
        $request_data = $request->all();

        Material::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.material.index');
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
        $material = Material::find($id);

        return View('dashboard.material.edit',compact('material','years'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaterialRequest $request, int $id)
    {
        $matrial = Material::find($id);

        $request_data = $request->all();

        $matrial->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.material.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Material::find($id);
        $product->delete();

        return redirect()->route('dashboard.material.index');
    }
}
