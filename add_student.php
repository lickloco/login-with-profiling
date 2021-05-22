 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["submit"]))
{
	$fn = $_POST["first_name"];
	$ln = $_POST["last_name"];
	$un = $_POST["user_name"];
	$pw = $_POST["password"];
	$ut = "student";
	$co = $_POST["course"];
	$su = $_POST["subjects"];
$sql = "INSERT INTO student (first_name, last_name, user_name, password, user_type, course, subjects)
VALUES ('$fn', '$ln', '$un', '$pw','$ut', '$co', '$su')";

if ($conn->query($sql) === TRUE) {
  ?>
<script type="text/javascript">
                      //then it will be redirected to index.php
                      alert("Successfuly Added");
                      window.location = "login.php";
                  </script>
	 <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?> 