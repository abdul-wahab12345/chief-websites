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
<section id="order-wrap">

<div class="top-heading-wrap">
	<div class="left-bar bg-bar"></div>
	<div class="heading-content">
		<h2>Add Meal</h2>
	</div><!------========= heading-content ======------>
	<div class="right-item">
	<a href="logout"><i class="fa fa-sign-out"></i></a>
		<a href="#"><i class="fa fa-download"></i></a> 
		<a href="#"><i class="fa fa-print"></i></a> 
	</div><!------========= right-item ======------>
</div><!------========= top-heading-wrap ======------>

<div class="main-content-wrap">
	<div class="left-bar bg-bar" id="leftBar" style="padding: 20px 0 50px 0;">
		<div class="aw-pointer"></div>
		<li class="bg-active"><img src="{{asset('images/grid.svg')}}"></li>
		<li class="bg-active"><a class="show_meals_button" href="show_meals"><i class="fa fa-gift"></i></a></li>

	</div><!--- ======= left-bar  ======= --->

	<div class="main-content">

<div class="login-wrap bg-dark-gray">

    <h2 class="aw-heading">Welcome to Alpha Trail</h2>
    @error('name')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror

    <form method="post" action="{{route('add_new_meal')}}">
        @csrf

        <div class="aw-input-group">
            <label>Enter Name</label>
            <input type="text"
             name="name"
             class="aw-input"
             placeholder="Do you want fast food...">
        </div> <!--- ===== .aw-input-group ====== ---->

        <div class="aw-input-group">
            <label>Enter Instruction</label>
            <textarea class="aw-input" name="instruction" placeholder="Gave some instructions..."></textarea>
        </div> <!--- ===== .aw-input-group ====== ---->

        <div class="aw-input-group">
            <label>Enter Expert Advice</label>
            <textarea class="aw-input" name="expert_advice" placeholder="Any advice related to meal..."></textarea>
        </div> <!--- ===== .aw-input-group ====== ---->


        <div class="aw-input-group">
            <input type="submit" name="add" value="Add Meal" class="aw-btn bg-btn">
        </div> <!--- ===== .aw-input-group ====== ---->

    </form><!--- ===== form ====== ---->

</div><!------========= aw-main-wrap ======------>


	</div><!------========= main-content ======------>

<div class="right-item" id="rightItem">
</div><!------========= right-item ======------>
</div><!------========= top-heading-wrap ======------>

</div><!------========= order-wrap ======------>
</section>


</body>
</html>