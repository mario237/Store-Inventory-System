<?php

namespace App\Http\Controllers;

use App\Http\Requests\SizeRequest;
use App\Models\Size;
use Illuminate\Http\RedirectResponse;

class SizesController extends Controller
{
    public function index()
    {
        $sizes= Size::orderby('created_at' , 'DESC')->get();

        return view('sizes.index' , compact('sizes'));
    }

    public function create()
    {
        return view('sizes.create');
    }

    public function store(SizeRequest $request): RedirectResponse
    {
        Size::create([
            'size' => $request->size
        ]);

        toastr()->success('Size is created successfully!' , '', ['timeOut' => 1500]);


        return redirect()->route('sizes.index');
    }


    public function edit($id)
    {
        $size = Size::findOrFail($id);
        return view('sizes.edit' , compact('size'));
    }

    public function update(SizeRequest $request, $id): RedirectResponse
    {
        Size::where('id', $id)
            ->update(['size' => $request->size]);


        toastr()->success('Size is updated successfully!' , '', ['timeOut' => 1500]);

        return redirect()->route('sizes.index');
    }

    public function destroy($id): RedirectResponse
    {
        Size::findOrFail($id)->delete();
        toastr()->success('Size is deleted successfully!' , '', ['timeOut' => 1500]);

        return redirect()->route('sizes.index');
    }
}
