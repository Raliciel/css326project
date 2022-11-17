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
                <li><a href="accountprofile.php">Go to profile</a></li>
            </ul>
        </div>
		<div id="div_content" class="form"> 
        <?php 
                if(isset($_POST['submit'])) {
                    $roomid = $_POST['roomid'];
                    $buildingname = $_POST['building_name'];
                    $roomsize = $_POST['number'];
                    $image = $_POST['buildingimage'];
                    $regisdate = $_POST['regisdate'];
                    $userid = $_COOKIE["idsharing"]; 
                    #problem is in sql file,  `course_id`,`course_name`, 'grade_to_learn`,`teacher_id',`admin_id,`regis_date` and WE'RE MISSING ADMIN_ID
                    #fixed (the name is building_image not building_picture)
                    $q="INSERT INTO room(room_id, building_name, building_image, room_size, regis_date, admin_id)
                     VALUES ('$roomid','$buildingname', '$image', '$roomsize', '$regisdate', '$userid');";
                    $result=$mysqli->query($q);
                    if(!$result){
                        echo "INSERT failed. Error: ".$mysqli->error ;
                        return false;
                    }
                }
            ?>
            <h2>Room</h2>
            <table>
                <col width="10%">
                <col width="30%">
                <col width="10%">
                <col width="20%">
                <col width="20%">
                <col width="5%">
                <tr>
                    <th>Room ID</th>
                    <th>Building</th>
                    <th>Room Size</th>
                    <th>Admin</th>
                    <th>Register Date</th>
                </tr>
                <?php
                    $q="select * from room, account where room.admin_id = account.user_id";
                    $result=$mysqli->query($q);
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                        return false;
                    } 
                    while($row=$result->fetch_array()){ ?>
                    <tr>
                        <td><?=$row['room_id']?></td>
                        <td><?=$row['building_name']?></td>
                        <td><?=$row['room_size']?></td>
                        <td><?=$row['f_name']?></td>
                        <td><?=$row['regis_date']?></td>
                        <td style="background-color: #d23390; text-align: center;"><a href="delete.php?roomid=<?=$row['room_id']?>">X</a></td>
                    </tr>
                <?php }?>
            </table>
		</div>
	    <div id="div_footer">  	
	</div>
</div>
</body>
</html>


