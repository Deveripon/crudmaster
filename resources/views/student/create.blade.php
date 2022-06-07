


@section('title','Add New Student');
@extends('layouts.app')




@section('main')

	<div class="wrap shadow-sm">
		<a class="btn btn-info"href="{{route('student.index')}}">Show Student</a>
		<div class="card">
			<div class="card-body">
				
		@if($errors->any())
		<p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>
		@endif
		@if(Session::has('success'))
		<p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>	
		@endif


				<h2>Register New Student</h2>
				<form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" value="{{old('name')}}"  class="form-control" type="text">
					</div>
					@error('name')
						<p class="text-danger">* required</p>
					@enderror
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" value="{{old('email')}}"  class="form-control" type="text">
					</div>
					@error('email')
						<p class="text-danger">* required</p>
					@enderror
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" value="{{old('cell')}}"  class="form-control" type="text">
					</div>
					@error('cell')
						<p class="text-danger">* required</p>
					@enderror
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" value="{{old('username')}}"  class="form-control" type="text">
					</div>
					@error('username')
						<p class="text-danger">* required</p>
					@enderror
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" value="{{old('username')}}"  class="form-control" type="text">
					</div>
					@error('age')
					<p class="text-danger">* required</p>
					@enderror
					<div class="form-group">
						<label for="">Gender</label>
						<hr>
						 
							<label for="male"> 
								<input type="radio" name="gender" value="male" id="male">
									Male
							</label>

							<label for="female"> 
								<input type="radio" name="gender" value="female" id="female">
									Female
							</label>
					@error('gender')
					<p class="text-danger">* required</p>
					@enderror						
					</div>
					<div class="form-group">
						<label for="">Education</label>
						<hr>	
						<select class="form-control" name="education" id="">
							<option value="">-Select Your Education-</option>
							<option value="SSC">SSC</option>
							<option value="HSC">HSC</option>
							<option value="BSC">BSC</option>
							<option value="MSC">MSC</option>
							<option value="Hon's">Hon</option>
						</select>
					@error('education')
					<p class="text-danger">* required</p>
					@enderror
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
						@error('courses[]')
						<p class="text-danger">* required</p>
						@enderror
					</div>

					<div class="form-group">
						<label for="">Upload Photo</label>
						<hr>
						<label for="upload">
							<img width="50" src="{{asset("assets\media\img\dist\upload_icon.png")}}" alt="">
							<input class="hidden" style="display:none" type="file" name="photo" id="upload">
						</label>
						@error('photo[]')
						<p class="text-danger">* required</p>
						@enderror
						
					</div>

					<div class="form-group">
						<input class="btn btn-info" type="submit" value="Add Now">
					</div>
				</form>
			</div>
		</div>
		
	</div>
	
@endsection