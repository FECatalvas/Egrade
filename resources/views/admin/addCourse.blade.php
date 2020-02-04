@extends('admin.output')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
<div class="row">
    <div class="col-md-12">
        <br/>
        <a href = "{{url('/admin/showCourses')}}" class="btn btn-primary ">View List</a><br>
        <div class="card text-#27c5f5 mb-3" style="color:#27c5f5;max-width: 30rem;">
            <div class="card-header"><h1>Add Course</h1></div>
            <div class="card-body">
                <form method="post" action="{{route('admin/addCourses')}}">
                    @csrf
                    <!-- value="{{old('first_name')}}" -->
                    <div class="form-group">
                        <label for="">Course:</label>
                        <input type="text" name="course"
                    class="form-control" placeholder="Enter course"/>
                    <span class="error">
                        @if($errors->has('course'))
                            {{$errors->first('course')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                        <label for="">Units:</label>
                        <input type="text" name="units"
                    class="form-control" placeholder="Enter number of units" />
                    <span class="error">
                        @if($errors->has('units'))
                            {{$errors->first('units')}}
                        @endif
                    </span>
                    </div>
                    <div class="form-group">
                        <label for="">Schedule:</label>
                        <input type="text" name="schedule"
                    class="form-control" placeholder="Enter schedule" value="{{old('schedule')}}"/>
                    <span class="error">
                        @if($errors->has('schedule'))
                            {{$errors->first('schedule')}}
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