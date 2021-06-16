<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(25);
        return view('admin.products.index')->with(compact('products'));
    }
    public function create()
    {
        $attributes = Attribute::all();
        return view('admin.products.create')->with(compact('attributes'));
    }
    public function store(Request $request)
    {
        // Preparing all Request Data
        $data = $request->all();
        // Saving Attributes ids in variable to use later
        $attribute_ids = $data['attributes'];
        // Creating empty array for attributes details to use it later
        $attribute_names = [];

        // Inserting all provided details
        $insert = Product::create($request->all());

        // Looping on provided Attributes to create it on our main structure
        foreach($attribute_ids as $attribute_id){
            // Create Single Attribute in Database
            ProductAttribute::create([
                'product_id' => $insert->id,
                'attribute_option_id' => $attribute_id
            ]);

            // Find Attribute Details
            $attribute = AttributeOption::findOrFail($attribute_id);

            // Store the details on our empty Array that we created it before
            $attribute_names[$attribute->attribute->name][] = [
                'id' => $attribute->id,
                'name' => $attribute->name
            ];
        }
        // Now Saving the attributes JSON Format to use it easily and with High Performance
        $insert->attributes = json_encode($attribute_names);
        $insert->save();
        if($insert){
            return redirect('/products');
        }
    }
    public function viewJson(Product $product)
    {
        // Decode the json data
        $product['attributes'] = json_decode($product['attributes']);
        return $product;
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
