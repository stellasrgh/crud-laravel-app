@extends('backend.components.index')
@section('title', 'Products')
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

        <div class="list_of_members">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header mb-5">
                    <h4 class="mb-5"><strong>Input Product</strong></h4>
                </div>
                <div class="card-body">
                    <form action="/product/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div style="margin: 20px 0;">
                            <label for="product_brand" style="margin-bottom: 5px">Brand</label>
                            <input type="text" name="product_brand" id="product_brand" class="form-control"
                                placeholder="Input Brand" value="{{ old('product_brand') }}">
                        </div>

                        <div style="margin: 20px 0;">
                            <label for="product_image" style="margin-bottom: 5px">Image</label>
                            <input type="file" name="product_image" id="email" class="form-control"
                                placeholder="Input Image">

                        </div>

                        <div style="margin: 20px 0;">
                            <label for="product_price" style="margin-bottom: 5px">Price</label>
                            <input type="number" name="product_price" id="product_price" class="form-control"
                                placeholder="Input Price" value="{{ old('product_price') }}">

                        </div>

                        <div style="margin: 20px 0;">
                            <label for="product_description" style="margin-bottom: 5px">Description</label>
                            <textarea rows="5" name="product_description" id="product_description" class="form-control"
                                placeholder="Input Description">{{ old('product_description') }}</textarea>

                        </div>
                        <div style="margin: 20px 0;">
                            <label for="product_color" style="margin-bottom: 5px">Color</label>
                            <input type="color" name="product_color" id="product_color" class="form-control" style="width: 80px"
                                placeholder="Input Color" value="{{ old('product_color') }}">
                        </div>
                         </div>
                        <div style="margin: 20px 0;">
                            <label for="product_size" style="margin-bottom: 5px">Size</label>
                            <input type="number" name="product_size" id="product_color" class="form-control"
                                placeholder="Input Size" value="{{ old('product_size') }}">
                        </div>

  </div>
                        <div style="margin: 20px 0;">
                            <label for="product_type" style="margin-bottom: 5px">Type</label>
                            <Select id="product_type" name="product_type" class="form-control">
                                <option value="">Select Type</option>
                                <option value="Laki-laki" @selected('Laki-laki' == old('product_type')) >Laki-laki</option>
                                <option value="Perempuan" @selected('Perempuan' == old('product_type'))>Perempuan</option>
                                <option value="Anak Laki-laki" @selected('Anak Laki-laki' == old('product_type'))>Anak Laki-laki</option>
                                <option value="Anak Perempuan" @selected('Anak Perempuan' == old('product_type'))>Anak perempuan</option>
                                <option value="Umum" @selected('Umum' == old('product_type'))>Umum</option>

                            </Select>
                        </div>
                         </div>
                        <div style="margin: 20px 0;">
                            <label for="product_stock" style="margin-bottom: 5px">Stock</label>
                            <input type="number" name="product_stock" id="product_color" class="form-control"
                                placeholder="Input Stock" value="{{ old('product_stock') }}">
                        </div>


                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <div class="card body">

        </div>
        <div class="clearfix"></div>
    </div>


    </div>


@endsection
