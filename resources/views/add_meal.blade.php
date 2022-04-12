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
		<li class="bg-active"><a class="show_meals_button" href="{{route('show_meals')}}"><i class="fa fa-gift"></i></a></li>

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
             name="meal_name"
             class="aw-input"
             placeholder="Do you want fast food..." required>
        </div> <!--- ===== .aw-input-group ====== ---->

        <div class="aw-input-group">
            <label>Enter Instruction</label>
            <textarea class="aw-input" name="instruction" placeholder="Gave some instructions..." required></textarea>
        </div> <!--- ===== .aw-input-group ====== ---->

        <div class="aw-input-group">
            <label>Enter Expert Advice</label>
            <textarea class="aw-input" name="expert_advice" placeholder="Any advice related to meal..." required></textarea>
        </div> <!--- ===== .aw-input-group ====== ---->
		<div class="repeater-main">
			<div class="repeater-fields">
				<div class="fields-wrap">

				<div class="aw-input-wrap wd-50" >
					<label for="">Enter Name</label>
					<input type="text" name="name[]" class="aw-input aw-search" placeholder="Enter Name">
					<input type="hidden" class="ingid" name="ingid[]">
					<div class="suggesstion-box-list"></div>
				</div>	<!------ ======= fields-wrap ======== ----->
				<div class="aw-input-wrap wd-25">
					<label for="">Enter Quantity</label>
					<input type="number" name="quantity[]" class="aw-input" placeholder="Enter Name">
				</div>	<!------ ======= fields-wrap ======== ----->
				<div class="aw-input-wrap wd-25">
					<label for="">Enter Unit</label>
					
					<select  name="unit[]" class="aw-input ing-units" ></select>
					<textarea style="display:none" name="weights[]" class="weights"></textarea>

				</div>	<!------ ======= fields-wrap ======== ----->
				<div class="aw-input-wrap input-del">
					<button class="aw-del" type="button" onclick="deleteRow()"><i class="fa fa-times"></i></button>
				</div>	<!------ ======= fiields-wrap ======== ----->


				</div><!------ ======= fields-wrap ======== ----->

				

			</div><!------ ======= repeater-fields ======== ----->
			<button type="button" class="btn-add-row">Add Row</button>
	</div><!------ ======= repeater-main ======== ----->


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

<script type="text/javascript">
		$(document).ready(function(){
			  $(".btn-add-row").click(function(){

			    $(".repeater-fields").append(`<div class="fields-wrap">
                <div class="aw-input-wrap wd-50">
				<input type="text" name="name[]" class="aw-input aw-search" placeholder="Enter Name">
				<input type="hidden" class="ingid" name="ingid[]"> 
				<div class="suggesstion-box-list"></div>
				</div>
                <div class="aw-input-wrap wd-25"><input type="number" name="quantity[]" class="aw-input" placeholder="Enter Name"></div>
                <!------ ======= fields-wrap ======== -----><div class="aw-input-wrap wd-25"><select  name="unit[]" class="aw-input ing-units" ></select>
					<textarea style="display:none" name="weights[]" class="weights"></textarea></div>
                <div class="aw-input-wrap input-del"><button type="button" class="aw-del"><i class="fa fa-times"></i></button></div></div>`);
			  
				$('.aw-search').off('keyup').on('keyup',function(){

					get_ing($(this).val(),this);


				});


			  });

			  $('.aw-search').off('keyup').on('keyup',function(){
					get_ing($(this).val(),this);


			});


			  $(document).on('click', '.aw-del', function(e){
                  e.preventDefault();
			  		$(this).parent().parent().remove();
			  	 });
			
		});




function get_ing( ing,input){
	$.ajax({
          type: "GET",
          url: 'https://api.spoonacular.com/food/ingredients/search?query='+ing+'&number=5&apiKey=6e88a8eb870240c4aec048f50512a163',
         
         
          success: function(data){

            if(data){

              var ingredients = data;
            
              var html = "";

              if(ingredients.results != undefined){
                for(var i = 0; i < ingredients.results.length; i++){
                
                  var ing = ingredients.results[i];

                  var ing_a = JSON.stringify(ing).replace("'","");

                  html += "<li data-ing='"+ing_a+"' data-long_desc='"+ing.name+"' class='aw-fill-field'>"+ing.name+"</li>";

                }
              }


              $(input).parent().find(".suggesstion-box-list").show();
              $(input).parent().find(".suggesstion-box-list").html(`<ul class="suggesstion-box-list-ul">${html}</ul>`);
             
              $(".aw-fill-field").click(function(){

                $(input).val($(this).data('long_desc'));

                var ing = $(this).data('ing');
                var dat = ing.name+":"+ing.id;
				$(input).parent().find(".ingid").val(ing.id);

                $.get("https://api.spoonacular.com/food/ingredients/"+ing.id+"/information?amount=1&apiKey=6e88a8eb870240c4aec048f50512a163",
				function(res){

                  var data = res;
                  var html = '';

                  if(data.possibleUnits != undefined){
                    for(var i = 0; i < data.possibleUnits.length; i++){
                     
                      var weight = data.possibleUnits[i];

                      html += "<option value='"+weight+"'>"+weight+"</option>";

                    }
                  }

                  $(input).parent().parent().find('textarea.weights').text(JSON.stringify(res));
                  $(input).parent().parent().find('select.ing-units').html(html);

               });


                $(".suggesstion-box-list").hide();

              });

            }else{

            }

          }
        });
}


	</script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
		// $.ajax({
		// 	type: 'post',
		// 	url: 'https://api.spoonacular.com/food/ingredients/search?query={$val}&number=5',
		// 	success: function(response)
		// });


/*
		$.ajax({
          type: "GET",
          url: 'https://api.spoonacular.com/food/ingredients/search?query={$val}&number=5&apiKey=6e88a8eb870240c4aec048f50512a163',
          data:data,
          beforeSend: function(){
            $(input).css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
          },
          success: function(data){

            if(data){

              var ingredients = JSON.parse(data);
              console.log(ingredients);

              var html = "";

              if(ingredients.results != undefined){
                for(var i = 0; i < ingredients.results.length; i++){
                  console.log(ingredients.results[i]);
                  var ing = ingredients.results[i];

                  var ing_a = JSON.stringify(ing).replace("'","");

                  html += "<li data-ing='"+ing_a+"' data-long_desc='"+ing.name+"' class='aw-fill-field'>"+ing.name+"</li>";

                }
              }

              $(input).parent().find(".suggesstion-box-list").show();
              $(input).parent().find(".suggesstion-box-list").html(`<ul class="suggesstion-box-list-ul">${html}</ul>`);
              $(input).css("background","#FFF");

              console.log(html);

              $(".aw-fill-field").click(function(){

                $(input).val($(this).data('long_desc'));

                var ing = $(this).data('ing');
                var dat = ing.name+":"+ing.id;

                $.post("",{action:"aw_get_weights",id:ing.id},function(res){

                  var data = JSON.parse(res);
                  var html = '';

                  if(data.possibleUnits != undefined){
                    for(var i = 0; i < data.possibleUnits.length; i++){
                      console.log(data.possibleUnits[i]);
                      var weight = data.possibleUnits[i];

                      html += "<option value='"+weight+"'>"+weight+"</option>";

                    }
                  }


                //   $field.parent().find('td[data-name="unit_weights"] textarea').html(res).removeAttr('disabled');
                //   $field.parent().find('td[data-name="ing_unit"] select').html(html);

                });


                $(".suggesstion-box-list").hide();

              });

            }else{

            }

          }
        });*/

      });


	</script> 

</body>
</html>