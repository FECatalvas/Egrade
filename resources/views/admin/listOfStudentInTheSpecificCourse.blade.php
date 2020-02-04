@extends('admin.output')
@section('title','Training')
@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <a href = "{{url('student')}}" class="btn btn-outline-info">Add Student</a> -->
        <h1>Student List</h1>
        @yield('sidebar')
    <table class="table table-dark">
        <tr>
            <th>Student name</th>
            <th>Grade</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)    
        <tr>

            <td>{{$student->student[0]['last_name']}}, {{$student->student[0]['first_name']}} {{$student->student[0]['middle_name']}}</td>
            <td>{{$student->grade}}</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#InputGrade">
    Grade
    </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#personalInformation"><i class="fas fa-info-circle"></i>
    </button>
            <a href = "{{ url('delete', $student->id) }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
    
        </table>
        <!-- Button trigger modal -->
    Modal
    <div class="modal fade" id="InputGrade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">GRADING SHEET</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{url('admin/insertGrade')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                    <label for="title">Grade</label>
                    <input type="number" class="form-control" placeholder="Enter grade" name="grade" id="title">
                    <span class="error">
                        @if($errors->has('grade'))
                            {{$errors->first('grade')}}
                        @endif
                    </span>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">View Grades</button>
                    <button type="submit" class="btn btn-primary" value="submit">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>       
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Modal for Details-->
    @foreach($students as $student)
    <div class="modal fade" id="personalInformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
                <div class="modal-body">
                    <div class="form-group">
                    <div class="form-group">
                        <label for="">Firstname:</label>
                        <input type="text" name="first_name"
                    class="form-control" placeholder="Enter First Name" value={{ old('first_name' ,$student->student[0]['first_name']) }}>
                    
                    </div>
                    <div class="form-group">
                    <label for="">Middlename:</label>
                        <input type="text" name="middle_name"
                    class="form-control" placeholder="Enter Middle Initial" value={{ old('middle_name' ,$student->student[0]['middle_name'] )}}>  
                    
                    </div>
            
                  
                    <div class="form-group">
                        <label for="">Lastname:</label>
                        <input type="text" name="last_name"
                    class="form-control" placeholder="Enter Last Name"  value={{ old('last_name' , $student->student[0]['last_name']  )}}>
                    
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email"
                    class="form-control" placeholder="Enter Email"  value={{ old('email' ,$student->student[0]['email']  ) }}>
                      
                    
                    </div>
                    <div class="form-group">
                        <label for="">Age:</label>
                        <input type="number" name="age"
                    class="form-control" placeholder="Enter age" value={{ old('age' , $student->student[0]['age']  )}}>
                    
                    </div>
                    
                
                    <div class="form-group">
                        <input type="text" name="address"
                    class="form-control" placeholder="Enter address"  value={{ old('address' ,$student->student[0]['address'] )}}/>
                        <span class="error">
                            @if($errors->has('address'))
                                {{$errors->first('address')}}
                            @endif
                        </span>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
            <a href = "{{url('admin/edit',$student->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>       
                </div>
            
            </div>
        </div>
        </div>

@endforeach


@endsection