<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Register your information</h1>
    @if(Session::has('success'))
        {{Session::get('success')}}
        <a href="/login">Goto loginpage</a>
    @endif
    @if(Session::has('fail'))
        {{Session::get('fail')}}
    @endif
    <form action="{{route('logger')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="enter your name">
        <br>
        @error('name'){{$message}} @enderror
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="enter your email">
        <br>
        @error('email'){{$message}} @enderror
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="enter your password">
        <br>
        @error('password'){{$message}} @enderror
        <br>
        <button type="submit" class="btn btn-primary">SignUp</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
