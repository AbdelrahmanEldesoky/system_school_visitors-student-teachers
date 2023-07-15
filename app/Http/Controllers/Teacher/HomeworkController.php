<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Degry;
use App\Models\HomeWork;
use App\Models\Student;
use App\Models\StudentHomework;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeworkController extends Controller
{
    public function index( $material_id,$class_id)
    {
        $homeworks = HomeWork::where('material_id',$material_id)->where('class_id',$class_id)
                  ->where('teacher_id',Auth::guard('teacher')->user()->id)->with('material')->get();

        return View('teacher.homework.index' ,compact('homeworks','material_id','class_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($material_id,$class_id)
    {
        return View('teacher.homework.create' ,compact('material_id','class_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            'filehome' => 'required|mimes:pdf,xlx,csv,webp|max:2048',

        ]);
        $request_data = $request->all();


        if ($request->filehome) {

            $fileName = time().'.'.$request->filehome->extension();

            $request->filehome->move(public_path('dashboard.pdf'), $fileName);
            $request_data['filehome'] =  $fileName ;
        }

          HomeWork::create($request_data);
       return redirect()->route('teacher.homework.index',[ $request->material_id,$request->class_id]);
    }


public function get(int $id)
{
    $homeworks = HomeWork::where('id',$id)->with('material')->get();

        return View('teacher.homework.show' ,compact('homeworks'));

}
public function done(int $id)
{
    $homeworks = StudentHomework::where('homework_id',$id)->with('student')->get();
    
    return View('teacher.homework.student' , compact('homeworks','id'));
}


public function showdone(int $id)
{
    $homeworks = StudentHomework::find($id);

    return View('teacher.homework.txt' , compact('homeworks','id'));
}


public function getDownload($id)
{
    $file = StudentHomework::where('id',$id)->value('filehome');

    return response()->download(public_path('dashboard.pdf/' .$file));
}


    /**
     * Display the specified resource.
     */
    public function show(int $id )
    {
        //

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
