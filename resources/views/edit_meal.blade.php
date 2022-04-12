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
	<h3 style="color: white;" class="aw-small">Edit Your Meal</h3>
	<form method="post" action="{{route('update_meal', $meal->id)}}">
        @csrf
		@method('PATCH')
    <div class="aw-input-group">
			<label>Enter Name</label>
			<input type="text" name="mname" class="aw-input" value="{{$meal->name}}" placeholder="sheraz">
		</div> <!--- ===== .aw-input-group ====== ---->
        
		<div class="aw-input-group">
			<label>Instruction</label>
			<textarea name="instruction" class="aw-input" placeholder="Gave some instructions">{{$meal->instrcution}}</textarea>
		</div> <!--- ===== .aw-input-group ====== ---->

		<div class="aw-input-group">
			<label>Expert Advice</label>
			<textarea name="advice" class="aw-input" placeholder="Expert Advice..">{{$meal->expert_advice}}</textarea>
		</div> <!--- ===== .aw-input-group ====== ---->

		<div class="aw-input-group">
			<input type="submit" name="update" value="Update Meal" class="aw-btn bg-btn">
		</div> <!--- ===== .aw-input-group ====== ---->
	</form><!--- ===== form ====== ---->
</div><!------========= aw-main-wrap ======------>
</section>


</body>
</html>