@section('title','Single View')

@extends('layouts.app')

@section('main')


<div class="container" style="width:468px;">
   <div class="row" style="display:block;margin-top:100px;">
    <a class="btn btn-info" width="100" href="{{route('student.index')}}">All Students</a>
    <div class="card col-12 shadow">
 
        <div class="card-body">

            <img class="card-img" style="width: 400px;height:180px" src="{{asset('assets/media/img/uploaded_img')}}/{{$student_data -> photo}}" alt="">
            <div class="card-title"></div>
               
        </div>
        <div class="description">
               <h3>Name : {{$student_data -> name}} </h3>
                <h4>Username : {{$student_data -> username}}</h4>
                <h5>Email: {{$student_data -> email}}  </h5>
                <h5>Cell: {{$student_data -> cell}}</h5>
                <h5>Age: {{$student_data -> age}} </h5>
                <h5>Gender: {{$student_data -> gender}}</h5>
                <h5>Education: {{$student_data -> education}} </h5>
                <h5>Courses: {{$student_data -> courses}}</h5>
        </div>
        
    </div>
    <a class="btn btn-info" width="100" href="{{route('student.edit',$student_data -> id)}}">Edit Data</a>
   </div>
</div>












@endsection