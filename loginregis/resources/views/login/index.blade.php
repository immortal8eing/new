<!doctype html>
<html>
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="/css/loginstyle.css"> 
  <!-- CSS only -->
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
  <title>Login Page</title> 
 </head> 
 <body> 
   <div class="row justify-content-center">
     <div class="col-md-4">
      {{-- @if (session()->has('loginerror'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginerror') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif  --}}
      @if (session('loginerror'))
        <div class="alert alert-danger" role="alert">
          <div class="message-error">
            {{ session('loginerror') }}
          </div>
        </div>
      @endif
        <div class="container">
          <h1>Login</h1> 
          <form action="/login" method="post">
            @csrf  
            <div class="form-floating">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" autofocus required 
              value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required>
            </div>                
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
            <div class="form-footer mt-2">
              <p> don't have an account yet? <a href="/register">Register</a></p>
            </div>
          </form> 
        </div> 
     </div>
   </div>
  
 
</body>
</html>