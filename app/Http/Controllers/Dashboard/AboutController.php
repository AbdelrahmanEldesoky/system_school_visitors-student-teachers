<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::find(1);

        return View('dashboard.about.index' ,compact('about')) ;
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
    public function show(string $id)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::find(1);
        
        return View('dashboard.about.edit' ,compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::find(1);

        $request_data = $request->all();


        if ($request->image1) {

            if ($about->image1 != 'default.png') {

                Storage::disk('public_html')->delete('website/images/' . $about->image1);

            }//end of if

            Image::make($request->image1)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('/home/u516457093/domains/p-project.shop/public_html/website/images/' . $request->image1->hashName());
            $request_data['image1'] = $request->image1->hashName();

        }//end of if
        if ($request->image2) {

            if ($about->image2 != 'default.png') {

                Storage::disk('public')->delete('/front/img/' . $about->image2);

            }//end of if

            Image::make($request->image2)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('/home/u516457093/domains/p-project.shop/public_html/website/images/' . $request->image2->hashName());
            $request_data['image2'] = $request->image2->hashName();

        }//end of if
        $about->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
