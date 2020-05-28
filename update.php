<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container col-3">
		<h1>Update Form</h1>
			<?php 
			//fetch 
			if(isset($_GET['id']) && $_GET['id']){
		    $id =$_GET['id'];
			$update = new Crud;
			$update->fetch_update($id);
			 }
             //update   
			 if(isset($_REQUEST['update'])){
			   $id = $_REQUEST['id'];
               $user = $_REQUEST['user'];
               $pass = $_REQUEST['pass'];

               $updatedata = new crud;
               $updatedata->update($id,$user,$pass);
			 } 

			?>
		</div>
		</body>
		</html>
