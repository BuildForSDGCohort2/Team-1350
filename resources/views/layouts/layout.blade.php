<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <title>Locomote</title>
    <style>
      *{
        padding: 0px;
        margin: 0px;
      }

      body{
        background: #fff;
        font-family: 'Ubuntu', sans-serif;
      }

      .navbar{
        background: #0047ab;
        color: #fff;
      }

      .navbar .navbar-brand{
        color: #fff;
      }

      .nav-item .nav-link{
        color: #fff;
      }

      .nav-item .sign{
        background: #fff;
        border-radius: 20px;
        color: #0047ab;
      }

      .navbar .collapse{
        margin-right: 0px;
        margin-left: 980px !important;
      }

      .container .fas{
        size: 500px !important;
      }

      .welcome{
        margin-top: 250px;
      }

      .signup{
        padding: 20px;
        width: 300px;
        margin-top: 150px;
        background: #f8f8ff;
      }

      .services{
        width: 1140px !important;
        background: #0047ab;
      }

      .services .box:hover{
        background: yellow;
        color: #000 !important;
        padding: 10px;
      }

      span .box{
        color: #fff !important;
        z-index: -1;
      }

      .stateone{
        background: #0047ab;
        font-size: 80px;
        width: 480px;
      }

      .statetwo{
        background: #0047ab;
        font-size: 80px;
        width: 980px;
      }

      .statethree{
        background: #0047ab;
        font-size: 80px;
        width: 480px;
      }

      .state{
        color: #000;
        margin-bottom: 100px;
      }

      .bottom{
        background: #0047ab;
        color: #fff;
      }

      footer{
        background: #0047ab;
        color: #fff;
      }

      form-group{
        font-style: normal !important;
        text-align: center !important;
      }

      .button{
        color: #0047ab !important;
      }

      .button:hover{
        color: skyblue;
        background: grey;
      }

    </style>
  </head>
    <body>
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand ml-3" href="/index.html">Welocomote</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-bicycle pr-2"></i>Bike</a>
                <a class="dropdown-item" href="#"><i class="fas fa-bus pr-2"></i>Bus</a>
                <a class="dropdown-item" href="#"><i class="fas fa-ship pr-2"></i>Boat</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-train pr-2"></i>Train</a>
                <a class="dropdown-item" href="#"><i class="fas fa-plane pr-2"></i>Plane</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login.html"><i class="fas fa-user pr-2"></i>Log in</a>
            </li>
            <li class="nav-item ml-2">
              <a class="sign nav-link" href="/signup.html">Sign up</a>
            </li>
          </ul>
        </div>
      </nav>
      @yield('content')

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

    <footer> 
      <p class="text-center pt-3 mb-0">&copy;Welocomote 2020</p>
    </footer>
</html>