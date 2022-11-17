<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password | CRwebsite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="wrapper"> 
        <div id="div_header">
            Change Password
        </div>
        <div id="div_subhead">
            <ul id = "menu">
                <il><a href="show_account.php">Account</a></il>
                <il><a href="show_room.php">Room</a></il>
                <il><a href="show_section.php">Section</a></il>
                <il><a href="show_course.php">Course</a></il>
            </ul>			
	    </div>
        <div id="div_main">
            <div id= "div_left">
                <ul>
                    <li><a href="add_account.php">Add</a></li>
                    <li><a href="show_account.php">Show</a></li>
                    <li><a href="accountprofile.php">Go to profile</a></li>
                </ul>
            </div>
            <div id="div_content" class="form"> 
                <form action = "updatepass.php" method = "post">
                    <div>
                        <h2>Login</h2>
                        <div>
                            <label>Password</label>
                            <input type = "password" name = "pass" placeholder = "password">
                            <label>Confirm Password</label>
                            <input type = "password" name = "confirm_pass" placeholder = "password">
                            <?php
                                echo '<input type = "hidden" name = "id" value = "'. $_POST['accountid'] .'">';
                            ?>
                            <div class = "center">
                                <input type = "submit" name = "submit" value = "Login">
                            </div>
                        </div>
                    </div>
                </form>
        </div>
            
        <div id="div_footer">  
        </div>

    </div>
    </body>
    </html>