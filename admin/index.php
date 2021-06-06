<?php
  require '../components/modules/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../components/assets/css/admin.css">
    <title>Boys Talk | Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-danger" href="#"> Dashmin </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="navbar-collapse collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./action/make_post.php">New post</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " href="#">Messages</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="#"> <i class="fas fa-sign-out-alt"></i> Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <section class="flex-column section" >
      <br>
      <h3 class="text-white">Website Overview</h3>
      <div class="flex-row">
      <button type="button" class="box">
        <i class="fas fa-inbox fa-2x"></i> <br>
        Messages
        <br>
        <small><?php countMessages(); ?></small>
      </button>
      <button type="button" class="box">
        <i class="fas fa-pencil-alt fa-2x"></i> <br>
        Posts
        <br>
        <small><?php countPosts(); ?></small>
      </button>
      </div>
      
      </section>
      <script src="../components/assets/js/bootstrap.bundle.min.js"></script>
      <script src="../components/assets/js/font_awesome_main.js"></script>
</body>
</html>