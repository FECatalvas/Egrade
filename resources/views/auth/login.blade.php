<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EGrade_System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<div class="container mt-3">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
        <form method="post" action="{{url('login') }}">
                <div class="card shadow">
                    <div class="car-header bg-success pt-2">
                        <div class="card-title font-weight-bold text-white text-center">Student Login </div>
                    </div>
 
                    <div class="card-body">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                        
 
                        <div class="form-group">
                            <label for="email"> E-mail </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail" />
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                        </div>
 
                        <div class="form-group">
                            <label for="password"> Password </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" />
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>
 
                    <div class="card-footer d-inline-block">
                        <input type="submit" class="btn btn-success" value=" Login as User" />
                        <input type="button" class="btn btn-success" value="Login as Admin" onclick="window.location='{{route('adminlogin')}}'"/> 
                        <p class="float-right mt-2"> Don't have an account?  <a href="{{ url('registerform')}}" class="text-success"> Register </a> </p>
                    </div>
                    @csrf
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>
