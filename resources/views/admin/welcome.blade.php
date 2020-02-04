@extends('admin.output')
@section('title','Training')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<a href = "{{url('student')}}" class="btn btn-outline-info">Add Student</a>
    <h1>Student List</h1>
    @yield('sidebar')
<table class="table table-dark">
    <tr>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th colspan=2>Action</th>
    </tr>
    @foreach($humans as $human)
    <tr>

        <td>{{$human['first_name']}}</td>
        <td>{{$human['middle_name']}}</td>
        <td>{{$human['last_name']}}</td>
        <td>{{$human['email']}}</td>
        <td>{{$human['age']}} year/s old</td>
        <td>
    @if($human['gender'] == 1)
        Male
    @else
        Female
    @endif
    </td>
        <td>{{$human['address']}}</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Grade
</button></td>
        <td><a href = "{{url('student/edit',$human->id)}}" class="btn btn-primary">Edit</a></td>
        <td><a href = "{{ url('delete',$human->id) }}" class="btn btn-primary">Delete</a></td>
        
    </tr>
    @endforeach
 
    </table>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter grade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


@endsection