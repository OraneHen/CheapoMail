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
        $cid = $_GET['cid'];
        
        if (isset($_SESSION['uid'])){
            $logged = "<a href = 'create_message.php?cid=".$cid.">Click Here to create a new Message</a>";
        }else{
            $logged = "Login to create a message";
        }
        
        $sql = "SELECT * FROM Message WHERE id='".$cid."' LIMIT 1";
        $res = mysql_query($sql) or die(mysql_error());
        
        if (mysql_num_rows($res)>0){
            $row = mysql_fetch_assoc($res);
                $id = $row['id'];
                $recipient_ids = $row['recipient_ids'];
                $user_id= $row['user_id'];
                $subject= $row['subject'];
                $body= $row['body'];
                $date_sent= $row['date_sent'];
                $Messages .= "<a href='message.php?cid=".$id."' class='mes_class'>".$subject." | <font size ='-1'>".$date_sent."</font></a><hr />";
                $Messages .= "<p>".$body."</p><hr />";
                $Messages .= "<a href = 'index.php'>return to index</a>";
            echo $Messages;
        }else{
            echo "There has been an error";
            echo "<hr /><a href = 'index.php'>return to index</a>";
        }
        
        ?>
    </div>
    </body>
</html>