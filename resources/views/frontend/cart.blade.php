<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.components.head')

</head>

<body>

    <!-- mian-content -->
    <div class="main-banner inner" id="home">
        <!-- header -->
        @include('frontend.components.header')

        <!-- //header -->

    </div>
    <!--//main-content-->
    <!---->
    @php
        $currentPage = "Cart"
    @endphp
    @include('frontend.components.breadcrumb')
    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Sub Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($carts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->product->product_brand }}</td>
                                    <td>
                                        @if ($item->qty > 1)
                                            <a href="/cart-min/{{ $item->id }}" class="btn btn-danger mr-2"
                                                style="width: 40px; height:40px;">-</a>
                                        @else
                                            <a href="javascript:void(0)" class="btn btn-secondary mr-2"
                                                style="width: 40px; height:40px;">-</a>
                                        @endif
                                        {{ $item->qty }}
                                        <a href="/cart-plus/{{ $item->id }}" class="btn btn-primary ml-2"
                                            style="width: 40px; height:40px;">+</a>
                                    </td>
                                    <td>@rupiah($item->product->product_price)</td>
                                    <td>@rupiah($item->sub_total)</td>
                                    <td>
                                        <a href="/cart-delete/{{ $item->id }}" class="btn btn-outline-danger"
                                            style="width: 40px; height:40px">x</a>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Item Chosen</td>
                                </tr>
                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" class="text-center">
                                    Total

                                </th>
                                <th colspan="2">@rupiah($cartTotal)</th>
                            </tr>
                        </tfoot>
                    </table>
                    <button class="btn btn-success mt-5 w-100" onclick="onCheckout({{ $cartTotal }})">Check Out</button>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- footer -->
    @include('frontend.components.footer')
    <!-- //footer -->
    @include('frontend.components.scripts')

</body>

</html>
