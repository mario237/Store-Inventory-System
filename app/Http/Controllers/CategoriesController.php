<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class CategoriesController extends Controller
{
    public function index()
    {
        //
        $categories = Category::orderby('created_at' , 'DESC')->get();

        return view('categories.index' , compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request): RedirectResponse
    {

        Category::create([
            'name' => $request->name
        ]);

        toastr()->success('Category is created successfully!' , '', ['timeOut' => 1500]);


        return redirect()->route('brands.index');

    }



    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit' , compact('category'));
    }

    public function update(CategoryRequest $request, $id): RedirectResponse
    {

        Category::where('id', $id)
            ->update(['name' => $request->name]);


        toastr()->success('Category is updated successfully!' , '', ['timeOut' => 1500]);

        return redirect()->route('categories.index');
    }

    public function destroy($id): RedirectResponse
    {
        Category::findOrFail($id)->delete();
        toastr()->success('Category is deleted successfully!' , '', ['timeOut' => 1500]);

        return redirect()->route('categories.index');
    }
}
