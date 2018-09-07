<?php include'config.php';
    $id = $_GET['id'];
    $query = "delete from short_bayan where bayan_id ='".$id."'";
    if(mysqli_query($conn , $query)){
        header('location:view_courses.php');
    }
?>