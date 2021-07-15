<?php
    $errors = array();

    $output = "";
    function post($title,$image,$content,$author,$output){
        require '../../components/modules/database.php';
        global $errors,$conn,$output;
        
        if(empty($title)){
            $output = '<small class"text-danger">Please add the title</small>';
        }
        if(empty($image)){
            $output = '<small class"text-danger">Please add an Image</small>';
        }
        if(empty($content)){
            $output = '<small class"text-danger">Please add some content</small>';
        }
        if(empty($author)){
            $output = '<small class"text-danger">Please write the author</small>';
        }
        if(count($errors) == 0){
            if(!empty($image)){
                $folder = '../../posts/';
                $filename = basename($image);
                $filepath = $folder.$filename;
                $fileExtension = pathinfo($filepath,PATHINFO_EXTENSION);
                $allowedFormats = array("jpg","jpeg","png","webp");
                // $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $tmp_name = $_FILES['image']['tmp_name'];
                if(in_array($fileExtension,$allowedFormats)){
                       if(move_uploaded_file($tmp_name,$filepath)){
                    include '../../components/modules/database.php';
                       $query = "INSERT INTO blog(`title`,`image`,`body`,`author`) VALUES('$title','$image','$content','$author')";
                       $action = mysqli_query($conn,$query);
                       if($action){
                        $output = '<small class"text-sucess">Succesfully posted</small>';
                       }else{
                        $output = '<small class"text-danger">Not posted</small>';
                       }
                    } else{
                        $output = '<small class"text-danger">There was a problem handling the image</small>';
                 }

                }else{
                    $output = '<small class"text-danger">Invalid file format</small>';
                }
            }else{
                $output = '<small class"text-danger">Image required</small>';
            }
        }else{
            print_r($errors);
            return false;
        }
    }

    function repost($title,$image,$content,$author,$output){
        require '../../components/modules/database.php';
        global $errors,$conn,$output;
        
        if(empty($title)){
            $output = '<small class"text-danger">Please add the title</small>';
        }
        if(empty($image)){
            $output = '<small class"text-danger">Please add an Image</small>';
        }
        if(empty($content)){
            $output = '<small class"text-danger">Please add some content</small>';
        }
        if(empty($author)){
            $output = '<small class"text-danger">Please write the author</small>';
        }
        if(count($errors) == 0){
            if(!empty($image)){
                $folder = '../../posts/';
                $filename = basename($image);
                $filepath = $folder.$filename;
                $fileExtension = pathinfo($filepath,PATHINFO_EXTENSION);
                $allowedFormats = array("jpg","jpeg","png","webp");
                $tmp_name = $_FILES['image']['tmp_name'];
                if(in_array($fileExtension,$allowedFormats)){
                       if(move_uploaded_file($tmp_name,$filepath)){
                        include '../../components/modules/database.php';
                        $id  = $_GET['id'];
                       $queries = array("UPDATE `blog` SET `title` = '$title' WHERE `blog`.`id` = $id","UPDATE `blog` SET `image` = '$image' WHERE `blog`.`id` = $id","UPDATE `blog` SET `body` = '$content' WHERE `blog`.`id` = $id","UPDATE `blog` SET `author` = '$author' WHERE `blog`.`id` = $id");
                       foreach ($queries as $query):
                        $action = mysqli_query($conn,$query);
                       endforeach;
                       if($action){
                        $output = '<small class"text-sucess">Succesfully reposted</small>';
                       }else{
                        $output = '<small class"text-danger">Not reposted</small>';
                       }
                    } else{
                        $output = '<small class"text-danger">There was a problem handling the image</small>';
                 }

                }else{
                    $output = '<small class"text-danger">Invalid file format</small>';
                }
            }else{
                $output = '<small class"text-danger">Image required</small>';
            }
        }else{
            print_r($errors);
            return false;
        }
    }

    function countMessages(){
        require '../components/modules/database.php';
        $query = "SELECT * FROM messages";
        $result = mysqli_query($conn,$query);
        $messages = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
        echo count($messages);
    }
    function countPosts(){
        require '../components/modules/database.php';
        $query = "SELECT * FROM blog";
        $result = mysqli_query($conn,$query);
        $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
        echo count($posts);
}

?>

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">