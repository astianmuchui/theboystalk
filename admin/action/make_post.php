<?php
  $output = "";
        if(isset($_POST['create'])){
          
            require '../../components/modules/functions.php';
            $title = $_POST['post_title'];
            $content = $_POST['post_content'];
            $author = $_POST['post_author'];
            $image = $_FILES['image']['name'];
            post($title,$image,$content,$author,$output);
            
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../components/assets/css/bootstrap.min.css">
    <title>Add post</title>
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
                <a class="nav-link active" href="../../index.html">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">New post</a>
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
      <br>
      <?php echo $output; ?>
      <section class="container">
      <form action="./make_post.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Title of post</label>
                <input type="text" name="post_title" class="form-control">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" id="file">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="post_content" id="" cols="20" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="post_author" id="" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Post" name="create" class="form-control btn btn-primary">    
            </div>
            
        </form>
            <br>
      </section>


    <script src="../../components/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../components/assets/js/font_awesome_main.js"></script>
</body>
</html>