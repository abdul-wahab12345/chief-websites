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
		<h2>Orders</h2>
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

		<div class="head-wrapper">

			<div class="head-wrap">
				<div class="left-border bd-green"></div>
				<div class="head-title bg-dark-gray">
					<p>Chef Flow (70)</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->
			<div class="head-wrap">
				<div class="left-border bd-red"></div>
				<div class="head-title bg-dark-gray">
					<p>Lean (20)</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->
			<div class="head-wrap">
				<div class="left-border bd-yellow"></div>
				<div class="head-title bg-dark-gray">
					<p>Keto (50)</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->
			<div class="head-wrap">
				<div class="left-border bd-blue"></div>
				<div class="head-title bg-dark-gray">
					<p>Protein Plus (50)</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== head-wrapper ===== ---->


			<!----- =====================  ======================
				===== Table Head ========================== ----->

		<div class="table-row-wrapper" id="table-head" style="margin-top: 30px;">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border"></div>
				<div class="head-title" >
					<p style="color: #AAA4A4">Plan</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc">
					<p  style="color: #AAA4A4">Meal Name</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty">
				<div class="td-qty">
					<p  style="color: #AAA4A4">Qty</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->


		<!----- =====================  ======================
				===== Table Head End ========================== ----->




		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-red"></div>
				<div class="head-title bg-dark-gray" >
					<p><span class="mb-show">Plan :</span> Lean</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p><span class="mb-show">Meal Name :</span> Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty bg-dark-gray">
				<div class="td-qty">
					<p><span class="mb-show">Quantity :</span> 19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->


		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-green"></div>
				<div class="head-title bg-dark-gray" >
					<p>Chef Flow</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->


		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-yellow"></div>
				<div class="head-title bg-dark-gray" >
					<p>Keto</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->

		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-blue"></div>
				<div class="head-title bg-dark-gray" >
					<p>Protein Plus</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->


		<!---- ====================================================================
			========================== DIVIDER ============================------->
			<div class="aw-divider"></div>





		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-red"></div>
				<div class="head-title bg-dark-gray" >
					<p>Lean</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->


		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-green"></div>
				<div class="head-title bg-dark-gray" >
					<p>Chef Flow</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->


		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-yellow"></div>
				<div class="head-title bg-dark-gray" >
					<p>Keto</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->

		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-blue"></div>
				<div class="head-title bg-dark-gray" >
					<p>Protein Plus</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->




		<!---- ====================================================================
			========================== DIVIDER ============================------->
			<div class="aw-divider"></div>





		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-red"></div>
				<div class="head-title bg-dark-gray" >
					<p>Lean</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->


		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-green"></div>
				<div class="head-title bg-dark-gray" >
					<p>Chef Flow</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->


		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-yellow"></div>
				<div class="head-title bg-dark-gray" >
					<p>Keto</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->

		<div class="table-row-wrapper">

			<div class="head-wrap" style="margin-right:0px">
				<div class="left-border bd-blue"></div>
				<div class="head-title bg-dark-gray" >
					<p>Protein Plus</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-desc">
				<div class="td-desc bg-dark-gray">
					<p>Herb Roasted Chicken Breast Served With Quinoa and Roasted Vegetables</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

			<div class="head-qty  bg-dark-gray">
				<div class="td-qty">
					<p>19</p>
				</div><!--- ====== head-title ===== ---->
			</div><!--- ====== head-wrap ===== ---->

		</div><!--- ====== table-row-wrapper ===== ---->







	</div><!------========= main-content ======------>

	<div class="right-item" id="rightItem">
	</div><!------========= right-item ======------>
</div><!------========= top-heading-wrap ======------>

</div><!------========= order-wrap ======------>
</section>


</body>
</html>