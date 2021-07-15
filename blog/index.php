<?php
  require '../components/modules/database.php';
  $query = "SELECT * FROM blog ORDER BY id desc";
  $result = mysqli_query($conn,$query);
  $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/assets/css/custom.css">
    <link rel="stylesheet" href="../components/assets/css/bootstrap.min.css">
    <script src="https://apis.google.com/js/platform.js"></script>
    <title>The boys Talk | Blog</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">The <span class="text-danger">Boys</span> <span class="text-info">Talk</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="navbar-collapse collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="../">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../#footer">Social</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./">Blog</a>
              </li>
              <li class="nav-item">
                <div class="g-ytsubscribe" data-channelid="UCOk-SFaEP91UDsKXY3lVypA" data-layout="full" data-count="default"></div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <section class="container jumbotron posts">
          <h3>Our latest posts </h3>
              <br>
                <div class="container-posts">
                  <?php foreach ($posts as $post): ?>
                    <?php
                    $URL = '../posts/'.$post['image'];
                    ?>
                    <div class="post">
                        <img src="<?php echo $URL;?>" alt="Image">
                        <p><?php echo $post['title']; ?></p>
                        <small><?php echo substr($post['date'],0,16) ?></small>
                        <a href="./view.php?id=<?php echo $post['id'] ?>" class="btn bg-primary text-white">View post</a>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
  
          
      </section>
      <footer class="bg-primary text-white">
        <div class="logo">
            <h4 class="text-white">The boys talk ke &copy; 2021</h4>
            
            <div class="flex-container">
              <a href="https://twitter.com/real_wokes" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/the_boys_talk_ke/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCOk-SFaEP91UDsKXY3lVypA" target="_blank"><i class="fab fa-youtube"></i></a>
              <a href="https://chat.whatsapp.com/K5YiPFLu031KfAOT80AUAv" target="_blank"><i class="fab fa-whatsapp"></i></a>  
            </div>
            <small class="text-info">Powered by <a class="text-danger" href="http://api.whatsapp.com/send?phone=254797061691" style="text-decoration: none;">Seb Astian</a></small>
        </div>

      </footer>
      <script src="../components/assets/js/bootstrap.bundle.min.js"></script>
      <script src="../components/assets/js/font_awesome_main.js"></script>
    </body>
</html>