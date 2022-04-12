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

  <!-- Bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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

  <div class="table_head">
<h2 style="color: white;">All Meals</h2>

  <table style="width: 80%;" class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Instruction</th>
      <th scope="col">Expert Advice</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($meals as $meal)
    <tr>
      <td>{{$meal->id}}</td>
      <td>{{$meal->name}}</td>
      <td>{{$meal->instrcution}}</td>
      <td>{{$meal->expert_advice}}</td>
      <td>
          <form method="post" action="{{route('edit_meal', $meal)}}">
              @csrf
              @method('PUT')
              <button class="btn btn-success">EDIT</button>
          </form>
      </td>
      <td>
          <form method="post" action="{{route('delete_meal', $meal->id)}}">
              @csrf
              @method('DELETE')
          <button class="btn btn-danger">DELETE</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

    <form method="post" action="{{route('add_meal')}}">
        @csrf
    <button class="btn btn-primary">Add Meals</button>
    </form>
    
    </div><!------========= main-content ======------>

<div class="right-item" id="rightItem">
</div><!------========= right-item ======------>
</div><!------========= top-heading-wrap ======------>

</div><!------========= order-wrap ======------>
</section>


</body>
</html>