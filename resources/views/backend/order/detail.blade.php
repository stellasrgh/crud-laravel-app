@extends('backend.components.index')
@section('title', 'Order')
@section('content')
    <div class="col-md-9 content">
        @include('backend.components.navbar')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin-left: 20px">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->get('success'))
            <div class="alert alert-success">

                <strong>{{ session()->get('success') }}</strong>

            </div>
        @endif

        <div class="list_of_members">
            <div class="card shadow p-3 mb-5 bg-white rounded"></div>
            <div class="card-header mb-5">
                <h4 class="mb-5"style="margin-bottom: 15px"><strong>Table Order</strong></h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="width: 200px">Username</th>
                            <td style="width: 10px">:</td>
                            <td>{{ $invoice->user->name }}</td>
                        </tr>

                        <tr>
                            <th>Order Status</th>
                            <td>:</td>
                            <td>{{ $invoice->status }}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>:</td>
                            <td>{{ $invoice->created_at->format('F, d Y') }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>:</td>
                            <td>{{ $invoice->user->address }} </div< /td>
                        </tr>

                    </tbody>

                </table>
            </div>
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center" style="width: 50px">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($invoice->cart as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->product->product_brand }}</td>
                                <td>{{ $item->qty }}</td>
                                <td class="text-right">@rupiah($item->product->product_price)</td>
                                <td class="text-right">@rupiah($item->sub_total)</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    No Item in Cart</td>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Subtotal</td>
                            <td class="text-right">@rupiah($invoice->total_price)
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Shipping Fee</td>
                            <td class="text-right">@rupiah(100000)</td>
                        </tr>
                        <tr>
                            <td colspan="4">Total</td>
                            <td class="text-right">@rupiah($invoice->total_price + 100000)</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="card-body">
                <div class="my-3">
                    <form action="
                    /ordering/update/{{ $invoice->id }}" method="post">
                    @csrf
                    <select name="status" id="status" class="form-control" onchange="this.form.submit()">
                        <option value="">Select Order Status</option>
                        <option value="Ordered"@selected("Ordered" == $invoice->status)>Ordered</option>
                        <option value="Confirmation" @selected("Confirmation" == $invoice->status)>Confirmation</option>
                        <option value="Delivered" @selected("Delivered" == $invoice->status)>Delivered</option>
                        <option value="Finished" @selected("Finished" == $invoice->status)>Finished</option>
                    </select>

                </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>


    </div>


@endsection
