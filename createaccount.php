<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cheapo Mail Login</title>
    </head>
    <body>
    <div>
    <?php
    echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout.php'>Logout</a><hr />";
    ?>
    <form method='post' action = 'createaccount_parse.php'>
       Firstname: <input type="text" name="firstname"/><br><br/>
            Lastname: <input type="text" name="lastname"/><br><br/>
            Username: <input type="text" name="username"/><br><br/>
            Password: <input type="password" name="password"/><br><br/>
            <input type="submit" name="acc_submit" value="submit"/>
    </form>
    <hr /><a href = 'index.php'>return to index</a><br><br/>
    </div>
    </body>
</html>