<?php
      session_start();
      if(isset($_GET['random_passkey'])){
        
        $id = $_GET['random_passkey'];
        $psky = $_SESSION['passkey'];
        if(($_GET['random_passkey'] == $_SESSION['passkey']) && ($id !== NULL) && (!empty($id))){
          //We passed
        }else{
          header("Location: ../login.php");
        }
    
      }else{
        header("Location: ../login.php");
      }
    
?>