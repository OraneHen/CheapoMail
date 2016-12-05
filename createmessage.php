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
    <form method='post' action = 'createmessage_parse.php'>
        Send to: <input type='text' name='address'/><br><br/>
        Subject: <input type='text' name='subject'/><br><br/>
        <textarea name="body" rows="5" cols="75"></textarea><br><br/>
        <input type='submit' name='mess_submit' value='submit'/><br><br/>
    </form>
    <hr /><a href = 'index.php'>return to index</a><br><br/>
    </div>
    </body>
</html>