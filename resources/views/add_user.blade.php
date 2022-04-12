<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alpha Trait</title>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Custom Style -->
	<link rel="stylesheet" href="{{asset('css/chief.css')}}">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>
<body class="bg-body">
<section id="login-wrap">
<div class="login-wrap bg-dark-gray">

	<h2 class="aw-heading">Welcome to Alpha Trail</h2>

	<form method="post" action="{{route('add_new_user')}}">
        @csrf

		<div class="aw-input-group">
			<label>Enter Username</label>
			<input type="text" name="uname" class="aw-input" placeholder="sheraz..." required>
		</div> <!--- ===== .aw-input-group ====== ---->

		<div class="aw-input-group">
			<label>Enter Email</label>
			<input type="email" name="email" class="aw-input" placeholder="name@company.com" required>
		</div> <!--- ===== .aw-input-group ====== ---->

		<div class="aw-input-group">
			<label>Enter Password</label>
			<input type="password" name="pass" class="aw-input" placeholder="Password" required>
		</div> <!--- ===== .aw-input-group ====== ---->

		<div class="aw-input-group">
			<label>Select Role</label>
			<select class="aw-input" name="role">
            <option value="">Select Role</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        	</select>

		</div>

		<div class="aw-input-group">
			<label>Select City</label>
			<select class="aw-input" name="city">
            <option value="">Select City</option>
			@foreach($users as $user)
            <option value="{{$user->city}}">{{$user->city}}</option>
			@endforeach
        	</select>

		</div>
		<div class="aw-input-group">
			<input type="submit" name="add_user" value="Add User" class="aw-btn bg-btn">
		</div> <!--- ===== .aw-input-group ====== ---->

	</form><!--- ===== form ====== ---->

</div><!------========= aw-main-wrap ======------>
</section>


</body>
</html>