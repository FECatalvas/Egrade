@extends('admin.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
<div class="row">
    <div class="col-md-12">
        <br/>
        <a href = "{{url('/admin/showlistOfStudent')}}" class="btn btn-primary ">View List</a><br>
        <div class="card text-#27c5f5 mb-3" style="color:#27c5f5;max-width: 30rem;">
            <div class="card-header"><h1>Add Student</h1></div>
            <div class="card-body">
                <form method="post" action="{{route('admin/create')}}">
                    @csrf
                    <!-- value="{{old('first_name')}}" -->
                    <?php echo $course_id?>
                    <div class="form-group">
                        <input type="hidden" name='course_id' value='{{$course_id}}'>    
                    </div>
                   
                    <label for="">Email:</label>
                        <input type="email" name="email"
                    class="form-control" placeholder="Enter Email" value="{{old('email')}}"/>
                    <span class="error">
                        @if($errors->has('email'))
                            {{$errors->first('email')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" 
                    class="btn btn-Primary" />
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</div>
</center>
@endsection