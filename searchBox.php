<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <style type="text/css">
    	.hide{
    		display: none;
    	}

    	.list-group-item:hover{
    		background: #007bff;
    		color: white;
    	}
    </style>
</head>
<body>

<div class="container" style="margin-top: 30px; background-color: #febb02; padding: 5px; border-radius: 5px;">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<form method="GET" action="search.html" id="searchForm">
		  <div class="row" style="text-align: center;">
		    <div class="col-lg-3 col-md-12 col-sm-12" style="margin-bottom: 5px; margin-top: 8px;">

		        <input type="text" class="form-control" id="searchBox" name="location" placeholder="Search City, State or Area"
		        autocomplete="off">

		        <ul class="list-group hide" id="countryList" style="margin-top: 5px;">
		        	<?php

		        		include 'db.php';
		        		$link=mysqli_connect($servername,$username,$password,$dbname);

		        		  if(mysqli_connect_error()){
					        echo "There was an error connecting to DB!";
					      }else{
					      //connected to db successfully

					        $query="SELECT DISTINCT location FROM hotels";

					        $result=mysqli_query($link,$query);

					        while ($row=mysqli_fetch_array($result)) {
					        	echo '
					        		<li class="list-group-item"><b>'.$row['location'].'</b></li>
					        	';
					        }
					    }


		        	?>
				    <!-- <li class="list-group-item"><b>Mumbai</b></li>
				    <li class="list-group-item"><b>Indore</b></li>
				    <li class="list-group-item"><b>Chennai</b></li>
				    <li class="list-group-item"><b>Delhi</b></li>
				    <li class="list-group-item"><b>Rio de Janeiro</b></li>
				    <li class="list-group-item"><b>Delhi</b></li>
				    <li class="list-group-item"><b>Rio de Janeiro</b></li>
				    <li class="list-group-item"><b>Delhi</b></li>
				    <li class="list-group-item"><b>Rio de Janeiro</b></li>
				    <li class="list-group-item"><b>Delhi</b></li>
				    <li class="list-group-item"><b>Rio de Janeiro</b></li>
				    <li class="list-group-item"><b>Delhi</b></li>
				    <li class="list-group-item"><b>Rio de Janeiro</b></li> -->
				</ul> 

		    </div>

		    <div class="col-lg-2 col-md-2 col-sm-12" style="">
		    	<h6 style="color: white;"><b>Check-In</b></h6>
				<input type="date" id="checkIn" name="checkIn" value="2020-06-12">
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12" style="">
				<h6 style="color: white;"><b>Check-Out</b></h6>
				<input type="date" id="checkOut" name="checkOut" value="2020-06-12" >
			</div>

			<div class="col-lg-4 col-md-2 col-sm-12" style="margin-top: 8px;">
				<div class="card">
				  <div class="card-body accomodationCard" style="padding: 5px;">
				  	<b>
				    	0 Adults | 0 Children | 0 Rooms
					</b>
				  </div>
				</div>
				<div class="card hide accomodationCardPopUP" style="margin-top: 5px;">
				  <div class="card-body">

				  	<div class="row" style="margin: 5px;">
				  		<div class="col-lg-6 col-md-6 col-sm-6">
				    		<h6>Adults</h6>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<button type="button" class="btn btn-outline-primary">+</button>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<h6>9</h6>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<button type="button" class="btn btn-outline-primary">-</button>
				    	</div>
				  	</div>
				  	
				  	<div class="row" style="margin: 5px;">
				  		<div class="col-lg-6 col-md-6 col-sm-6">
				    		<h6>Adults</h6>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<button type="button" class="btn btn-outline-primary">+</button>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<h6>9</h6>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<button type="button" class="btn btn-outline-primary">-</button>
				    	</div>
				  	</div>

				  	<div class="row" style="margin: 5px;">
				  		<div class="col-lg-6 col-md-6 col-sm-6">
				    		<h6>Adults</h6>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<button type="button" class="btn btn-outline-primary">+</button>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<h6>9</h6>
				    	</div>
				    	<div class="col-lg-2 col-md-2 col-sm-2">
				    		<button type="button" class="btn btn-outline-primary">-</button>
				    	</div>
				  	</div>

				  </div>
				</div>
			</div>

		    <div class="col-lg-1 col-md-12 col-sm-12" style="margin-top: 8px;">
		      <button type="submit" class="btn btn-primary"><b>Search</b></button>
		    </div>

		    

		  </div>
		</form>
	</div>

	

</div>





<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script>

$(document).ready(function(){

	$("#searchBox").on("keyup", function() {

		$("#countryList").removeClass("hide");

		var value = $(this).val().toLowerCase();

		if(value.length==0){
			$("#countryList").addClass("hide");
		}else{
			$("#countryList li").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		}
		
	});

	$(".list-group-item").on("click",function(){
		$("#searchBox").val($(this).text());
		$("#countryList").addClass("hide");
		//$("#searchForm").submit();
	});

	$(".accomodationCard").on("click",function(){
		$(".accomodationCardPopUP").toggleClass("hide");
	});


});

</script>

</body>
</html>