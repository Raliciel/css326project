<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Account | CRWebsite</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
        Welcome Admin
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
            <form action = "show_account.php" method = "post">
                <div>
                    <h2>Add Account</h2>
                    <div>
                        <label>First Name</label>
                        <input type = "text" name = "firstname">
                        <label>Last Name</label>
                        <input type = "text" name = "lastname">
                        <label>Email</label>
                        <input type = "text" name = "email">
                        <label>Account Type</label>
                        <select name = "type">
                            <option value = "Admin">Administrator</option>
                            <option value = "Teacher" selected>Teacher</option>
                        </select>
                        <label>Profile Picture</label>
                        <script src = "./javascript/displayimage.js"></script>
                        <input type="file" id="image-input" name="image" accept="image/jpeg, image/png, image/jpg">
                        <div id="display-image"></div>
                        </div>
                        <input type = "hidden" id = "password" name = "password">
                        <!-- random 12 digit password: DO NOT TOUCH THE SCRIPT -->
                        <script>
                            var chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                            var pass = "";
                            for (var i = 0; i <= 10; i++) {
                                var randomNumber = Math.floor(Math.random() * chars.length);
                                pass += chars.substring(randomNumber, randomNumber +1);
                            }
                            document.getElementById("password").setAttribute("value", pass);
                        </script>
                        <input type = "hidden" name = "regisdate" id = "regisdate">
                        <script src="./javascript/getCurrentDate.js"></script>
                        <div class = "center">
                            <input type = "submit" name = "submit" value = "Submit">
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


