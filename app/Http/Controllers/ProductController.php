<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Material;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function create()
{
    $brands = Brand::all();
    $types = Type::all();
    $materials = Material::all();
    return view('createproduct', compact('brands','types','materials'));
}


    public function allProducts()
    {
        $products = Product::all();
        $brands = Brand::all();

        return view('tumurunler', compact('products', 'brands'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
         $brands = Brand::all();
        $types = Type::all();
        $materials = Material::all();
        return view('products.edit', compact('product', 'brands', 'types', 'materials'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.allProducts')->with('success', 'Ürün başarıyla güncellendi.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_price' => 'required|numeric',
            'product_image' => 'nullable',
            'product_category' => 'nullable',
            'product_quantity' => 'nullable',
            'product_brand' => 'nullable',
            'product_color' => 'nullable',
            'product_size' => 'nullable',
            'product_material' => 'nullable',
            'product_origin' => 'nullable',
            'product_type' => 'nullable',
            'product_status' => 'nullable'
        ]);

        // Assuming 'product_brand' is the correct input name from your form
        $product = new Product($validatedData);
        $product->product_image = $request->input('product_image_url');
        $product->save();
        
        return redirect()->route('product.create')->with('success', 'Ürün başarıyla eklendi.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.allProducts')->with('success', 'Ürün başarıyla silindi.');
    }

    public function markaAll()
    {
    $brands = Brand::all();
    return view('brands.create', compact('brand'));
    }

    public function markaCreate()
    {
        return view('brands.create');
    }

    public function markaStore(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands',
        ]);

        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->save();

        return redirect()->back()->with('success', 'Marka başarıyla eklendi.');
    }

    public function TipAll()
    {
    $types = Brand::all();
    return view('types.create', compact('types'));
    }

    public function TipCreate()
    {
        return view('types.create');
    }

    public function TipStore(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:types',
        ]);

        $type = new Type();
        $type->name = $request->input('name');
        $type->save();

        return redirect()->back()->with('success', 'Marka başarıyla eklendi.');
    }

    public function materyalAll()
    {
    $materyals  = Material::all();
    return view('materials.create', compact('materials'));
    }

    public function materyalCreate()
    {
        return view('materials.create');
    }

    public function materyalStore(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:materials',
        ]);

        $materyal = new Material();
        $materyal->name = $request->input('name');
        $materyal->save();

        return redirect()->back()->with('success', 'Marka başarıyla eklendi.');
    }
}
