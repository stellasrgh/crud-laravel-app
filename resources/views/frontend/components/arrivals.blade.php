<section class="about py-5" id="item">
    <div class="container pb-lg-3">
        <h3 class="tittle text-center">New Arrivals</h3>
        <div class="row">

            @forelse ($products as $item)
                <div class="col-md-4 product-men my-lg-4">
                    <div class="product-shoe-info shoe text-center">
                        <div class="men-thumb-item">
                            <img src="{{ Storage::url($item->product_image) }}" class="img-fluid" alt=""
                                style="width: 300px; height:300px; object-fit:cover; object-position:center; margin-bottom:10px;  ">
                            <h4>
                                {{ $item->product_brand }}
                            </h4>
                        </div>
                        <div class="item-info-product">


                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money">@rupiah($item->product_price)</span>
                                </div>
                            </div>
                            {{-- <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a>
                                </li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul> --}}
                            <p class="stars">
                                {{ Str::limit($item->product_description, 50) }}

                            </p>
                            <button class="btn btn-secondary mt-2" onclick="onOrder({{ $item->id }})">Buy</button>

                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 product-men my-lg-4">
                    <div class="product-shoe-info shoe text-center">
                        <h3>Belum ada Tas yang Dijual</h3>
                    </div>
                </div>
            @endforelse

        </div>

    </div>
</section>
