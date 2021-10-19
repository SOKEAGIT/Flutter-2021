<?php
  if(isset($_POST['btnupdate'])){
    $oldpass = $_POST['txtoldpass'];
    $newpass = $_POST['txtnewpass'];
    $confirmpass = $_POST['txtconfirmpass'];
    if($oldpass != "admin123" && $newpass == $_POST['txtnewpass'] && $confirmpass == $_POST['txtconfirmpass']){
      echo "<script>
            alert('Wrong old password!');
            window.location.href='index.php';
            </script>";
    }else if($oldpass == "admin123" && $newpass != $_POST['txtconfirmpass']){
      echo "<script>
            alert('Password are not matched!');
            window.location.href='index.php';
            </script>";   
    }else if($oldpass =="admin123" && $newpass == $_POST['txtnewpass'] && $confirmpass == $_POST['txtconfirmpass']){
      echo "<script>
            alert('Updated Success!');
            window.location.href='index.php';
            </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Home Page";?></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Angkor&display=swap" rel="stylesheet">
    <style>
        .cblue{
            color:blue;
        }
        body{
          font-family: 'Angkor', cursive;
        }
    </style>
</head>
<body>
<!-- Image and text -->
<!-- Image and text -->
<div class="container-fluid">
<section class="py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Form Update Password</h2>
                    <!-- <p class="lead mb-0">Our customers love working with us</p> -->
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                    <div class="card text-white bg-warning mx-auto" style="max-width: 90rem;">
                      <div class="card-header text-center">Update Password</div>
                      <div class="card-body">
                      <form method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Old Password</label>
                        <input type="password" name="txtoldpass" class="form-control" id="exampleInputEmail1" placeholder="Enter old Password" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" name="txtnewpass" class="form-control" id="exampleInputPassword1" placeholder="Enter new Password" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="txtconfirmpass" class="form-control" id="exampleInputPassword2" placeholder="Enter confirm Password" required>
                      </div>
                      <div class="form-group form-check">
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                      </div>
                      <button type="submit" name="btnupdate" class="btn btn-primary">Update Password</button>
                      <button type="reset" class="btn btn-danger">Cancel</button>
                    </form>
                      </div>
                    </div>                    
                    </div>
                </div>
            </div>
        </section>
</div>
<!-- End contener -->
<script src="bootstrap/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="bootstrap/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>