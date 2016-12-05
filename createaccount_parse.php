<?php session_start(); ?>
<?php
include_once('connection.php');

if ($_SESSION['uid']){
    if (isset($_POST['acc_submit'])) {
        
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO User (id, firstname, lastname, username, password) VALUES(NULL,'".$firstname."','".$lastname."','".$username."','".$password."')";
    $res = mysql_query($sql) or die(mysql_error());
    header('Location: index.php');
    }else{
        exit();
    }
}else{
    exit();
}
?>