<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:15',
            'description'=>'required|min:2',
        ]);
        $categories = new Category();
        $categories->name=$request->input('name');
        $categories->description=$request->input('description');
        $categories->save();
        return $categories;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=Category::find($id);
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3|max:15',
            'description'=>'required|min:2',
        ]);
        $categories = Category::find($id);
        $categories->name=$request->input('name');
        $categories->description=$request->input('description');
        $categories->save();
        return $categories;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return ['Categoria Eliminada'];
    }
}
