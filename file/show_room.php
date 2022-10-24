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
                <li><a href="add_room.php">Add</a></li>
                <li><a href="show_room.php">Show</a></li>
            </ul>
        </div>
		<div id="div_content" class="form"> 
            <h2>Room</h2>
            <table>
                    
            </table>
		</div>
	    <div id="div_footer">  	
	</div>
</div>
</body>
</html>


