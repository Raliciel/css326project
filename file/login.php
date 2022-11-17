<?php 
    require_once('connect.php'); 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q="Select * from account where username like '$username' and passwd like '$password'";
    $result=$mysqli->query($q);
    if(!$result){
        echo "SELECT failed. Error: ".$mysqli->error ;
        return false;
    }

    echo "Redirecting to accountprofile" ;
    while($row=$result->fetch_array()) {
        $user_id = $row["user_id"];
        setcookie("idsharing", $user_id, time() + (86400 * 30), "/"); // 86400 = 1 day
        
    }
    header("Location: accountprofile.php");


?>