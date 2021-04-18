<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $id = $_GET['id'];
        $productName = $_POST['name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        
        $sql = "UPDATE product
        SET name = '$productName', quantity= '$quantity', price='$price'
        WHERE id = $id";

        $result = mysqli_query($conn, $sql);
        header('location: index.php');
    }
    header('location: index.php');

?>