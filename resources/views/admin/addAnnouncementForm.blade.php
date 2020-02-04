@extends('admin.output')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
<div class="row">
    <div class="col-md-12">
        <br/>
        <div class="card text-#27c5f5 mb-3" style="color:#27c5f5;max-width: 30rem;">
            <div class="card-header"><h1>Add announcement</h1></div>
            <div class="card-body">
                <form method="post" action="{{route('admin/addAnnouncement')}}">
                    @csrf
                    <!-- value="{{old('first_name')}}" -->
                    <div class="form-group">
                        <label for="">What:</label>
                        <input type="text" name="What"
                    class="form-control" placeholder="Add title" value="{{old('What')}}"/>
                  
                    </div>
                    <div class="form-group">
                        <label for="">Description:</label>
                        <textarea type="text" name="Description"
                    class="form-control" placeholder="Add description" value="{{old('Description')}}"> </textarea>
                    
                    </div>
                    <div class="form-group">
                        <label for="">Where:</label>
                        <input type="text" name="Where"
                    class="form-control" placeholder="Add venue" value="{{old('Where')}}"/>
                    
                    </div>
                    <div class="form-group">
                    <label for="">When:</label><br>
                    <label for="">Date:</label>
                        <input type="date" name="Date"
                    class="form-control" placeholder="Select a date" value="{{old('Date')}}"/>
                    <label for="">Time:</label>
                    <input type="time" name="Time"
                    class="form-control" placeholder="Select a time" value="{{old('Time')}}"/>
                    
                    
                    </div>
                    <div class="form-group">
                   
                    <div class="form-group">
                        <input type="submit" value="Add"
                    class="btn btn-Primary" />
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</div>
</center>
@endsection