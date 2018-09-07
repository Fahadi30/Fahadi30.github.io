<?php include'config.php';
    $id = $_GET['id'];
    $query = "delete from live_announcements where L_ann_id ='".$id."'";
    if(mysqli_query($conn , $query)){
        header('location:view_courses.php');
    }
?>