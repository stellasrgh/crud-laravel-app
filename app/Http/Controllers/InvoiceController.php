<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexFrontend($invoiceCode)
    {
        $invoice = Invoice::where('invoice', $invoiceCode)->first();

        return view("frontend.invoice", compact('invoice'));
    }
    public function indexBackend()
    {
        $invoices = Invoice::latest()->get();

        return view("backend.order.index", compact('invoices'));
    }
   public function history()
    {
        $invoices = Invoice::where('user_id', Auth::id())->latest()->get();
        return view("frontend.history", compact('invoices'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $invoiceCode = 'INV-' . date('m-Y-d-His') . '007-' . Str::random(5);
        $invoice = Invoice::create([
            'user_id' => $user_id,
            'invoice' => $invoiceCode,
            'total_price'   => $request->total,
        ]);

        if ($invoice) {
            $where = [

                'user_id' => $user_id,
                'invoice' => Null,
            ];

            Cart::where($where)->update(['invoice' => $invoiceCode]);
            return response()->json([
                'data' => '/invoice/' . $invoiceCode,
                'success' => true,
            ], 201);
        } else {
            return response()->json([
                'data' => 'Failed to create invoice',
                'success' => false
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function showBackend(Invoice $invoice)
    {
        return view('backend.order.detail', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request, Invoice $invoice)
    {
        $invoice->status = $request->status;
        $invoice->save();

        if($invoice){
            return back()->withSuccess('Status updated Successfully');
        }else{
            return back()->withErrors('Status updated Unsuccessfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyBackend(Invoice $invoice)
    {
        $invoice->delete();

        if($invoice){
            return back()->withSuccess('Item Deleted Successfully');
        }else{
        return back()->withErrors('Item Deleted Unsuccessfully');
         }
    }
}
