<?php session_start(); ?>
<?php
include_once('connection.php');

if ($_SESSION['uid']){
    if (isset($_POST['mess_submit'])) {
    
    $user_id = $_SESSION['uid'];
    $recipient_ids = $_POST['address'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $sql = "INSERT INTO Message (id, recipient_ids, user_id, subject, body,date_sent) VALUES(NULL,'".$recipient_ids."','".$user_id."','".$subject."','".$body."',NULL)";
    $res = mysql_query($sql) or die(mysql_error());
    header('Location: index.php');
    }else{
        exit();
    }
}else{
    exit();
}
?>