<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
 @include('backend.components.head')
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top: 100px; margin-bottom: 100px">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Register</h3>
          </div>
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin-left: 20px">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          <div class="panel-body">
            <form action="/register" method="POST">
                @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="name" id="nama" placeholder="Enter your name" value="{{ old('name') }}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <textarea rows="5" class="form-control" name="address" id="address" placeholder="Enter your address">{{ old('address') }}</textarea>
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender">
                  <option value="">Select</option>
                  <option value="Laki-laki" @selected('Laki-laki' == old('gender')) >Laki-laki</option>
                  <option value="Perempuan" @selected('Perempuan' == old('gender'))>Perempuan</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
               <a href="/sign-in" class="btn btn-link">Sign In</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
