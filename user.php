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
  <button type="submit" name="insert" class="btn btn-primary">Submit</button>
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
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">pass</th>
      <th scope="col">EDIT</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $select = new Crud;
    $select->fetch();
    ?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php 
       if($_GET['id']){
        $id = $_GET['id'];
        echo $id;
        }else{
        	$id ="1";
        }
       $update = new Crud;
       $update->fetch_update($id);
       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
