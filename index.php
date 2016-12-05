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
        echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout.php'>Logout</a>";
    }
    ?>
    </div>
    <div id="content">
        <?php
        include_once('connection.php');
        $sql = "SELECT * FROM Message ORDER BY subject ASC";
        $res = mysql_query($sql) or die(mysql_error());
        $Messages = "";
        if (mysql_num_rows($res)>0){
            while ($row = mysql_fetch_assoc($res)) {
                $id = $row['id'];
                $recipient_ids = $row['recipient_ids'];
                $user_id= $row['user_id'];
                $subject= $row['subject'];
                $body= $row['body'];
                $date_sent= $row['date_sent'];
                $Messages .= "<a href='#' class='mes_class'>".$subject." - <font size ='-1'>".$date_sent."</font></a>";
            }
            echo $Messages;
            
        }else{
            echo "<p>There are no messages available yet</p>";
            echo "<p>test</p>";
        }
        ?>
    </div>
    </body>
</html>