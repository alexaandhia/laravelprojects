<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Web PPDB</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
<body>
    <div class="box">
        @if(Session::get('notAllowed'))
                  <div class="alert alert-danger">
                    {{session('notAllowed')}}
                  </div>
        @endif
        @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
        @endif
        <form class="container auth-form login-form" action="{{route('login.auth')}}" method="POST">
            @csrf
            <div class="top-header ">
                <div class="card mx-auto">
            <img class="mb-4 mt-5" src="{{ ('assets/img/logo-wk.png') }}" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Login</h1>
            

            <div class="form-floating">
                <label class="sr-only" for="username">Email</label>
                <input type="text" id="username" name="email" class="input" placeholder="Masukkan email terdaftar" required>
            </div>
            <div class="form-floating">
                <label class="sr-only" for="signin-password">Password</label>
                <input id="signin-password" name="password" type="password" class="input signin-password" placeholder="Masukkan password anda" required>
            </div>
            <div class="form-floating">
                <input type="submit" class="submit w-50 btn btn-lg btn-primary p-2" value="login">
                <button class="w-50 btn btn-lg btn-danger p-2" type="submit" href="{{route('landpage')}}">Back</button>
                <small class="d-block text-center mt-3">new here? <a href="/register">Register Now!</a></small>
            </div>
            </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>