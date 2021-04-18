<?php 
    include('database.php');
    $sql = "SELECT * FROM post";
    $result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Product Table</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
  </head>
  <body>
    <div class="container">
    <a href="create.php" class="btn btn-success">Create </a>
    <table>
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>content</th>
            <th>Id_author</th>
            <th>More</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) {?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['title']?></td>
                <td><?php echo $row['content']?></td>
                <td><?php echo $row['id_author']?></td>
                <td>
                  <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-warning">Update </a>
                  <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete </a>
                </td>
            </tr>
        <?php } ?>
    
    </table>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
 
  </body>
</html>