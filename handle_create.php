<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $id_author = $_POST['id_author'];
        $sql = "INSERT INTO post (title, content, id_author) VALUES ('$title', '$content', '$id_author')";
        $result = mysqli_query($conn, $sql);
        header('location: admin.php');
    }

?>