<?php
   session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $message = $_SESSION['message'];
    // URL FOR WHATSAPP
    $url = "htpps://web.whatsapp.com/send?phone=";
    $trim = "254".substr($phone,0,1);
    $finaL_url = $url.$trim;

    require './database.php';
    $query = "INSERT INTO messages (`name`,`email`,`phone`,`whatsapp`,`message`) VALUES ('$name','$email','$phone','$final_url','$message')";
    $action = mysqli_query($conn,$query);
    if($action){
        if(session_destroy()){
            header("Location: ../../?Sent");
        }
    }else{
        header("Location: ../../?Not_Sent");
    }
?>