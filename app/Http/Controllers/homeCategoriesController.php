<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomeCategories;
use Illuminate\Http\Request;

class  homeCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.home.homepage', compact('categories'));
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
        $data = $request->validate(
            [
                'category_1' => 'required|int',
                'category_2' => 'required|int',
                'category_3' => 'required|int'
            ]
        );
        $first=HomeCategories::select()->first();
        if(!empty($first->category_1)){
            $first->delete();
        }
        homeCategories::create($data);
        return redirect('homepage');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
