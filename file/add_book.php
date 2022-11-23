<?php require_once('connect.php'); 
$userid = $_COOKIE["idsharing"];   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking | CRWebsite</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
        Welcome Teacher
	</div>
	<div id="div_subhead">
        <ul id = "menu">
            <il><a href="add_book.php">Add Book</a></il>
            <il><a href="show_book.php">View Book</a></il>
        </ul>			
	</div>
	<div id="div_main">
        <div id= "div_left">
            <ul>
                <li><a href="accountprofile.php">Go to profile</a></li>
            </ul>
        </div>
        <div id="div_content" class = "form">
            <form action="show_book.php" method = "POST">
                <h2>Add Booking</h2>
                <label>Teacher name</label>
                <?php 
                    //teacherid
                    echo '<input type = "hidden" name = "teacherid" value = "'. $userid.'" readonly = "readonly">';
                    $q = "select f_name, l_name from account where user_id = $userid";
                    if($result=$mysqli->query($q)){
                        $row=$result->fetch_array();
                        echo '<input style = "color: gray;" type = "text" value = "'.$row['0']. " ". $row['1']. '" readonly = "readonly"';
                    }
                    echo '<input type = "text" name = "teacherid" value = "'. $userid.'" readonly = "readonly">';
                    //course id
                    echo '<label>Course you want to book</label>';
                    echo '<select name = "courseid">';
                    $q = "select * from course";
                    if($result=$mysqli->query($q)){
                        while($row=$result->fetch_array()){
                            echo '<option value = "'. $row['course_id']. '">'.$row['course_id'].' '.$row['course_name'].'</option>';
                        }
                    }
                    else{
                        echo 'Query error: '.$mysqli->error;
                    }
                    echo '</select>';
                    //section
                    echo '<label>Section</label>';
                    echo '<select name = "sectionid">';
                    $q = "select * from section";
                    if($result=$mysqli->query($q)){
                        while($row=$result->fetch_array()){
                            echo '<option value = "'. $row['section_id']. '">'.$row['section_id'].'</option>';
                        }
                    }
                    else{
                        echo 'Query error: '.$mysqli->error;
                    }
                    echo '</select>';
                    //roomid
                    echo '<label>Room</label>';
                    echo '<select name = "roomid">';
                    $q = "select * from room";
                    if($result=$mysqli->query($q)){
                        while($row=$result->fetch_array()){
                            echo '<option value = "'. $row['room_id']. '">'.$row['building_name'].'</option>';
                        }
                    }
                    else{
                        echo 'Query error: '.$mysqli->error;
                    }
                    echo '</select>';
                ?>
                <!-- //bookdate -->
                <label>Booking Date</label>
                <input type = "date" name = "bookdate">
                <!-- //startime -->
                <label>Starting time</label>
                <input type = "time" name = "starttime"/>
                <!-- //endtime -->
                <label>End Time</label>
                <input type = "time" name = "endtime"/>
                <!-- //current date -->
                <input type = "hidden" name = "createdate" id = "regisdate">
                <script src="./javascript/getCurrentDate.js"></script>
                <div class = "center">
                            <input type = "submit" name = "submit" value = "Submit">
                </div>
            </form>
        </div>
	    <div id="div_footer">  	
	</div>
</div>
</body>
</html>


