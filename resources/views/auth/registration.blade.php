<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authencantion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
<div class="col-md-4 col-md-ofset-4" style="margin: top 20px;">
<h4 class="mb-3">Learner Registration Form</h4>
<p class="user-select-all">The information contained on this form is needed for the registration of the learner on the Adanian Labs records.
    
Please note that all the information provided in this form is for the sole purpose of Adanian Labs and the student database and at no time will the information be supplied to any third party for any reason without prior approval of the learner</p>
<form action="{{route('register-user')}}" method="post">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess">{{Session::get('sucess')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <div class="mb-4">
  <label for="name" class="form-label">Full Name</label>
  <input type="name" class="form-control border-success" id="name" placeholder="Enter Name">
  <span class="text-danger">@error('name'){{$message}} @enderror</span>
</div>

    <div class="mb-4">
  <label for="email" class="form-label">Email address</label>
  <input type="email" class="form-control border-success" id="email" placeholder="Enter email">
  <span class="text-danger">@error('email'){{$message}} @enderror</span>
</div>
  
<div class="mb-4">
  <label for="phone_number" class="form-label">Phone Number</label>
  <input type="phone_number" class="form-control border-success" id="phone_number" placeholder="Enter phone number">
  <span class="text-danger">@error('phone_number'){{$message}} @enderror</span>
</div>
       
<div class="mb-4">
  <label for="skills" class="form-label">Skills</label>
  <input type="skills" class="form-control border-success" id="skills" placeholder="Enter skills">
  <span class="text-danger">@error('skills'){{$message}} @enderror</span>
</div>
        
    <div class="mb-4">
  <label for="weaknesses" class="form-label">Weaknesses</label>
  <input type="weaknesses" class="form-control border-success" id="weaknesses" placeholder="Enter weaknesses">
  <span class="text-danger">@error('skills'){{$message}} @enderror</span>
    </div>

    <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="submit">Register</button>
    </div>
    </div>
    <br>
    <a href="login">Already Registered Login here</a>

    </form>
</div>
</div>
</div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>