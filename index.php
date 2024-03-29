<?php
  if(isset($_POST['submit'])){
    require './components/modules/database.php';
    session_start();
    $_SESSION['name'] = mysqli_real_escape_string($conn,$_POST['name']);
    $_SESSION['email'] = mysqli_real_escape_string($conn,$_POST['email']);
    $_SESSION['phone'] = mysqli_real_escape_string($conn,$_POST['phone']);
    $_SESSION['message'] = mysqli_real_escape_string($conn,$_POST['message']);
    header("Location: ./components/modules/send_message.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./components/assets/css/custom.css">
    <link rel="stylesheet" href="./components/assets/css/bootstrap.min.css">
    <script src="https://apis.google.com/js/platform.js"></script>
    <title>The boys Talk</title>
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
                <a class="nav-link active" href="#">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Social</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./blog/">Blog</a>
              </li>
              <li class="nav-item">
                <div class="g-ytsubscribe" data-channelid="UCOk-SFaEP91UDsKXY3lVypA" data-layout="full" data-count="default"></div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End of menu -->
      <main class="showcase-wrapper">
        <div class="text">
            <p class="text-white">A better world For Teens</p>
            <a href="mailto:clevinmteja@gmail.com" class="btn btn-light">Contact Us</a>
        </div>
      </main>
      <section class="about" id="about">
          <br> <br> <br>
        <h2>About Us</h2>
        <p class="paragraph">The boys talk is a teen movement in kenya which is built to solve major and common teen issues 
            that are likely to bring negative effects if not solved  early enough <br>
            At boys talk we beleive that it is within ourselves to make a change. Through our videos and posts one 
            can learn a lot and relate with our great speakers who don't speak on mere observation but experience<br>

            <blockquote> ~ Change the bit you can, we have more than teen life to live </blockquote>
        </p>
        <h2>What we cover</h2>
        <div class="grid-container-min">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <i class="fas fa-sad-tear"></i>
                <div class="card-header">Deppression</div>
                <div class="card-body">
               </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
              <i class="fas fa-sad-tear"></i>
              <div class="card-header">Rejection</div>
              <div class="card-body">
             </div>
          </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <i class="fas fa-smoking"></i>
                <div class="card-header">Drug abuse</div>
                <div class="card-body">
               </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <i class="far fa-smile-wink"></i>
                <div class="card-header">Clout chasing</div>
                <div class="card-body">
               </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem; padding: 10px;">
                <i class="fas fa-wine-bottle"></i>
                <div class="card-header">Immorality</div>
                <div class="card-body">
               </div>
            </div>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem; padding: 10px;">
                <i class="fas fa-equals"></i>
                <div class="card-header">Equality</div>
                <div class="card-body">
               </div>
            </div>
            
        </div>
      </section>
      <section class="videos bg-light">
        <h5>From Our Youtube</h5> <br>
        <div class="video-container">
        <iframe  src="https://www.youtube.com/embed/RBeH5N1zw7Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <br>
        <h3>Do not forget to </h3>
        <a href="https://www.youtube.com/channel/UCOk-SFaEP91UDsKXY3lVypA" class="btn btn-danger">Subscribe</a>
        <br>  
    </section>
      
      <section class="contact-us jumbotron container">
          <br>
          <h3>Let's talk about it</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label>phone</label>
                <input type="number" name="phone" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" id="" cols="30" rows="10" class="form-control required"></textarea>
            </div>
            <div class="form-group">
                <br>
                <input type="submit" value="Send Message" name="submit" id="" class="form-control btn btn-primary">
            </div>
        </form>
      </section>
      <footer class="bg-primary text-white " id="footer">
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
      <script src="./components/assets/js/bootstrap.bundle.min.js"></script>
      <script src="./components/assets/js/font_awesome_main.js"></script>
</body>
</html>