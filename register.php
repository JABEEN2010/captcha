<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User registration system using php and MySQL</title> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="content">   
    <div class="header">
    <h2>Register</h2>
    </div>

    <form method="POST" action="register.php">
        <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" name="register" class="btn">Register</button>
    </div>
    <P>
        Already a member? <a href="login.php">Sign in</a>
    </P>
    </form>
    </div>
</body>
</html>