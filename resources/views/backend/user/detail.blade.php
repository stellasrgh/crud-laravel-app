@extends('backend.components.index')
@section('title', 'Users')
@section('content')
    <div class="col-md-9 content">
        @include('backend.components.navbar')

        <div class="list_of_members">
            <div class="card shadow p-3 mb-5 bg-white rounded"></div>
            <div class="card-header mb-5">
                <h4 class="mb-5"><strong>Detail Users</strong></h4>

            </div>
            <div class="card body">
                <table class="table">
                  <tbody>
                    <tr>
                        <th style="width: 200px">Name</th>
                        <td style="width: 10px">:</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>:</td>
                        <td>{{ $user->role ? 'Admin' : 'Pelanggan' }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td>{{ $user->address }}</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                        <th colspan="3" >
                            <a href="{{ url()->previous() }}" class="btn btn-info" style="margin-top: 30px">
                                Back
                            </a>
                        </th>
                    </tr>
                  </tfoot>

                </table>
            </div>
            <div class="clearfix"></div>
        </div>


    </div>


@endsection

