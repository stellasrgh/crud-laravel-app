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
        @if (session()->get('success'))
        <div class="alert alert-success">

            <strong>{{ session()->get('success') }}</strong>

        </div>

        @endif

        <div class="list_of_members">
            <div class="card shadow p-3 mb-5 bg-white rounded"></div>
            <div class="card-header mb-5">
                <h4 class="mb-5"style="margin-bottom: 15px"><strong>Table Product</strong></h4>
            </div>
            <div class="card body">
                <table class="table">
                  <tbody>
                    <tr>
                        <th style="width: 200px">Brand</th>
                        <td style="width: 10px">:</td>
                        <td>{{ $product->product_brand }}</td>
                    </tr>
                     <tr>
                        <th>Image</th>
                        <td>:</td>
                        <td>
                            <img src="{{ Storage::url($product->product_image) }}" alt=""
                           style="width: 150px; height:150px; object-fit: contain; object-position: center;" >
                        </td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>:</td>
                        <td>{{ $product->product_price }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>:</td>
                        <td>{{ $product->product_description }}</td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>:</td>
                        <td><div style="width:80px; height: 30px; background-color:{{ $product->product_color }}"> </div</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td>:</td>
                        <td>{{ $product->product_size }}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>:</td>
                        <td>{{ $product->product_type }}</td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td>:</td>
                        <td>{{ $product->product_stock }}</td>
                    </tr>
                  </tbody>

                </table>
            </div>
            <div class="clearfix"></div>
        </div>


    </div>


@endsection

