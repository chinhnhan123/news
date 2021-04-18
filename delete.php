<?php 
    include('database.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    header('location: index.php');
?>