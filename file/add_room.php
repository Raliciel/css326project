<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Room | CRWebsite</title>
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
            <form method = "post">
                <div>
                    <h2>Add Room</h2>
                    <div>
                        <label>Room ID</label>
                        <input type = "text" name = "roomid">
                        <label>Building Name</label>
                        <input type = "text" name = "building name">
                        <label>Building Picture</label>
                        <script src = "./javascript/displayimage.js"></script>
                        <input type="file" name = "buildingimage" id="image-input" accept="image/jpeg, image/png, image/jpg">
                        <div id="display-image"></div>
                        <label>Room Size</label>
                        <input type = "number" min = "0" step = "1" name = "number">
                        </div>
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


