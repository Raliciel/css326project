<?php
    require_once('connect.php');
    if (isset($_POST['pass'])){
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['confirm_pass'];
        if ($pass == $confirm_pass){
            $q="UPDATE account SET passwd = '$pass' WHERE `user_id` = $id;";
            $result=$mysqli->query($q);
            if(!$result){
                echo "UPDATE failed. Error: ".$mysqli->error ;
                return false;
            } 
        }
        else {
            $massage = 'Password and Confirm Password are not matched';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        $mysqli->close();
        //redirect
        header("Location: accountprofile.php");
    }
?>