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
        $currentPage = 'History';
    @endphp
    @include('frontend.components.breadcrumb')
    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-5 text-center">History</h1>
                    <div class="list-group">
                        @forelse ($invoices as $item)
                            <a href="/invoice/{{ $item->invoice }}"
                                class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $item->invoice }}</h5>
                                    <small>{{ $item->created_at->format('F, d Y') }}</small>
                                </div>
                                <p class="mb-1">{{ $item->status }}</p>
                                <small>@rupiah($item->total_price)</small>
                            </a>
                        @empty
                        @endforelse

                    </div>
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
