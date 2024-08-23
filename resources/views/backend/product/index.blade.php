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
                <a href="/product/create" class="btn btn-primary">+ Tambah Data</a>
            </div>
            <div class="card body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Ukuran</th>
                            <th>Warna</th>
                            <th>Jenis</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $item)
                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{ $item->product_brand }}</td>
                            <td><img src="{{ Storage::url($item->product_image) }}" alt="" style="width: 150px; height:150px; object-fit: contain; object-position: center;" ></td>
                            <td>{{ $item->product_price }}</td>
                            <td>{{ $item->product_size}} .cm<sup>2</sup></td>
                            <td><div style="width:80px; height: 30px; background-color:{{ $item->product_color }}"> </div></td>
                            <td>{{ $item->product_type }}</td>
                            <td>{{ $item->product_stock }}</td>
                            <td>
                                <a href="/product/show/{{ $item->id }}" class="btn btn-success w-100 my-2">Show</a>
                                <a href="/product/edit/{{ $item->id }}" class="btn btn-warning w-100 my-2">Edit</a>
                                <a href="/product/destroy/{{ $item->id }}" onclick="return confirm('Apakah anda ngin Menghapus Data ini?')" class="btn btn-danger w-100 my-2">Delete</a>

                            </td>
                        </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="clearfix"></div>
        </div>


    </div>


@endsection
