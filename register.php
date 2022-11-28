<?php session_start();?>
<!DOCTYPE html>
<html>      
    <head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>

<body>
    <section class="vh-100 ">
  <div class="container py-5 ">
    <div class="row d-flex justify-content-center align-items-center  ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-white text-black" style="border-radius: 1rem;">
          <div class="card-body p-5 ">
            <div>
             <div class="d-flex justify-content-center mb-2">
                <img class="center " style="width: 150px; height: 150px;" src="assets/images/jkuat-logo.png" />
             </div>
              <p class="text-black-50 text-center">To login, please enter your Student Admission No. / Employee Number and Password!</p>
             <form action="auth.php" method="POST">
                 <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Username</label>
                <input type="text" id="username" class="form-control form-control-lg" name="username" />
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" id="password" class="form-control form-control-lg" name="password" />
              </div>

              <p class="small">Have an account? <a class="text-black-50" href="login.php">Sign In?</a></p>
            <input name ="register" class="btn mb-3 px-5 d-flex justify-content-center" style="background-color: #21bc10; color:white;" type="submit" id="submit" value="Register" >
            </div>
             </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>