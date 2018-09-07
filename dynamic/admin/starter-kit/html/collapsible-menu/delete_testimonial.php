<?php include'config.php';
    $id = $_GET['id'];
    $query = "delete from testimonial where tes_id ='".$id."'";
    if(mysqli_query($conn , $query)){
        header('location:view_courses.php');
    }
?>