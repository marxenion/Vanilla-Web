<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
    <?php
        session_start();
        unset($_SESSION['userlogin']);
        unset($_SESSION['access']);
        echo header ("Location: index.php");
    ?>
</head>
<body>
    
</body>
</html>