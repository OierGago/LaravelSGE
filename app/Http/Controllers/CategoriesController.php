<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index',['categories' => $categories]);
    }
    /**
     * Display the specified resource.
     */
    public function show(categories $category)
    {
        return view('categories.show',['category'=>$category]);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new categories();
        $category->nombreCategoria = $request->nombreCategoria;
        $category->save();
        return redirect()->route('categories.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $category)
    {
        return view('categories.edit',['category'=>$category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categories $category)
    {
       $category->nombreCategoria =  $request->nombreCategoria;
       $category->save();
       return view('categories.show',['category'=>$category]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
