<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('pages.manageCategory.categories_index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.manageCategory.categories_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $title = $request->title;
        $categories = new Categories();
        $categories->name = $name;
        $categories->title = $title;

        try
        {
            $categories->save();
            $success = 'Post category success';
            return redirect()->route('categories.create')
                ->with('success',$success);
        }
        catch (\Exception $e)
        {
            \Log::error($e);
            $error = 'Post category fail';
        }
        return redirect()->route('categories.create')
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
          $categories = Categories::all();
          $products = Products::where('category',$id)
              ->orderBy('price','DESC')
              ->get();
            return view('pages.shops',[
                'products' => $products,
                'categories' => $categories
              ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::findOrFail($id);
        return view('pages.manageCategory.categories_edit')
            ->with('category',$category);
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
        $category = Categories::findOrFail($id);
        try
        {
            $success = 'Update category success';
            $nameNew = $request->input('name');
            $titleNew = $request->input('title');
            $category->name = $nameNew;
            $category->title = $titleNew;
            $category->save();
            return redirect()->route('categories.index')
                ->with('success',$success);

        }
        catch (\Exception $e)
        {
            \Log::error($e);
            $fail = 'Update category fail';
        }
        return redirect()->route('categories.index')
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
        $category = Categories::findOrFail($id);
        try
        {
            $category->delete();

            $success = 'Delete category success';
            return redirect()->route('categories.index')
                ->with('success',$success);
        }
        catch (\Exception $e)
        {
            \Log::error($e);
            $error = 'Delete category fail';
        }
        return redirect()->route('categories.index')
            ->with('error',$error);
    }
}
