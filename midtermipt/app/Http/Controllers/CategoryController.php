<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories  = Category::all();
        return view ('categories.index', compact('categories'));
    }

    public function create()
    {
        return view ('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'cat_name'=> 'required',
        'cat_color'=> 'required'
        ]);

        category::create($request->all());
        return redirect()->route('categories.index')->with('success','Category added successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('categories.edit', compact('category'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $category = Category::findOrFail($id);

    // Validation (optional but recommended)
    $request->validate([
        'cat_name' => 'required|string|max:255',
        'cat_color' => 'required|string',
    ]);

    $category->cat_name = $request->cat_name;
    $category->cat_color = $request->cat_color;
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $category = Category::findOrFail($id);
    $category->delete();

    return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
}
}
