<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexFrontend()

    {
        $user_id = Auth::id();

        $where = [

            'user_id' => $user_id,
            'invoice' => Null,
        ];

        $carts = Cart::where($where)->get();
        $cartTotal = Cart::where($where)->sum('sub_total');
        return view("frontend.cart", compact('carts', 'cartTotal'));
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
        $request->validate(
            [
                'product_id' => 'required|numeric',
            ]
        );

        $user_id = Auth::id();
        $product_id = $request->product_id;
        $where = [
            'product_id' => $product_id,
            'user_id' => $user_id,
            'invoice' => Null,
        ];

        // dipanggil Cart nya
        $cart = Cart::where($where)->first();
        if ($cart) {
            $cart->qty       = $cart->qty + 1;
            $cart->sub_total = $cart->qty * $cart->product->product_price;
            $cart->save();
        } else {
            $product = Product::find($product_id);
            $cart = Cart::create([
                'user_id'       => $user_id,
                'product_id'    => $product_id,
                'qty'           => 1,
                'sub_total'      => $product->product_price,
            ]);
        }
        return response()->json($cart, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function min(Cart $cart)
    {
        $cart->qty = $cart->qty - 1;
        $cart->sub_total = $cart->product->product_price * $cart->qty;
        $cart->save();
        if ($cart){
            return back()->withSuccess("Item minus successfully");
        }else{
            return back()->withError("Failed to minus item");
        }
        }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        if ($cart) {
            return back()->withSuccess("Item deleted successfully");
        } else {
            return back()->withError("Failed to delete item");
        }
    }
    public function plus(Cart $cart)
    {
        $cart->qty = $cart->qty + 1;
        $cart->sub_total = $cart->product->product_price * $cart->qty;
        $cart->save();
        if ($cart) {
            return back()->withSuccess("Item added successfully");
        } else {
            return back()->withError("Failed to add item");
        }
    }
}
