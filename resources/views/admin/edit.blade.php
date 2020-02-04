@extends('admin.master')
@section('content')
<center>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<div class="row">
    <div class="col-md-12">
        <br/>
        <div class="card text-white bg-primary mb-3" style="max-width: 30rem;">
            <div class="card-header"><h1>Edit Human</h1></div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin/update', $human->id) }}">
                @csrf
                    <div class="form-group">
                        <label for="">Firstname:</label>
                        <input type="text" name="first_name"
                    class="form-control" placeholder="Enter First Name" value={{ old('first_name' ,$human->first_name) }}>
                    <span class="error">
                        @if($errors->has('first_name'))
                            {{$errors->first('first_name')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                    <label for="">Middlename:</label>
                        <input type="text" name="middle_name"
                    class="form-control" placeholder="Enter Middle Initial" value={{ old('middle_name' ,$human->middle_name )}}>  
                    <span class="error">
                        @if($errors->has('middle_name'))
                            {{$errors->first('middle_name')}}
                        @endif
                    </span>
                    </div>
            
                  
                    <div class="form-group">
                        <label for="">Lastname:</label>
                        <input type="text" name="last_name"
                    class="form-control" placeholder="Enter Last Name"  value={{ old('last_name' , $human->last_name )}}>
                    <span class="error">
                        @if($errors->has('last_name'))
                            {{$errors->first('last_name')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email"
                    class="form-control" placeholder="Enter Email"  value={{ old('email' ,$human->email ) }}>
                        @if($errors->has('email'))
                        <span class="error">
                            {{$errors->first('email')}}
                            </span>
                            @endif
                    
                    </div>
                    <div class="form-group">
                        <label for="">Age:</label>
                        <input type="number" name="age"
                    class="form-control" placeholder="Enter age" value={{ old('age' , $human->age )}}>
                    <span class="error">
                        @if($errors->has('age'))
                            {{$errors->first('age')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" value="1"{{ old('gender', $human->gender == 1) ? 'checked' : '' }}> Male
                        <input type="radio" name="gender" value= "2"{{ old('gender', $human->gender == 2) ? 'checked' : '' }}> Female
                        <br>
                        <span class="error">
                            @if($errors->has('gender'))
                                {{$errors->first('gender')}}
                            @endif
                        </span>
                    </div>
                
                    <div class="form-group">
                        <input type="text" name="address"
                    class="form-control" placeholder="Enter address"  value={{ old('address' ,$human->address )}}/>
                        <span class="error">
                            @if($errors->has('address'))
                                {{$errors->first('address')}}
                            @endif
                        </span>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" 
                    class="btn btn-light" value="Update" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</center>
@endsection