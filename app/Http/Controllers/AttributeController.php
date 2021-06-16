<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\AttributeOption;
use Illuminate\Http\Request;

class AttributeController extends Controller
{

    public function index()
    {
        $attributes = Attribute::paginate(25);
        return view('admin.attributes.index')->with(compact('attributes'));
    }
    public function create()
    {
        return view('admin.attributes.create');
    }
    public function store(Request $request)
    {
        $insert = Attribute::create($request->all());
        if ($insert) {
            return redirect('/attributes');
        }
    }
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        return redirect()->back();
    }
}
