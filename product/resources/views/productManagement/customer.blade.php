<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 120%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
                    <img src="{{ asset('/image/logo.jpg') }}" alt="logo" style="width:50px;">
                    
                </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('product/dashboard')}}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <ul class="nav nav-pills nav-stacked">
        <li ><a href="#">Users</a></li>
                <li><a href="{{route('product/admin_dashboard')}}">Admin</a></li>
                <li><a href="{{route('product/manager_dashboard')}}">Manager</a></li>
                <li class="active"><a href="{{route('product/customer_dashboard')}}">Customer</a></li>
                <li ><a href="{{route('product/product_dashboard')}}">Product</a></li>
</ul>
    </div>
    <form>
    <section class="content">
    <div class="col-sm-8 text-center">
        <h1 style="margin-left: 100px;"><b>Customer</b></h1>
        <h2 style="margin-left: 100px;"><b>Register Here</b></h2>
            <div style="margin-left: 100px;" class="row col-5">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6"><input type="text" class="form-control" name="first_name" placeholder="First Name"></div>
                        <div class="col-sm-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name"></div>
                    </div>
                    <div class="row">
                        <div class="col">@if($errors->has('first_name'))
                                                {{ $errors->first('first_name') }}
                                                @endif</div>
                        <div class="col">@if($errors->has('last_name'))
                                                {{ $errors->first('last_name') }}
                                                @endif</div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div>
                @if($errors->has('email'))
                {{ $errors->first('email') }}
                @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div>
                @if($errors->has('password'))
                {{ $errors->first('password') }}
                @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                </div>
            </div>
        
    </div>
</section>
    </form>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Thank You</p>
</footer>

</body>
</html>
