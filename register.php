<?php include('link.php')?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student register</title>
</head>

<body class="bg-gradient" style="background-image: url(img/carousel/1.jpg);">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block bg-register">
            <img src="img/carousel/2.jpg" style="width: 1100px; height: 700px;">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><strong style="color: black;">Create an Account!</strong></h1>
              </div>
              <form role="form" method="post" action="add_student.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="first_name" placeholder="First Name" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="last_name" placeholder="Last Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="user_name" placeholder="User Name" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"name="RepeatPassword" placeholder="Repeat Password" required>
                  </div>  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="course" placeholder="Course" required>
                </div>
                 <div class="form-group">
              <textarea class="form-control" name="subjects" id="subjects" placeholder="Subjects" rows="8" data-rule="required" data-msg="Enter your subjects here"></textarea>
            </div>
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php"><b>Already have an account? Login!</b></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </body>

</html>

