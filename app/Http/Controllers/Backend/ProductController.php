<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('backend.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_brand' => 'required|string|max:255',
            'product_image' => 'required|mimes: jpeg,jpg,png|max:10000',
            'product_price' => 'required|numeric',
            'product_description' => 'required||string',
            'product_color' => 'required|string',
            'product_size' => 'required|numeric',
            'product_type'   => 'required|string',
            'product_stock' => 'required|numeric',
        ]);

        $data = $request->all();

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $data['product_image'] = Storage::putFile('public/product_image', $image);
        }

        $product = Product::create($data);

        if ($product) {
            return redirect()->to('/product')->withSuccess('Data Ditambahkan');
        } else {
            return back()->withInput()->withErrors('Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('backend.product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_brand' => 'required|string|max:255',
            'product_image' => 'nullable|mimes: jpeg,jpg,png|max:10000',
            'product_price' => 'required|numeric',
            'product_description' => 'required||string',
            'product_color' => 'required|string',
            'product_size' => 'required|numeric',
            'product_type'   => 'required|string',
            'product_stock' => 'required|numeric',
        ]);

        $data = $request->all();
        unset($data['product-image']);

        if ($request->hasFile('product_image')) {
            if($product->product_image && Storage::get($product->product_image)){
                Storage::delete($product->product_image);

            }
            $image = $request->file('product_image');
            $data['product_image'] = Storage::putFile('public/product_image', $image);
        }

        $product->update($data);

        if ($product) {
            return redirect()->to('/product')->withSuccess('Data Diubah');
        } else {
            return back()->withInput()->withErrors('Data Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->product_image && Storage::get($product->product_image)) {
            Storage::delete($product->product_image);
        }

        $product->delete();

        if ($product) {
            return redirect()->to('/product')->withSuccess('Data Dihapus');
        } else {
            return back()->withInput()->withErrors('Data Gagal Dihapus');
        }



    }
}
