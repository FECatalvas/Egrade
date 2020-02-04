@extends('admin.output')
@section('title','Training')
@section('content')
<a href="{{route('addStudent', $course->id )}}" class="btn btn-outline-info">Add Student</a>
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
        <td><a href = "{{url('admin/edit',$human->id)}}" class="btn btn-primary">Edit</a></td>
        <td><a href = "{{ url('delete', $human->id) }}" class="btn btn-primary">Delete</a></td>
        <td><a href = "{{ url('admin/grades', $human->id) }}" class="btn btn-primary">View Grades</a></td>
    </tr>
    @endforeach
    </table>
@endsection