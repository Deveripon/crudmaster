


@section('title','Edit Student Data');
@extends('layouts.app')




@section('main')

	<div class="wrap shadow-sm">
		<a class="btn btn-info"href="{{route('student.index')}}">Show Students</a>
		<div class="card">

            @if(Session::has('success'))
            <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>	
            @endif
    

			<div class="card-body">
		    	<h2>Edit Student Info</h2>
				<form action="{{route('student.update',$edit_data -> id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" value="{{$edit_data -> name}}"  class="form-control" type="text">
					</div>
				
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" value="{{$edit_data -> email}}"  class="form-control" type="text">
					</div>
				
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" value="{{$edit_data -> cell}}"  class="form-control" type="text">
					</div>
				
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" value="{{$edit_data -> username}}"  class="form-control" type="text">
					</div>
				
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" value="{{$edit_data -> age}}"  class="form-control" type="text">
					</div>
				
					<div class="form-group">
						<label for="">Gender</label>
						<hr>
						 
							<label for="male"> 
								<input type="radio"  name="gender" value="male" id="male">
									Male
							</label>

							<label for="female"> 
								<input type="radio" name="gender" value="female" id="female">
									Female
							</label>
										
					</div>
					<div class="form-group">
						<label for="">Education</label>
						<hr>	
						<select class="form-control" name="education" id="">
							<option value="">-Select Your Education-</option>
							<option @if($edit_data -> education == 'SSC') selected @endif value="SSC">SSC</option>
							<option @if($edit_data -> education == 'HSC') selected @endif value="HSC">HSC</option>
							<option @if($edit_data -> education == 'BSC') selected @endif value="BSC">BSC</option>
							<option @if($edit_data -> education == 'MSC') selected @endif value="MSC">MSC</option>
							<option @if($edit_data -> education == 'Hons') selected @endif value="Hons">Hon</option>
						</select>
					
					</div>


					<div class="form-group">
						<label for="">Courses</label>
						<hr>
						
						<label for="mern">
							<input type="checkbox" value="Mern Stack development" name="courses[]" id="mern">
							Mern Stack development
						</label>
						<br>

						<label for="Laravel">
							<input type="checkbox" value="Laravel development" name="courses[]" id="Laravel">
							Laravel development
						</label>
						<br>

						<label for="asp">
							<input type="checkbox" value="ASP.NET" name="courses[]" id="asp">
							ASP.NET
						</label>					
						<br>

						<label for="python">
							<input type="checkbox" value="Python development" name="courses[]" id="python">
							Python development
						</label>
						<br>

						<label for="microsoft">
							<input type="checkbox" value="Microsoft.NET" name="courses[]" id="microsoft">
							Microsoft.NET
						</label>
					
					</div>

					<div class="form-group">
						<label for="">Upload Photo</label>
						<hr>
						<label for="upload">
							<img width="50" src="{{asset("assets\media\img\dist\upload_icon.png")}}" alt="">
							<input class="hidden" style="display:none" type="file" name="photo" id="upload">
						</label>
					
						
					</div>

					<div class="form-group">
						<input class="btn btn-info" type="submit" value="Update Now">
					</div>
				</form>
			</div>
		</div>
		
	</div>
	
@endsection