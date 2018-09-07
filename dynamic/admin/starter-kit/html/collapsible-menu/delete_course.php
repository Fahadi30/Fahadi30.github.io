<?php include'config.php';
    $id = $_GET['id'];
    $query = "delete from courses where course_id ='".$id."'";
    if(mysqli_query($conn , $query)){
        header('location:view_courses.php');
    }
?>