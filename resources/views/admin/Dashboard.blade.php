@extends('admin.output')
@section('title','Training')
@section('content')
<!-- <a href = "{{url('student')}}" class="btn btn-outline-info">Add Student</a> -->
    <h1>Announcements</h1>
    @yield('sidebar')
<table class="table table-dark"> 
    @foreach($announcements as $report)
    <tr>
        <div class="card">
            <h5 class="card-header">{{$report['Date']}} - {{$report['Time']}}</h5>
            <div class="card-body">
                <h5 class="card-title">{{$report['What']}}</h5>
                <p class="card-text">{{$report['Description']}}</p>
                <p class="card-text">{{$report['Where']}}</p>
            </div>
        </div>  
    </tr>
    @endforeach
    </table>
@endsection
