<!doctype html>
<html>
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="/css/regisstyle.css"> 
  <title> Register Page</title> 
 </head> 
 <body> 
  <div class="row justify-content-center">
    <div class="col-md-4">
        {{-- @if (session('success'))
          <div class="alert alert-success" role="alert">
            <div class="message-success">
              {{ session('success') }}
            </div>
          </div>
        @endif --}}
      <div class="container"> 
        <h1>Register</h1> 
        <form action="/register" method="POST">
          @csrf 
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name"  name="name" placeholder="Name" required value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required value="">
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          <div class="form-footer mt-2">
            <p> already have an account? <a href="/login">Login</a></p>
          </div>
        </form> 
      </div> 
    </div>
  </div>
 
</body></html>