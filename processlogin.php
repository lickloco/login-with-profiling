<?php
include_once 'connection.php';
include_once 'session.php';
if (isset($_POST['submit'])) {
  
  $user = trim($_POST['user']);   
  $password = trim($_POST['password']);
 if($password == ''){
     ?>    <script type="text/javascript">
                alert("Password is missing!");
                window.location = "login.php";
                </script>
        <?php
}else{
$sql = "SELECT * from `student` where `user_name`='".$user."' and `password` ='".$password."'";
$result=$db->query($sql);
if($result){
		if($result->num_rows>0){
			$row = mysqli_fetch_array($result);

			$_SESSION['login'] = $row['user_name'];
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['last_name'] = $row['last_name'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['user_type'] = $row['user_type'];
			$_SESSION['course'] = $row['course'];
			$_SESSION['subjects'] = $row['subjects'];
			$_SESSION['pic_name'] = $row['pic_name'];
			$AAA = $_SESSION['login'];

if($_SESSION['user_type']=='student'){
	?>
	<script type="text/javascript">
		alert("Welcome <?php echo $_SESSION['first_name'];?>");
		window.location = "index.html";
	</script>
	<?php
}
}
else{
			?>
	<script type="text/javascript">
		alert("Username or Password Not Registered! Contact Your administrator");
		window.location = "login.php";
	</script>
		<?php
	}
	}else{
	           # code...
        echo "Error: " . $sql . "<br>" . $db->error;
}
}
}

?>