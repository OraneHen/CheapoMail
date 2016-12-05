<!DOCTYPE html>
<?php

$host = "localhost";
$user = "orane";
$pass ="";
$db="CheapoDB";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if(isset($_POST['username'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO User (id, firstname, lastname, username, password) 
    VALUES ('2', ".$firstname."', '".$lastname."', '".$username."','".$password."')";
    $sql = "SELECT * FROM User WHERE username='".$username."' AND password='".$password."' LIMIT 1";
    $res = mysql_query($sql);
    
        if (mysql_num_rows($res)== 1) {
            echo "New record created successfully";
            exit();
        } else {
            echo "Error:";
            exit();
        }
}
?>

<html>
    <head>
        <title>Cheapo Mail Admin</title>
    </head>
    <body>
        <form method="post" action = "admin.php">
            Firstname: <input type="text" name="firstname"/><br><br/>
            Lastname: <input type="text" name="lastname"/><br><br/>
            Username: <input type="text" name="username"/><br><br/>
            Password: <input type="password" name="password"/><br><br/>
            <input type="submit" name="submit" value="submit"/>
        </form>
    </body>
</html>