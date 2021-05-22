<?php include ('link.php');
include ('session.php');
?>
 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student login</title>
</head>

<body class="bg-gradient" style="background:url(img/carousel/2.jpg);">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" style="background-color: black;">
              <div class="col-lg-6 d-none d-lg-block bg-login">
                <img src="img/carousel/1.jpg" style="width: 910px; height: 500px;">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-900 mb-4" style="color: red;"><strong><b>Student Login</b></strong></h1>
                  </div>
                  <form role="form" action="processlogin.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="user" aria-describedby="textHelp" placeholder="Enter username..."autofocus required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Enter Password..." autofocus required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck"><b>Remember Me</b></label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" name="submit" type="submit" value="submit">
                      Login
                    </button>
                    <hr>
                    </a>
                    <div class="text-center">
                    <a class="small" href="register.php"><strong>Sign Up!</strong></a>
                  </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>

</html>
