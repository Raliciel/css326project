<?php require_once('connect.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Section | CRWebsite</title>
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
                <li><a href="add_section.php">Add</a></li>
                <li><a href="show_section.php">Show</a></li>
                <li><a href="accountprofile.php">Go to profile</a></li>
            </ul>
        </div>
		<div id="div_content" class="form"> 
            <form action = "show_section.php" method = "post">
                <div>
                    <h2>Add Section</h2>
                    <div>
                        <label>Grade</label>
                        <input type = "number" min = "1" max = "12" step = "1" name = "secgrade"/>
                        <label>Size</label>
                        <input type = "number" min = "0" step = "1" name = "size"/>
                        <input type = "hidden" name = "regisdate" id = "regisdate">
                        <script src="./javascript/getCurrentDate.js"></script>
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


