<?php
include_once 'session.php';
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
if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "img/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
  	$un = $_SESSION['login'];
     $query = "UPDATE `student` SET `pic_name`='".$name."' WHERE user_name = '".$un."'";
     mysqli_query($conn,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Login System</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
	
</body>
<div class="card" style="background-color: gray; margin-top: 300px;">
            <!-- /.card-header -->
            <div class="card-body"">
            	<form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Save Photo' name='but_upload'>
</form>
              <table id="example1" class="table table-bordered table-striped">
              	<?php
              	$un = $_SESSION['login'];
              	$sql1 = "select pic_name from student where user_name = '$un'";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result1);

$image = $row['pic_name'];
$image_src = "img/".$image;

$sql = "SELECT first_name, last_name, course, subjects FROM student where user_name='$un'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	?>
  	<img src='<?php echo $image_src;  ?>' >
  	<br>
                  <tr><b>Name: &nbsp</b></tr> <?php echo $row["first_name"] ." ". $row["last_name"]; ?>	
                  <br>
                  <tr><b>Course: &nbsp</b></tr> <?php echo $row["course"];?>	
                  <br>
                  <tr><b>Subjects: &nbsp</b></tr><?php echo $row["subjects"];?>
                </thead>
                </table>
            </div>
        </div>
<?php
 }
}
 else {
  echo "0 results";
}
$conn->close();
  ?>
  </html>