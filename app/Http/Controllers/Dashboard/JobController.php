<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::where('status_job',3)->orderBy('created_at','DESC')->get();

        return View('dashboard.job.index' ,compact('jobs'));
    }

    public function status($status_job)
    {
        $jobs = Job::where('status_job',$status_job)->orderBy('created_at','DESC')->get();

        return View('dashboard.job.status' ,compact('jobs'));
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


    public function getDownload($id)
    {
        $file = Job::where('id',$id)->value('cv');

        if($file != '.')
            return response()->download(public_path('dashboard.pdf/' .$file));
        else
            return redirect()->route('dashboard.job.index');

    }


    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $job = Job::find($id);

        return View('dashboard.job.show' ,compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $job = Job::find($id);

        $job->update(['status_job'=>$request->status_job]);

        return redirect()->route('dashboard.job.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
