<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            background-color: #f7f7f7;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .invoice-header h2 {
            font-weight: bold;
            margin-bottom: 0;
        }

        .invoice-body {
            padding: 20px;
        }
        .invoice-body table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-body table th,
        .invoice-body table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .invoice-body table th {
            background-color: #f7f7f7;
        }

        .invoice-footer {
            background-color: #f7f7f7;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .invoice-footer p {
            margin-bottom: 0;
        }

        .progress {
            height: 20px;
            margin-bottom: 20px;
        }

        .progress-bar {
            font-size: 12px;
            line-height: 20px;
        }
    </style>
</head>

<body>
    <div class="invoice w-75">
        <div class="invoice-header">
            <div class="w-100 d-flex mb-5">
                <img src="{{ asset('logo_sayap-removebg-preview.png') }}" alt=""
                    class="img-fluid rounded mx-auto"
                    style="width: 250px; height:250px; object-fit:cover; object-position: center;">
            </div>
            <div class="row">
                <div class="col-8">
                    <h2 class="mb-2">{{ $invoice->user->name }}</h2>
                    <h6> {{ $invoice->invoice }}</h6>
                    <p>Date: {{ $invoice->created_at->format('F, d Y') }} </p>
                    <p>{{ $invoice->user->address }}</p>
                </div>
                <div class="col-4">
                    <span class="font-weight-bold">A.N. {{ \App\Models\User::first()->name }} (BRI) </span>
                    <p>0020-01-012345-6789</p>
                    <span class="font-weight-bold">A.N. {{ \App\Models\User::first()->name }} (BCA) </span>
                    <p>022111111</p>
                </div>
            </div>
        </div>
        <div class="invoice-body">
            <h3>Informasi Pembayaran</h3>
            <table class="table ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
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
        <div class="invoice-footer">

            @php
                $color = '';
                $progress = '0';
                if ($invoice->status == 'Ordered') {
                    $color = 'bg-primary';
                    $progress = '25%';
                }
                if ($invoice->status == 'Confirmation') {
                    $color = 'bg-info';
                    $progress = '50%';
                }
                if ($invoice->status == 'Delivered') {
                    $color = 'bg-warning';
                    $progress = '75%';
                }
                if ($invoice->status == 'Finished') {
                    $color = 'bg-success';
                    $progress = '100%';
                }
            @endphp
            <div class="progress">
                <div class="progress-bar {{ $color }}" role="progressbar" style="width: {{ $progress }}"
                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">{{ $invoice->status }}</div>
            </div>
            <div class="tracking-timeline">
                <ul>
                    <li>
                        <span>Order Placed</span>
                        <span class="badge badge-primary">New</span>
                    </li>
                    <li>
                        <span>Order Processed</span>
                        <span class="badge badge-info">Confirmation</span>
                    </li>
                    <li>
                        <span>Delivered</span>
                        <span class="badge badge-warning">Delivered</span>
                    </li>
                    <li>
                        <span>Finished</span>
                        <span class="badge badge-success">Finished</span>
                    </li>
                </ul>
            </div>
            <p>Terima kasih telah berbelanja di toko kami!</p>
        </div>
    </div>
</body>

</html>
