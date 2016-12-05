<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cheapo Mail Login</title>
    </head>
    <body>
    
    <div>
    <?php
    if (!isset($_SESSION['uid'])){
        echo    "<form method='post' action = 'login.php'>
            Username: <input type='text' name='username'/>$nbsp;
            Password: <input type='password' name='password'/>$nbsp;
            <input type='submit' name='submit' value='submit'/>";
    } else {
        header('Location: inbox.php?uid='.$_SESSION['uid'].'');
    }
    ?>
    </div>
    </body>
</html>