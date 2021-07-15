<?php
    
    if(isset($_GET['id']) && isset($_GET['random_passkey']) ){
        $id = $_GET['id'];
        $psky = $_GET['random_passkey'];    
        require '../../components/modules/database.php';
        $query = "DELETE FROM blog where id = $id";
        $sql_action = mysqli_query($conn,$query);
        if($sql_action){
            header("Location: ./my_posts.php?post_deleted&&random_passkey=$psky");
        }
    }
?>
