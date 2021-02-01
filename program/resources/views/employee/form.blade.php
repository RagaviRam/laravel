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
            <nav class="navbar navbar-expand-sm bg-danger navbar-light">
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
        <form action="{{route('employee_details')}}" method="post">
            @csrf
            <h2 align="center" style="padding-top:50px;">FORM</h2>
            <div style="margin-left: 500px;" class="row col-5">
                <div class='col-lg-6'><label class="text-primary"><b>Firstname:</b></label>
                </div>
                <div class='col-6'><input type="text" name="firstname">
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Lastname:</b></label>
                </div>
                <div class='col-6'><input type="text" name="lastname">
                </div>
                <div class='col-6'><label class="text-primary"><b>Gender:</b></label>
                </div>
                <div class='col-6'>
                    <input type="radio" name="gender"><label><b>Male</b></label>
                    <input type="radio" name="gender"><label><b>Female</b></label>
                    <input type="radio" name="gender"><label><b>Others</b></label>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>City:</b></label>
                </div>
                <div class='col-6'><input type="text" name="city">
                </div>
                <div class='col-6'><label class="text-primary"><b>Age:</b></label>
                </div>
                <div class='col-6'>
                    <select name="age">
                        <option name="age" >--Select ur age--</option>
                        @foreach ($age as $item => $value) 
                            <option name ="age" value='{{$item}}'>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-6'><label class="text-primary"><b>State:</b></label>
                </div>
                <div class='col-6'>
                    <select name="state">
                    <option name="state" >--Select ur State--</option>
                        @foreach ($state as $item=> $value) 
                            <option name="state" value='{{$item}}'>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-6'><label class="text-primary"><b>Country:</b></label>
                </div>
                <div class='col-6'>
                    <select name="country">
                    <option name="country" >--Select ur Country--</option>
                    @foreach ($country as $item=> $value) 
                            <option name="country" value='{{$item}}'>{{$value}}</option>
                    @endforeach
                    </select>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>PhoneNumber:</b></label>
                </div>
                <div class='col-6'><input value="{{$data->phoneNumber}}" type="number" name="phne_num">
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Pincode:</b></label>
                </div>
                <div class='col-6'><input type="number" name="pincode">
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Date Of Birth:</b></label>
                </div>
                <div class='col-6'><input value= "{{$data->dateofbirth}}" type="date" name="dob">
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>email Address:</b></label>
                </div>
                <div class='col-6'><input type="text" name="email">
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Password:</b></label>
                </div>
                <div class='col-6'><input type="password" name="password">
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Confirm Password:</b></label>
                </div>
                <div class='col-6'><input type="password" name="c_password">
                </div>
                <div class='col-6'></div>
                <div class='col-6'><button class="p-3 mb-2 bg-success text-white" type="submit" style="width: 50%;"><b>Submit</b></button>
                </div>

</html>