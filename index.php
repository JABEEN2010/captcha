<?php include('server.php');
//if user is not logged in, they cannot access this page
if(empty($_SESSION['username'])){
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User registration system using php and MySQL</title> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">   
    <div class="header">
    <h2>Home page</h2>
    </div>

    <div class="content1">

        <?php if (isset($_SESSION['success'])); ?>
        <div class="error success">
                <h3> 
                    <?php
                
                    unset($_SESSION['success']);
                    ?>
                </h3>
        </div>

        <?php if (isset($_SESSION["username"])); ?>
        <p> Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php?logout='1' " style="color: red;">Logout</a></p>
    </div>
</body>
</html>