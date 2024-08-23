@extends('backend.components.index')
@section('title', 'orders')
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
                <h4 class="mb-5"style="margin-bottom: 15px"><strong>Table order</strong></h4>
            </div>
            <div class="card body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Order Status</th>
                            <th>Date</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->created_at->format('F, d Y') }}</td>
                                <td>
                                    <a href="/ordering/show/{{ $item->id }}" class="btn btn-success w-100 my-2">Show</a>
                                    <a href="/ordering/destroy/{{ $item->id }}"
                                        onclick="return confirm('Apakah anda ngin Menghapus Data ini?')"
                                        class="btn btn-danger w-100 my-2">Delete</a>

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
