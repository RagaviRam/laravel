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
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('public/images/doll.jpg') }}" alt="logo" style="width:50px;">
                    
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
        <form action="{{route('employee_details')}}" method="post" enctype="multipart/form-data">
            @csrf

            <h2 align="center" style="padding-top:50px;">FORM</h2>
            <div style="margin-left: 500px;" class="row col-5">
                <div class='col-lg-6'><label class="text-primary" ><b>Firstname:</b></label>
                </div>
                <div class='col-6'><input type="text" name="firstname" value ="{{old('firstname')}}">
                    <div class="text-danger">
                        @if($errors->has('firstname'))
                        {{ $errors->first('firstname') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary" ><b>Lastname:</b></label>
                </div>
                <div class='col-6'><input type="text" name="lastname" value ="{{old('lastname')}}">
                    <div class="text-danger">
                        @if($errors->has('lastname'))
                        {{ $errors->first('lastname') }}
                        @endif
                    </div>
                </div>

                <div class='col-6'><label class="text-primary"><b>Gender:</b></label>
                </div>
                <div class='col-6'>
                    <input type="radio" name="gender" value="male" ("male" @if(old('gender') == "male") checked @endif><label><b>Male</b></label>
                    <input type="radio" name="gender" value="female" ("male" @if(old('gender') == "female") checked @endif><label><b>Female</b></label>
                    <input type="radio" name="gender" value="others" ("male" @if(old('gender') == "others") checked @endif><label><b>Others</b></label>
                    <div class="text-danger">
                        @if($errors->has('gender'))
                        {{ $errors->first('gender') }}
                        @endif
                    </div>
                </div>

                <div class='col-lg-6'><label class="text-primary"><b>City:</b></label>
                </div>
                <div class='col-6'><input type="text" value ="{{old('lastname')}}" name="city" >
                    <div class="text-danger">
                        @if($errors->has('city'))
                        {{ $errors->first('city') }}
                        @endif
                    </div>
                </div>

                <div class='col-6'><label class="text-primary"><b>Age:</b></label>
                </div>
                <div class='col-6'>
                    <select name="age" >
                        <option name="age" ></option>
                        @foreach ($age as $item => $value)
                        <option name="age" value='{{$item}}' @if(old('age') == $item) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>

                    <div class="text-danger">
                        @if($errors->has('age'))
                        {{ $errors->first('age') }}
                        @endif
                    </div>
                </div>

                <div class='col-6'><label class="text-primary"><b>State:</b></label>
                </div>
                <div class='col-6'>
                    <select name="state">
                        <option name="state" ></option>
                        @foreach ($state as $item=> $value)
                        <option name="state" value='{{$item}}' @if(old('state') == $item) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @if($errors->has('state'))
                        {{ $errors->first('state') }}
                        @endif
                    </div>
                </div>

                <div class='col-6'><label class="text-primary"><b>Country:</b></label>
                </div>
                <div class='col-6'>
                    <select name="country">
                        <option name="country"></option>
                        @foreach ($country as $item=> $value)
                        <option name="country" value='{{$item}}' @if(old('age') == $item) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @if($errors->has('country'))
                        {{ $errors->first('country') }}
                        @endif
                    </div>
                </div>

                <div class='col-lg-6'><label class="text-primary"><b>PhoneNumber:</b></label>
                </div>
                <div class='col-6'><input type="number" name="phne_num" value ="{{old('phne_num')}}">
                    <div class="text-danger">
                        @if($errors->has('phne_num'))
                        {{ $errors->first('phne_num') }}
                        @endif
                    </div>
                </div>

                <div class='col-lg-6'><label class="text-primary"><b>Pincode:</b></label>
                </div>
                <div class='col-6'><input type="number" value ="{{old('pincode')}}" name="pincode">
                    <div class="text-danger">
                        @if($errors->has('pincode'))
                        {{ $errors->first('pincode') }}
                        @endif
                    </div>
                </div>

                <div class='col-lg-6'><label class="text-primary"><b>Date Of Birth:</b></label>
                </div>
                <div class='col-6'><input type="date" value ="{{old('dob')}}" name="dob">
                    <div class="text-danger">
                        @if($errors->has('dob'))
                        {{ $errors->first('dob') }}
                        @endif
                    </div>
                </div>

                <div class='col-lg-6'><label class="text-primary"><b>email Address:</b></label>
                </div>
                <div class='col-6'><input type="text" value ="{{old('email')}}" name="email">
                    <div class="text-danger">
                        @if($errors->has('email'))
                        {{ $errors->first('email') }}
                        @endif
                    </div>
                </div>
                
                <div class='col-lg-6'><label class = "text-primary"><b>Hobbies:</b></label>
                </div>
                <div class='col-6'>
                       @foreach ($hobbies as $item=> $value)
                        <input type="checkbox" name="hobbies[]" value='{{$item}}' @if(is_array(old('hobbies')) && in_array($item, old('hobbies'))) checked @endif>{{$value}}</option>
                        @endforeach
                        <div class="text-danger">
                        @if($errors->has('hobbies'))
                        {{ $errors->first('hobbies') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>File:</b></label>
                </div>
                <div class='col-6'><input value ="{{old('file')}}" type="file" name="file">
                <div class="text-danger">
                        @if($errors->has('file'))
                        {{ $errors->first('file') }}
                        @endif
                    </div>
                </div>
                
                <div class='col-lg-6'><label class="text-primary"><b>Password:</b></label>
                </div>
                <div class='col-6'><input type="password" name="password">
                    <div class="text-danger">
                        @if($errors->has('password'))
                        {{ $errors->first('password') }}
                        @endif
                    </div>
                </div>

                <div class='col-lg-6'><label class="text-primary"><b>Confirm Password:</b></label>
                </div>
                <div class='col-6'><input type="password" name="c_password">
                </div>
                <div class='col-6'></div>
                <div class='col-6'><button class="p-3 mb-2 bg-success text-white" type="submit" style="width: 50%;"><b>Submit</b></button>
                </div>
                

</html>