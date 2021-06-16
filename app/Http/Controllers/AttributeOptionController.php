<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\AttributeOption;
use Illuminate\Http\Request;

class AttributeOptionController extends Controller
{

    public function index()
    {
        $attributeOptions = AttributeOption::paginate(25);
        return view('admin.attributes.options.index')->with(compact('attributeOptions'));
    }
    public function create()
    {
        $attributes = Attribute::all();
        return view('admin.attributes.options.create')->with(compact('attributes'));
    }
    public function store(Request $request)
    {
        $insert = AttributeOption::create($request->all());
        if ($insert) {
            return redirect('/attributes-options');
        }
    }
    public function destroy(AttributeOption $attributeOption)
    {
        $attributeOption->delete();
        return redirect()->back();
    }
}
