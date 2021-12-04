<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class BrandsController extends Controller
{
    public function index()
    {

        $brands = Brand::orderby('created_at' , 'DESC')->get();

        return view('brands.index' , compact('brands'));
    }


    public function create()
    {
        return view('brands.create');
    }

    public function store(BrandRequest $request): RedirectResponse
    {
        Brand::create([
            'name' => $request->name
        ]);

        toastr()->success('Brand is created successfully!' , '', ['timeOut' => 1500]);


        return redirect()->route('brands.index');
    }



    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.edit' , compact('brand'));
    }

    public function update(BrandRequest $request, $id): RedirectResponse
    {

        Brand::where('id', $id)
            ->update(['name' => $request->name]);


        toastr()->success('Brand is updated successfully!' , '', ['timeOut' => 1500]);

        return redirect()->route('brands.index');
    }

    public function destroy($id): RedirectResponse
    {
        Brand::findOrFail($id)->delete();
        toastr()->success('Brand is deleted successfully!' , '', ['timeOut' => 1500]);

        return redirect()->route('brands.index');
    }

    //HANDLE AJAX REQUEST
    public function getBrandsJson(): JsonResponse
    {
        $brands = Brand::all();

        return response()->json([
            'success' => true,
            'data' => $brands
        ], ResponseAlias::HTTP_OK);
    }
}
