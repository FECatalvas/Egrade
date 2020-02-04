<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
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
            <form method="post" action=" {{ url('registersubmit') }} ">
                <div class="card shadow mb-4">
                    <div class="car-header bg-success pt-2">
                        <div class="card-title font-weight-bold text-white text-center">Register </div>
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
                            <label for="first_name"> First Name </label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name"/>
                            {!! $errors->first('first_name', '<small class="text-danger">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="firstname"> Middle Name </label>
                            <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Enter Middle Name"/>
                            {!! $errors->first('middle_name', '<small class="text-danger">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="last_name"> Last Name </label>
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" />
                            {!! $errors->first('last_name', '<small class="text-danger">:message </small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="gender"> Gender </label>
                            <input type="text" name="gender" id="gender" class="form-control" placeholder="Enter Gender" />
                            {!! $errors->first('gender', '<small class="text-danger">:message </small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="age"> Age </label>
                            <input type="text" name="age" id="age" class="form-control" placeholder="Enter Age" />
                            {!! $errors->first('age', '<small class="text-danger">:message </small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="address"> Address </label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" />
                            {!! $errors->first('address', '<small class="text-danger">:message </small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="email"> E-mail </label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-mail" />
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                        </div>
 
                        <div class="form-group">
                            <label for="password"> Password </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" />
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                        </div>
                        
                    </div>
 
                    <div class="card-footer d-inline-block">
                        <button type="submit" class="btn btn-success"> Register </button>
                    <p class="float-right mt-2"> Already have an account?  <a href="{{ route('login')}}" class="text-success"> Login </a> </p>
                    </div>
                    @csrf
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>
