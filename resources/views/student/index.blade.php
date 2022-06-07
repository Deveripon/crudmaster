

@section('title','Our Students')
@extends('layouts.app');

@section('main')
<div class="wrap-table shadow">

    @if(Session::has('success'))
    <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>	
    @endif

	<a class="btn btn-info" href="{{route('student.create')}}">Add New Student</a>
    <div class="card">		
        <div class="card-body">
            <h2>Our Students</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Cell</th>
                        <th>Username</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Education</th>
                        <th>Course</th>
						<th width="100">Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($students as $student)
                    <tr>
                        <td>{{$loop -> index +1}}</td>
                        <td>{{$student -> name }}</td>
                        <td>{{$student -> email }}</td>
                        <td>{{$student -> cell }}</td>
                        <td>{{$student -> username }}</td>
                        <td>{{$student -> age }}</td>
                        <td>{{$student -> gender }}</td>
                        <td>{{$student -> education }}</td>
                        <td>{{$student -> courses }}</td>

                        <td><img src="{{asset('assets/media/img/uploaded_img')}}/{{$student -> photo}}" alt=""></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{route('student.show', $student -> id)}}">View</a>
                            <a class="btn btn-sm btn-warning" href="{{route('student.edit', $student -> id)}}">Edit</a>
                            <a class="btn btn-sm btn-danger dlt-btn" id="dlt-btn" href="{{route('student.destroy',$student -> id)}}">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11" class="text-center" >No data Found</td>
                    </tr>
                    @endforelse					
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection