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
	<p class="aw-small">Let's get started with logging in to your account</p>

	<form method="post" action="getdata">
        @csrf
		<p class="error">{{session()->get('error')}}</p>
		<div class="aw-input-group">
			<label>Enter Email</label>
			<input type="email" name="email" class="aw-input" placeholder="name@company.com">
		</div> <!--- ===== .aw-input-group ====== ---->

		<div class="aw-input-group">
			<label>Enter Password</label>
			<input type="password" name="pass" class="aw-input" placeholder="Password">
		</div> <!--- ===== .aw-input-group ====== ---->

		<div class="aw-input-group">
			<input type="submit" name="login" value="Login" class="aw-btn bg-btn">
		</div> <!--- ===== .aw-input-group ====== ---->

	</form><!--- ===== form ====== ---->

</div><!------========= aw-main-wrap ======------>
</section>


</body>
</html>