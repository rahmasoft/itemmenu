<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dependent Select Box</title>
<link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
	<script> 
	$(document).ready(function(){
	$('#country').on('change',function(){
       var countryID = $(this).val();
       if(countryID){	
	   $.get(
	   "ajax.php",
	   {country: countryID},
	   function(data){
		   $('#city').html(data);
	   }
	   );
	   }else{
		   $('#city').html('<option>selesct country frist</option>')
	   }		   
	});
		});
	
	</script>

  </head>
  <body>
    <div class="container">
<div class="row">
  <div class="col-md-4" style=" float: none;
    margin: 0 auto">
    <h1 class="text-center">Dependent Select Box</h1>

<form class="text-center">
    <div class="form-group">
      <label>Select Country</label>
      <select class="form-control" id="country">
        <option>Select Country</option>
		<?php
		include ('connect.php');
		$query = "SELECT * FROM country";
		$do = mysqli_query($conn,$query);
		while($row = mysqli_fetch_array($do)){
			echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
		?>
      </select>
      <br>
      <label>Select City</label>
       <select class="form-control" id="city">
        <option>Select Country First</option>
      </select>
    </div>
  </form>

</div>
    </div>
</div>