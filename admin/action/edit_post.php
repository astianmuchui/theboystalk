<?php
  require '../utility.php';
    $output = "";
  require '../../components/modules/database.php';
  if(isset($_GET['id'])){
        $url_id = $_GET['id'];
        $query = "SELECT * FROM blog WHERE id = $url_id";
        $result = mysqli_query($conn,$query); 
        $post = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);

        if(isset($_POST['recreate'])){
          
            require '../../components/modules/functions.php';
            $title = $_POST['post_title'];
            $content = $_POST['post_content'];
            $author = $_POST['post_author'];
            $image = $_FILES['image']['name'];
            repost($title,$image,$content,$author,$output);
            
        }
            
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../components/assets/css/bootstrap.min.css">
    <title>Edit post</title>
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
                <a class="nav-link active" href="../?random_passkey=<?php echo $id; ?>">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./make_post.php?random_passkey=<?php echo $id; ?>">New post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./my_posts.php?random_passkey=<?php echo $id; ?>">My posts</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " href="./messages.php?random_passkey=<?php echo $id; ?>">Messages</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="../logout.php?action=logout"> <i class="fas fa-sign-out-alt"></i> Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <section class="container">
          <center><?php echo $output; ?></center>
      <form action="./edit_post.php?id=<?php echo $post['id'] ?>&&random_passkey=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                
            <div class="form-group">
                <label>Title of post</label>
                <input type="text" name="post_title" class="form-control" value="<?php echo $post['title'] ?>">
            </div>
            <div class="form-group">
                <label>Image (Re-Choose)</label>
                <input type="file" class="form-control" name="image" id="file">
            </div>
            <div class="form-group">
                <label>Content (Re-Write it all)</label>
                <textarea name="post_content" id="" cols="20" rows="10" class="form-control" placeholder="<?php echo $post['body'] ?>"></textarea>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="post_author" id="" class="form-control" value="<?php echo $post['author'] ?>">
            </div>
            <div class="form-group">
                <input type="submit" value="Post" name="recreate" class="form-control btn btn-primary">    
            </div>
            
        </form>
            <br>
      </section>


    <script src="../../components/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../components/assets/js/font_awesome_main.js"></script>
</body>
</html>