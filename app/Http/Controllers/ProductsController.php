<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $data['products'] = Product::get();
        return view('products', $data);
    }

    public function addProduct()
    {
        return view('addProducts');
    }

    public function storeProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;
        if (!empty($request->image)) {
            $img = 'product' . Str::random(12) . '.' . $request->image->getClientOriginalExtension();
            $location = public_path('images/product/');
            $request->image->move($location, $img);
            $product->image = $img;
        }
        $product->save();
        return redirect('/products');
    }

    public function editProduct($id)
    {
        $data['product'] = Product::find($id);
        return view('editProducts', $data);
    }

    public function updateProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->description = $request->description;
        if (!empty($request->image)) {
            $img = 'product' . Str::random(12) . '.' . $request->image->getClientOriginalExtension();
            $location = public_path('images/product/');
            $request->image->move($location, $img);
            $product->image = $img;
        }
        $product->save();
        return redirect('/products');
    }

    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        return back();      
    }
}
