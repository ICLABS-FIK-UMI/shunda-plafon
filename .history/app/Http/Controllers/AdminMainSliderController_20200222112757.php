<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Model\MainSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMainSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainSlider = MainSLider::all();
        return view('admin.main-slider',compact('mainSlider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('image');
        MainSlider::create([
            'caption'=>$request->caption,
            'url'=>$path->getClientOriginalName(),
            'slug'=>\Str::slug($request->caption).'-'.\Str::random(10),
        ]);
        $path->move('mainslider',$path->getClientOriginalName());
        return redirect()->route('admin.mainslider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function show(MainSlider $mainSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(MainSlider $mainSlider)
    {
        return view('admin.edit-main-slider',compact('mainSlider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function update(MainSlider $mainSlider)
    {
        if(Auth::user()->id_role !== 1){
            return redirect()->route('admin');
        }

        $attr = request()->validate([
            'caption'=>'required',
        ]);
        $attr['slug']=\Str::Slug(request()->caption).'-'.\str::random(10);

        $mainSlider->update($attr);
        // dd($mainSlider);
        return redirect()->route('admin.mainslider');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug){
        MainSlider::whereSlug($slug)->delete();
        return back();
    }
}
