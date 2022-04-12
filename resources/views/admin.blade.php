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

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



</head>
<body class="bg-body">
<section id="order-wrap">
<div class="right-item">
	<a href="logout"><i class="fa fa-sign-out"></i></a>
	</div>
  <center>
  <div class="table_head">
  <h2 style="color: white;">All Users</h2>
  <table style="width: 80%;" class="table">
  <thead>
    <tr>
      <th scope="col">Role Id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->role_id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td>
          <form method="post" action="{{route('delete_user', $user->id)}}">
              @csrf
              @method('DELETE')
          <button class="btn btn-danger">DELETE</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</center>
</div>

<center>
  <form method="post" action="{{route('add_user')}}">
    @csrf
  <button class="btn btn-primary">Add User</button>
  </form>
 
</center>
</section>
</body>
</html>