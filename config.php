<?php
class Crud{
	public $con,$sql,$result;
	 protected $host = "localhost";
	 protected $user = "root";
	 protected $pass = "";
	 protected $db = "cms";
	 public function __construct(){
         $this->con = new mysqli( $this->host , $this->user , $this->pass , $this->db );
       if(mysqli_connect_errno()){
       	echo "error" ;//.mysqli_connect_errno();
       }
	 }

	 public function insert($user,$pass){
      $this->sql = "INSERT INTO user (user,pass) VALUES('$user','$pass')"; 
      if($this->con->query($this->sql)){
      	return true;
      }else{
       echo	" \n not inserted  " . $this->sql;
       die();
      }
	 }

	 public function fetch(){
	 	$this->sql = "SELECT * FROM user";   
	 	if($this->result = $this->con->query($this->sql)){
            while($row = $this->result->fetch_assoc()){
            $data ="<tr>";
            $data .="<td>{$row['id']}</td>";
            $data .="<td>{$row['user']}</td>";
            $data .="<td>{$row['pass']}</td>";
            $data .= '<td><a class="modelbtn" data-toggle="modal" data-target="#exampleModal" href="user.php?id='.$row['id'].'">Update</a></td>';
            $data .='<td><a class="modelbtn" data-toggle="modal" data-target="#exampleModal" href="user.php?id='.$row['id'].'">delete</a></td>';
            $data .="<tr>";                     
           echo $data;
             }
	 	}else{
	 		echo " no Data";
	 	}
	 }
    
    public function fetch_update($id){
    	echo $id;
           $sql = "SELECT * FROM user where id={$id}";
            $result = $this->con->query($sql);
            $row = $this->result->fetch_assoc();
			$data = '<form>
					<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="text" value="'.$row['name'].'" class="form-control">
					</div>
					<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" value="'.$row['pass'].'" class="form-control">
					</div>
					<button type="submit" name="update" class="btn btn-primary">Submit</button>
					</form>';
                 echo $data;

    }
}
$stu = new Crud;
//$stu->connect();
?>  









<?php
/*
class DB {
	protected $db_name = 'cms';
	protected $db_user = 'root';
	protected $db_pass = '';
	protected $db_host = 'localhost';
	// Open a connect to the database.
	// Make sure this is called on every page that needs to use the database.
	public function connect() {
		$connect_db = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
		if ( mysqli_connect_errno() ) {
			printf("Connection failed: %s\ ", mysqli_connect_error());
			exit();
		}else{
			echo "connected";
		}
		
	}

}
$db = new DB;
$db->connect();
*/
?>
