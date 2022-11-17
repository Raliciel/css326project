<?php 
    require_once('connect.php'); 
    $userid = $_COOKIE["idsharing"];   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account | CRWebsite</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
        <?php
                $q = "select * from account where user_id = $userid";
                $result=$mysqli->query($q);
                if(!$result){
                    echo "SELECT failed. Error: ".$mysqli->error ;
                    return false;
                }

                while($row=$result->fetch_array()){
            ?>
        Welcome <?=$row['type']?>
	</div>
	<div id="div_subhead">
        <ul id = "menu">
            <?php
                    if($row['type'] == "Admin") {
            ?>
            <il><a href="show_account.php">Account</a></il>
            <il><a href="show_room.php">Room</a></il>
            <il><a href="show_section.php">Section</a></il>
            <il><a href="show_course.php">Course</a></il>
            <?php
                    }
                    else {
            ?>
            <il><a href="add_book.php">Add Book</a></il>
            <il><a href="show_book.php">View Book</a></il>
            <?php }?>
        </ul>			
	</div>
	<div id="div_main">
        <div id= "div_left">
        </div>
        <div id="div_content" class="form">
            <form action = "changepass.php" method = "POST">
                <h2> Welcome <?=$row['f_name']?> <?=$row['l_name']?> </h2>
                <div id="display-image"></div>

                <h2>Account Information</h2>
                <label> Username</label>
                <p><?=$row['username']?></p>
                <label>Password</label>
                <input type = "hidden" name = "accountid" value = "<?=$row['user_id']?>">
                <input id = "change-password" type = "submit" value = "Change Your Password">

                <h2>Other</h2>
                <div class = "center">
                    <a href = "index.html">
                        Log out
                    </a>
                </div>
            </form>

        </div>
        <?php }?>
	    <div id="div_footer">  
	</div>
</div>
</body>
</html>


