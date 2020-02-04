@extends('admin.output')
@section('title','Training')
@section('content')
<a href = "{{url('student')}}" class="btn btn-outline-info">View Grades</a>
    <h1>Grades</h1>
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
        <td><a href = "{{url('student/edit',$human->id)}}" class="btn btn-primary">Edit</a></td>
        <td><a href = "{{ url('delete', $human->id) }}" class="btn btn-primary">Delete</a></td>
    </tr>
    @endforeach
    </table>
@endsection