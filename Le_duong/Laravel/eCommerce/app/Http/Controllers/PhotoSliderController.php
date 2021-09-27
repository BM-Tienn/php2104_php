<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoSliders;

class PhotoSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = PhotoSliders::all();
        return view('pages.manageSlider.slider_index',['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.manageSlider.slider_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $size = $request->file('slider')->getSize();
        $type = $request->file('slider')->getMimeType();
        $nameImg = $request->file('slider')->getClientOriginalName();
        $request->file('slider')->storeAs('public/images/slider',$nameImg);
        $slider = new PhotoSliders();
        $slider->name = $nameImg;
        $slider->title = $title;
        $slider->description = $description;
        $slider->size = $size;
        $slider->type = $type;
        try
        {
            $success = 'Add slider success';
            $slider->save();
            return back()->with('success',$success);
        }
        catch (\Exception $e)
        {
         \Log::error($e);
         $error = 'Add slider fail';
        }
        return back()->with('error',$error);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = PhotoSliders::findOrFail($id);
        return view('pages.manageSlider.slider_edit',[
            'slider' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = PhotoSliders::findOrFail($id);
        $titleOld = $slider->title;
        $descriptionOld = $slider->description;
        $titleNew = $request->title;
        $descriptionNew = $request->description;

        /*Case 1:Update photo slider - Not update title,description*/
        if($titleNew == null && $descriptionNew == null)
        {
            $sizeNew = $request->file('slider')->getSize();
            $typeNew = $request->file('slider')->getMimeType();
            $imageNew = $request->file('slider')->getClientOriginalName();
            $request->file('slider')->storeAs('public/images/slider',$imageNew);
            $titleNew = $titleOld;
            $descriptionNew = $descriptionOld;
            try
            {
                $msgSuccess = 'Update slider success';
                $slider->title = $titleNew;
                $slider->description = $descriptionNew;
                $slider->name = $imageNew;
                $slider->size = $sizeNew;
                $slider->type = $typeNew;
                $slider->save();
                return redirect()
                    ->route('slider.index')
                    ->with('success',$msgSuccess);
            } catch (\Exception $e)
            {
                \Log::error($e);
            }
            $msgFail = 'Update slider fail';
            return redirect()
                ->route('slider.index')
                ->with('error',$msgFail);
        };
        /*Case 2:Update title,description - Dont update photo*/
        if($request->file('slider') == null)
        {
           try
           {
               $msgSuccess = 'Update slider success';
               $slider->title = $titleNew;
               $slider->description = $descriptionNew;
               $slider->save();
               return redirect()
                   ->route('slider.index')
                   ->with('success',$msgSuccess);
           }
           catch (\Exception $e)
           {
               \Log::error($e);
           }
            $msgFail = 'Update slider fail';
            return redirect()
                ->route('slider.index')
                ->with('error',$msgFail);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = PhotoSliders::findOrFail($id);
        try
        {
            $slider->delete();
            Storage::delete('public/images/slider/'.$slider->name);
            $success = 'Delete slider success';
            return redirect()->route('slider.index')
                ->with('success',$success);
        }
        catch (\Exception $e)
        {
            \Log::error($e);
            $error = 'Delete slider fail';
        }
        return redirect()->route('slider.index')
            ->with('error',$error);
    }
}
