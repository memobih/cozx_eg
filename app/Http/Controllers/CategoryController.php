<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategory;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategory $request)
    {

      $category= Category::create($request->validated());
        toastr()->success('successful' ,'added');
        return  redirect('Category/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::find($id);
        return view('admin.categories.edit' , compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCategory $request, string $id)
    {
        $category=Category::find($id);
        $category->update($request->validated());
        return redirect('Category');
    }

    /*
     * Remove the specified resource from storage.
     *
     */
    public function destroy(string $id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect('Category');
    }
    public function forceDelete(string $id) {
        $category=Category::find($id);
        $category->forcedDelete();
        return redirect('Category');
    }
}
