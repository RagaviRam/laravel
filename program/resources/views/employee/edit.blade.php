<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>
        Edit Registration From
    </title>
</head>



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
        <form action="{{route('update',$data->id)}}" method="post">
            @csrf
            @method('put')
            <h2 align="center" style="padding-top:50px;">FORM</h2>
            <div style="margin-left: 500px;" class="row col-5">
                <div class='col-lg-6'><label class="text-primary"><b>Firstname:</b></label>
                </div>
                <div class='col-6'><input value="{{$data->firstname}}" type="text" name="firstname">
                    <div class="text-danger">
                        @if($errors->has('firstname'))
                        {{ $errors->first('firstname') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Lastname:</b></label>
                </div>
                <div class='col-6'><input value="{{$data->lastname}}" type="text" name="lastname">
                    <div class="text-danger">
                        @if($errors->has('lastname'))
                        {{ $errors->first('lastname') }}
                        @endif
                    </div>
                </div>
                <div class='col-6'><label class="text-primary"><b>Gender:</b></label>
                </div>
                <div class='col-6'>
                    <input type="radio" value="male" {{$data['gender'] == 'male' ? 'checked': ''}} name="gender"><label><b>Male</b></label>
                    <input type="radio" value="female" {{$data['gender'] == 'female' ? 'checked': ''}} name="gender"><label><b>Female</b></label>
                    <input type="radio" value="others" {{$data['gender'] == 'others' ? 'checked': ''}} name="gender"><label><b>Others</b></label>
                    <div class="text-danger">
                        @if($errors->has('gender'))
                        {{ $errors->first('gender') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>City:</b></label>
                </div>
                <div class='col-6'><input value="{{$data->city}}" type="text" name="city">
                    <div class="text-danger">
                        @if($errors->has('city'))
                        {{ $errors->first('city') }}
                        @endif
                    </div>
                </div>
                <div class='col-6'><label class="text-primary"><b>Age:</b></label>
                </div>
                <div class='col-6'>
                    <select value="{{$data->age}}" name="age">
                        @foreach ($age as $item => $value)
                        <option name="age" value='{{$item}}' {{ $data['age'] == $item ? 'selected': '' }}>{{$value}}</option>
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
                    <select value="{{$data->state}}" name="state">
                        @foreach ($state as $item=> $value)
                        <option name="state" value='{{$item}}' {{ $data['state'] == $item ? 'selected': '' }}>{{$value}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @if($errors->has('state'))
                        {{ $errors->first('state') }}
                        @endif
                    </div>
                </div>
                <div class='col-6'><label value="{{$data->country}}" class="text-primary"><b>Country:</b></label>
                </div>
                <div class='col-6'>
                    <select name="country">
                        @foreach ($country as $item=> $value)
                        <option name="country" value='{{$item}}' {{ $data['country'] == $item ? 'selected': '' }}>{{$value}}</option>
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
                <div class='col-6'><input value="{{$data->phoneNumber}}" type="number" name="phne_num">
                    <div class="text-danger">
                        @if($errors->has('phne_num'))
                        {{ $errors->first('phne_num') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Pincode:</b></label>
                </div>
                <div class='col-6'><input value="{{$data->pincode}}" type="number" name="pincode">
                    <div class="text-danger">
                        @if($errors->has('pincode'))
                        {{ $errors->first('pincode') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Date Of Birth:</b></label>
                </div>
                <div class='col-6'><input value="{{$data->dateofbirth}}" type="date" name="dob">
                    @if($errors->has('dob'))
                    {{ $errors->first('dob') }}
                    @endif
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>email Address:</b></label>
                </div>
                <div class='col-6'><input value="{{$data->email}}" type="text" name="email">
                    <div class="text-danger">
                        @if($errors->has('email'))
                        {{ $errors->first('email') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Hobbies:</b></label>
                </div>
                <div class='col-6'>
                    @php $hobbies = explode(',',$data['hobbies']); @endphp
                    <input type="checkbox" name="hobbies[]" value="singing" @if(in_array('singing',$hobbies)) checked @endif />Singing
                    <input type="checkbox" name="hobbies[]" value="dancing" @if(in_array('dancing',$hobbies)) checked @endif />Dancing
                    <input type="checkbox" name="hobbies[]" value="craft" @if(in_array('craft',$hobbies)) checked @endif />Craft Making
                    <input type="checkbox" name="hobbies[]" value="painting" @if(in_array('painting',$hobbies)) checked @endif />Painting
                    <div class="text-danger">
                        @if($errors->has('hobbies'))
                        {{ $errors->first('hobbies') }}
                        @endif
                    </div>
                </div>
                <div class='col-lg-6'><label class="text-primary"><b>Image:</b></label>
                </div>
                    <div class="col-6 ">    
                        <input type="file" id="file" name="file" value="{{$data['file']}}"/>
                        @if(strpos($data->file,'.pdf') !== false || strpos($data->file, '.csv') !== false || strpos($data->file, '.docx') !== false || strpos($data->file, '.xls')!==false)
                        <a href="{{asset('storage/images/'.$data->file)}}">download</a>
                        @else
                        <div><img src="{{asset('storage/images/'.$data->file)}}" style="max-width:60px;"></div>
                        @endif 
                    <div class="text-danger">
                         @if($errors->has('file'))
                         {{ $errors->first('file') }}
                         @endif
                    </div>
                    </div><br>
                    <div class='col-lg-6'>
                        <label class="text-primary"><b>Password:</b></label>
                    </div>
                    <div class='col-6'><input type="password" name="password">
                        <div class="text-danger">
                            @if($errors->has('password'))
                            {{ $errors->first('password') }}
                            @endif
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <label class="text-primary"><b>Confirm Password:</b></label>
                    </div>
                    <div class='col-6'>
                        <input type="password" name="password_confirmation">
                    </div>
                    <div class='col-6'></div>
                    <div class='col-6'><button class="p-3 mb-2 bg-success text-white" type="submit" style="width: 50%;"><b>Update</b></button>
                    </div>
    </body>
</html>