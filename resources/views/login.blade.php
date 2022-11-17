<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    @if(Session::has('fail'))
      {{Session::get('fail')}}
    @endif
    @if(Session::has('failed'))
      {{Session::get('failed')}}
    @endif
    <div class="wrap">
        <h1>Login Page</h1>
        <form action="Loggedin" method="post">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name='email' placeholder='enter your email here'>
            <br>
            @error('email') {{$message}} @enderror
            <br>
            <label for="password">Password:</label>
            <input type="password" name='password' placeholder='enter your password here'>
            <br> 
            @error('password') {{$message}} @enderror
            <br>
            <button type='submit' class='btn btn-primary'>Login</button>
        </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
