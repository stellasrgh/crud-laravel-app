@extends('backend.components.index')
@section('title', 'Users')
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
                <h4 class="mb-5"style="margin-bottom: 15px"><strong>Table Users</strong></h4>
                <a href="/user/create" class="btn btn-primary">+ Tambah Data</a>
            </div>
            <div class="card body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Role</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td>{{  $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->role ? 'Admin' : 'Pembeli' }}</td>
                            <td>{{ $item->address }}</td>
                            <td>
                                <a href="/user/show/{{ $item->id }}" class="btn btn-success w-100 my-2">Show</a>
                                <a href="/user/edit/{{ $item->id }}" class="btn btn-warning w-100 my-2">Edit</a>
                                <a href="/user/destroy/{{ $item->id }}" onclick="return confirm('Apakah anda ngin Menghapus Data ini?')" class="btn btn-danger w-100 my-2">Delete</a>

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
