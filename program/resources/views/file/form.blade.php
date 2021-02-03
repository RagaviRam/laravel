<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>
        User File Upload
    </title>
</head>
<body>

<form  action="{{route('file.image_details')}}" method="post" enctype="multipart/form-data">
@csrf
<div class='col-lg-6'><label class="text-primary"><b>Image:</b></label>
                </div>
                <div class='col-6'><input type="file" name="image">
                </div>
                <div class="text-danger">
                        @if($errors->has('image'))
                        {{ $errors->first('image') }}
                        @endif
                    </div>
                <div class='col-6'></div>
                <div class='col-6'><button class = "btn btn-primary" type="submit" ><b>Submit</b></button>
                </div>
</form>

</body>
</html>