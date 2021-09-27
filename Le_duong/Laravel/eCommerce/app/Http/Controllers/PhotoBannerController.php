<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoBanners;

class PhotoBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = PhotoBanners::all();
        return view('pages.manageBanner.banner_index',['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.manageBanner.banner_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->file('banner')->getClientOriginalName();
        $size = $request->file('banner')->getSize();
        $type = $request->file('banner')->getMimeType();
        $banners = new PhotoBanners();
        $banners->name = $name;
        $banners->size = $size;
        $banners->type = $type;
        try
        {
            $banners->save();
            $request->file('banner')->storeAs('public/images/banner',$name);
            $success = 'Post banner success';
            return redirect()->route('banner.index')
                ->with('success',$success);
        }
        catch (\Exception $e)
        {
            \Log::error($e);
            $error = 'Post banner fail';
        }
        return redirect()->route('banner.index')
            ->with('error',$error);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = PhotoBanners::findOrFail($id);
        return view('pages.manageBanner.banner_edit')
            ->with('banner',$banner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $banner = PhotoBanners::findOrFail($id);
        try
        {
            $success = 'Update banner success';
            $nameNew = $request->file('banner')->getClientOriginalName();
            $sizeNew = $request->file('banner')->getSize();
            $typeNew = $request->file('banner')->getMimeType();
            $request->file('banner')->storeAs('public/images/banner',$nameNew);
            $banner->name = $nameNew;
            $banner->size = $sizeNew;
            $banner->type = $typeNew;
            $banner->save();
            return redirect()->route('banner.index')
                ->with('success',$success);

        }
        catch (\Exception $e)
        {
            \Log::error($e);
            $fail = 'Update banner fail';
        }
        return redirect()->route('banner.index')
            ->with('error',$fail);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = PhotoBanners::findOrFail($id);
        try
        {
            $banner->delete();
            Storage::delete('public/images/banner/'.$banner->name);
            $success = 'Delete banner success';
            return redirect()->route('banner.index')
                ->with('success',$success);
        }
        catch (\Exception $e)
        {
            \Log::error($e);
            $error = 'Delete banner fail';
        }
        return redirect()->route('banner.index')
            ->with('error',$error);
    }
}
