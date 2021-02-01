<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>
        User Registration From
    </title>
</head>

<body>

    <body>
        <header>
            <nav class="navbar navbar-expand-sm bg-warning navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="../../../images/Doll.jpg" alt="logo" style="width:50px;">
                </a>
                <ul class="navbar-nav ml-auto" align="left">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="#">FEEDBACK</a>
                    </li>
                </ul>
            </nav>
        </header>
        <form action="{{(route('user_details'))}}" method="post">
        @csrf
    
            <h2 align="center" style="padding-top:50px;">Register</h2>
            <div style="margin-left: 400px;" class="row col-5">
                <div class="form-group">
                    <div class="row">
                        <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name"></div>
                        <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name"></div>
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
                    <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
                </div>
            </div>
        </form>
    </body>

</html>