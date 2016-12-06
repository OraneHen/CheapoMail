<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cheapo Mail Inbox</title>
    </head>
    <body>
    
    <div>
        <?php
        echo "<p>You are logged in as ".$_SESSION['username']." &bull; <a href='logout.php'>Logout</a>";
        if ($_SESSION['uid']==1){
        echo    "<a href='createaccount.php'>           Create new user</a><hr \>";
        }
        ?>
    </div>
    <div id="content">
        <?php
        include_once('connection.php');
        $sql = "SELECT * FROM Message WHERE recipient_ids LIKE '%".$_SESSION['username']."%' ORDER BY subject ASC";
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
                $Messages .= "<a href='message.php?cid=".$id."' class='mes_class'>".$subject." - <font size ='-1'>".$date_sent."</font></a><hr \>";
            }
            echo $Messages;
            echo "<a href='createmessage.php'>Create new Message</a>";
            
        }else{
            echo "<p>There are no messages available yet</p>";
        }
        ?>
    </div>
    </body>
</html>