<?php
session_start();


?>

<!doctype html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <a class="float-right" href="logout.php">Logout</a>
        <h1>Welcome to the World! <?php echo $_SESSION['username'];?> </h1>

        </div>
    </body>
</html>