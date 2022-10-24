<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Course | CRWebsite</title>
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
                <li><a href="add_course.php">Add</a></li>
                <li><a href="show_course.php">Show</a></li>
            </ul>
        </div>
		<div id="div_content" class="form"> 
            <form method = "post">
                <div>
                    <h2>Add Course</h2>
                        <div>
                            <label>Course ID</label>
                            <input type = "text" name = "roomid">
                            <label>Course Name</label>
                            <input type = "text" name = "roomid">
                            <label>Grade</label>
                            <input type = "number" min = "1" max = "12" step = "1" name = "coursegrade"/>
                            <label>Teacher</label>
                            <select name = "courseteacher">
                                <?php
                                    $q = "SELECT user_id, f_name, l_name FROM account WHERE `type` = 'Teacher'";
                                    if($result=$mysqli->query($q)){
                                        while($row=$result->fetch_array()){
                                            echo '<option value = "'. $row[0]. '">'.$row[1].' '.$row[2].'</option>';
                                        }
                                    }
                                    else{
                                        echo 'Query error: '.$mysqli->error;
                                    }
                                ?>
                            </select>
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


