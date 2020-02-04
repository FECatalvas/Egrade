@extends('admin.output')
@section('title','Training')
@section('content')
<h1>Grades</h1>
    @yield('sidebar')
<table class="table table-dark">
    <tr>
        <th>Grades</th>
        <th colspan=2>Action</th>
    </tr>
    @foreach($grades as $grade)
    <tr>
        <td>{{$grade['grade']}}</td>
        <td><a href = "{{url('student/edit',$grade->id)}}" class="btn btn-primary">Edit</a></td>
        <td><a href = "{{ url('delete', $grade->id) }}" class="btn btn-primary">Delete</a></td>
    </tr>
    @endforeach
    </table>
@endsection