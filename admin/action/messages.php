<?php
    require '../utility.php';
    require '../../components/modules/database.php';
    $query = "SELECT * FROM messages ORDER BY id desc";
    $result = mysqli_query($conn,$query);
    $messages = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../components/assets/css/bootstrap.min.css">
    <title>Messages</title>
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
  <div class="container">
  <table class="table table-hover">

    
  <thead>

  <tr class="table-dark bg-primary">
      <td>Name</td>
      <td>Email</td>
      <td>Phone</td>
      <td>Message</td>
      <td>Whatsapp Link</td>
      <td>Date</td>
    </tr>
  </thead>
  <tbody>
  <?php foreach($messages as $message): ?>
    <?php
      $num = $message['phone'];
      $url = "htpps://wa.me/254";
      $country_code = 254;
      $trim = substr($message['phone'],1);
      $final_URL = $url.$trim;
    ?>
    <tr class="table-light">
      <th scope="row"><?php echo $message['name']; ?></th>
      <td> <a href="mailto:<?php echo $message['email'] ?>" class="btn btn-dark">Send Email</a> </td>
      <td><?php echo $message['phone'] ?></td>
      <td><?php echo $message['message'] ?></td>
      <td> <a href="https://web.whatsapp.com/send?phone=<?php echo $country_code.$trim; ?>" class="btn btn-primary">Chat</a> </td>
      <td><?php echo substr($message['date'],0,16); ?></td>  
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  </div>
      <script src="../../components/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../components/assets/js/font_awesome_main.js"></script>
</body>
</html>