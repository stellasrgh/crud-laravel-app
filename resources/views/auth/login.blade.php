<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
 @include('backend.components.head')
</head>
<body>
  <div class="container">



    <div class="row" style="margin-top: 100px;">

      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
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
            <form action="/authenticate" method="POST">
                @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
              <a href="/sign-up" class="btn btn-link">Sign Up</a>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
