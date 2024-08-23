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

        <div class="list_of_members">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header mb-5">
                    <h4 class="mb-5"><strong>Input User</strong></h4>
                </div>
                <div class="card-body">
                    <form action="/user/store" method="post">
                        @csrf
                        <div style="margin: 20px 0;">
                            <label for="name" style="margin-bottom: 5px">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Input Name" value="{{ old ('name') }}">
                        </div>

                        <div style="margin: 20px 0;">
                            <label for="email" style="margin-bottom: 5px">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Input Email" value="{{ old ('email') }}">

                        </div>

                        <div style="margin: 20px 0;">
                            <label for="password" style="margin-bottom: 5px">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Input Password">

                        </div>
                        <div style="margin: 20px 0;">
                            <label style="margin-bottom: 5px">Role</label>
                            <div>
                                <label for="role1" class="radio-inline"></label>
                                <input type="radio" name="role" id="role1" value="1" @checked(old('role') == '1')>
                                Admin
                            </div>
                            <div>
                                <label for="role2" class="radio-inline"></label>
                                <input type="radio" name="role" id="role2" value="0" @checked(old('role') == '0')>
                                Pelanggan
                            </div>
                        </div>
                        <div style="margin: 20px 0;">
                            <label for="address" style="margin-bottom: 5px">Address</label>
                            <textarea rows="5" name="address" id="address" class="form-control" placeholder="Input Address">{{ old('address') }}</textarea>

                        </div>
                        <div style="margin: 20px 0;">
                            <label style="margin-bottom: 5px">Gender</label>
                            <div>
                                <label for="gender1" class="radio-inline"></label>
                                <input type="radio" name="role" id="gender1" value="Laki-laki" @checked(old('gender') == 'Laki-laki')>
                                Laki-laki
                            </div>
                            <div>
                                <label for="gender2" class="radio-inline"></label>
                                <input type="radio" name="gender" id="gender2" value="Perempuan" @checked(old('role') == 'Perempuan')>
                                Perempuan
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
