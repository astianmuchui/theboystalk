<?php
  session_start();
  $username = "underratedmwanzia";
  $passkey = "moo-se 78(ghos/ost_009";
  if(isset($_POST['login'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    if(($uname == $username) && ($pwd == $passkey) ){
      
      $_SESSION['passkey'] = rand();
      $passcode = $_SESSION['passkey'];
      header("Location: ./index.php?random_passkey=$passcode");
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/assets//css/bootstrap.min.css">
    <title>Admin | Login</title>
</head>
<body style="background-color: black;" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="#"> The boys Talk </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="navbar-collapse collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              
            </ul>
          </div>
        </div>
      </nav>
      <br>
    <div class="container jumbotron" style="width: 68%;">
        <h6 class="text-white">Please login to acess your panel</h6>

        <br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <br>
                <label class="text-danger" > <i class="fas fa-user fa-2x"></i> Username</label> <br>
                <input type="text" class="form-control" name="username">

            </div> <br> 
            <div class="form-group">
                <label  class="text-danger"><i class="fas fa-key fa-2x"></i> Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div> <br> <br>
            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-light" name="login">
            </div>
        </form>
    </div>

    <script src="../components/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../components/assets/js/font_awesome_main.js"></script>
</body>
</html>