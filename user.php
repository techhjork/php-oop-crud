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
	<div class="Jumbotron text-center bg-muted">CRUD in PHP</div>
<div class="container col-4">
     <form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">user</label>
    <input type="text" name="user" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control">
  </div>
  <input type="submit" name="insert" class="btn btn-primary">
</form>
<?php
if(isset($_POST['insert'])){
$user = $_POST['user'];
$pass = $_POST['pass'];

$stu = new CRUD;
$stu->insert($user,$pass);
header("Location: user.php");
}
?>
</div>
<div class="container col-6">
	<h1 align="center">DATA</h1>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">First</th>
      <th scope="col">pass</th>
      <th scope="col">EDIT</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //table
    $select = new Crud;
    $select->fetch();
    //delete
	if($_GET['id']){
	$id = $_GET['id'];
	$deletedata=new Crud;
	$deletedata->delete($id);
	}    

    ?>
  </tbody>
</table>

</div>


</body>
</html>
