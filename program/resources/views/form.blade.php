<html>
<title>FORM</title>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<form method="post" action="{{ route('student_details') }}" enctype="multipart/form-data">
    @csrf
<div>
    <h2 align ="center" style="padding-top:50px;">Registration</h2>
            <div style="margin-left: 500px;" class="row col-5" >
                <div class='col-lg-6'><label><b>Name</b></label>
                </div>
                <div class='col-6'><input name="name" type="text">
                </div>
                <div class='col-6'><label><b>Address</b></label>
                </div>
                <div class='col-6'><input name="address" type="text">
                </div>
                <div class='col-6'><label><b>Pincode</b></label>
                </div>
                <div class='col-6'><input name="number" type="number">
                </div>
                <div class='col-6'><label><b>Pincode 2:</b></label>
                </div>
                <div class='col-6'><input name="number1" type="number">
                </div>
                <div class='col-6'>
                </div>
                <div class='col-6'><input name ="submit" type="submit" value = "Register">
                </div>
            </div>
</div>
</form>
</html>


